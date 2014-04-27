<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Photo extends Controller_Admin {

	private function uploads_dir() {
		return DOCROOT . 'res/upload/photos/' . DIRECTORY_SEPARATOR;
	}
	
	 public function action_index() {
		
		$this->render();
    }
	
	public function action_add() {
		$data = array();
		
		$uploads = new DirectoryIterator($this->uploads_dir());
		foreach ($uploads as $file) {
			if ($file->isFile()) {
				$data['files'] = $file->getFilename();
			}
		}
		$data['errors'] = Session::instance()->get_once('errors', array());
		$data['message'] = Session::instance()->get_once('message');
//		var_dump($data); die;
		$this->setData($data);
        $this->render();
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
	
	public function changeMainPhoto($id) {
		if (null == $id) {
			throw new Exception('Не указан идентификатор персоналии.');
		}
		$db = Database::instance();
		$db->begin();

		try {
			$data = array(
				'person_id'	=> $id,
				'main'		=> 1
			);
			$mainPhoto = ORM::factory('Photo', $data);
			$mainPhoto->delete();
			if ($_FILES) {
		            $photo = ORM::factory('Photo');
		            $result = $photo->upload();
		            if ($result !== false){
		                $photo->validationRequired(false);
		                $photo->setPath($result['new_path']);
						$photo->setName($result['name']);
						$photo->setPersonId($id);
						$photo->setDescription('Портрет');
						$photo->setMain(1);
		                $photo->save();
		            }
		        }
			$db->commit();
		} catch(Database_Exception $e) {
			$db->rollback();
		}
		
	}
	
}