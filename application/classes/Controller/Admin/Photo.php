<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Photo extends Controller_Admin {

	private function uploads_dir() {
		return DOCROOT . 'res/upload/photos/' . DIRECTORY_SEPARATOR;
	}

	public $template = NULL;
	
	public function action_view() {
		$this->template = View::factory('files');
		
		// initialize files array
		$files = array();
		
		// scan uploads directory and build files array
		$uploads = new DirectoryIterator($this->uploads_dir());
		foreach ($uploads as $file) { /** @var DirectoryIterator $file **/
			if ($file->isFile()) {
				$files[] = $file->getFilename();
			}
		}
		
		// set values to template
		$this->template->set(array(
			// files list
			'files' => $files,
			// errors from user session
			'errors' => Session::instance()->get_once('errors', array()),
			// message from user session
			'message' => Session::instance()->get_once('message'),
		));
		
		// render template
		$this->response->body($this->template->render());
	}
	
	/**
     * Generate preview action
     */
	public function action_preview() {
		// build image file name
		$filename = $this->uploads_dir() . $this->request->param('filename');
		
		// check if file exists
		if (! file_exists($filename) OR ! is_file($filename)) {
			throw new HTTP_Exception_404('Picture not found');
		}
		
		/** @var Image $image **/ // trying get picture preview from cache
		if (($image = Cache::instance()->get($filename)) === NULL) {
			// create new picture preview
			$image = Image::factory($filename)
					->resize(100, 100)
					->render();
			
			// store picture in cache
			Cache::instance()->set($filename, $image, Date::MONTH);
		}
		
		// gets image type
		$info = getimagesize($filename);
		$mime = image_type_to_mime_type($info[2]);
		
		// display image
		$this->response->headers('Content-type', $mime);
		$this->response->body($image);
	}
	
	/**
     * Upload file action
     */
	public function action_upload() {
		// check request method
		if ($this->request->method() === Request::POST) {
			// create validation object
			$validation = Validation::factory($_FILES)
					->label('image', 'Picture')
					->rules('image', array(
						array('Upload::not_empty'),
						array('Upload::image'),
			));
			
			// check input data
			if ($validation->check()) {
				// process upload
				Upload::save($validation['image'], NULL, $this->uploads_dir());
				// set user message
				Session::instance()->set('message', 'Image is successfully uploaded');
			}
			
			// set user errors
			Session::instance()->set('errors', $validation->errors('upload'));
		}
		
		// redirect to home page
		$this->request->redirect('/');
	}
	
}