<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Photo extends Controller_Admin {

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
	
	public function action_jchangeMainPhoto() {
		$id = $this->request->param('p1');
		if (null == $id) {
			throw new Exception('Не указан идентификатор персоналии.');
		}
		$db = Database::instance();
		$db->begin();

		try {
			if ($_FILES) {
				$data = array(
					'person_id'	=> $id,
					'main'		=> 1
				);
				$mainPhoto = ORM::factory('Photo', $data);
				$mainPhoto->delete();
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
					$this->setData(array(
						'name' => $photo->getName() 
					 ));
				}
			}
			$db->commit();
		} catch(Database_Exception $e) {
			$db->rollback();
		}
		$this->render();
	}
	
	public function action_jupload() {
		$id = $this->request->param('p1');
		if (null == $id) {
			throw new Exception('Не указан идентификатор персоналии.');
		}
		if ($_FILES) {
			$photo = ORM::factory('Photo');
			foreach ($_FILES as $file) {
				$result = $photo->upload();
				if ($result !== false){
					$photo->validationRequired(false);
					$photo->title = 'gallery'.$id;
					$photo->description = 'Фото из галереи';
					$photo->setPath($result['new_path']);
					$photo->setName($result['name']);
					$photo->setPersonId($id);
					$photo->main = NULL;
					$photo->save();
					
					$this->setData(
						array(
							$photo->getId() => $photo->getName()
						)
					);
				}
			}
		}

		$this->render();
    }
	
}