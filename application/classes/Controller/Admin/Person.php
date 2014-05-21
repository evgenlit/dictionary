<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Person extends Controller_Admin {

    public function action_index() {
		
		$data = array();
		$persons = ORM::factory('Person')->find_all();
		$data['persons'] = $persons;
		
		$this->setData($data);
        $this->render();
    }

    public function action_add() {
/*		$this->template->scripts[]
                = '/res/etc/ckeditor/ckeditor.js';
		$this->template->scripts[]
                = '/res/etc/ckeditor/config.js';
        $this->template->scripts[]
                = '/res/etc/ckeditor/lang/ru.js';
*/        $data = array();
        if ($_POST) {
//			var_dump($_POST); die;
            $data = $this->getPost();
            try {
				$person = ORM::factory('Person');
//				$test = HTML::entities($_POST['description']);
//				echo $test; die;
//				$person->loadValues($data);
				$person->name = $data['name'];
				$person->years = $data['years'];
				$person->epigraph = null; //потом поменять!!!!!!!!
				$person->description = HTML::entities($_POST['description']);
				$person->save();
				$last_insert_id = $person->pk();
//				echo $last_insert_id; die;
				if ($_FILES) {
		            $photo = ORM::factory('Photo');
		            $result = $photo->upload();
		            if ($result !== false){
		                $photo->validationRequired(false);
		                $photo->setPath($result['new_path']);
						$photo->setName($result['name']);
						$photo->setPersonId($last_insert_id);
						$photo->setDescription('Портрет');
						$photo->setMain(1);
		                $photo->save();
		            }
		        }
                $data['success'] = 'Новая запись добавлена!';
            }  catch (ORM_Validation_Exception $e) {
                $data['errors'] = $e->errors('validation', 'ru');  
            }
        }
        $this->setData($data);
        $this->render();
    }

	public function action_edit() {
		$this->template->scripts[]
                = '/res/etc/ckeditor/ckeditor.js';
		$this->template->scripts[]
                = '/res/etc/ckeditor/config.js';
        $this->template->scripts[]
                = '/res/etc/ckeditor/lang/ru.js';
		$id = $this->request->param('p1');
		if (null == $id) {
			throw new Exception('Не указан идентификатор персоналии.');
		}
		$selectPhoto = array(
			'person_id'	=> $id,
			'main'		=> 1
		);
		$data = array();
		$person = ORM::factory('Person', $id);
		$photomain = ORM::factory('Photo', $selectPhoto);
		if (isset($photomain)) {
			$data['mainPhoto'] = $photomain->getName();
		}
		
/*		
		if ($_POST) {
            $data = $this->getPost();
            $person = ORM::factory('Person');
            $person->loadValues($data);
            try {
                $person->save();
				$last_insert_id = $person->pk();
			//	echo $last_insert_id; die;
				if ($_FILES) {
		            $photo = ORM::factory('Photo');
		            $result = $photo->upload();
		            if ($result !== false){
		                $photo->validationRequired(false);
		                $photo->setPath($result['new_path']);
						$photo->setName($result['name']);
						$photo->setPersonId($last_insert_id);
						$photo->setDescription('Портрет');
						$photo->setMain(1);
		                $photo->save();
		            }
		        }
                $data['success'] = 'Запись изменена!';
            }  catch (ORM_Validation_Exception $e) {
                $data['errors'] = $e->errors('validation', 'ru');  
            }
		}
*/		
		$data['person'] = $person;
		$this->setData($data);
		$this->render();
		
		
	}

	public function action_delete() {
		$id = $this->request->param('p1');
		if (null == $id) {
			throw new Exception('Не указан идентификатор персоналии.');
		}
		$db = Database::instance();
		$db->begin();

		try {
			$person = ORM::factory('Person', $id);
			foreach ($person->photos->find_all() as $photo) {
				$photo->delete();
			}
			$person->delete();
			$db->commit();
			$this->redirect('/admin/person/index');
		} catch(Database_Exception $e) {
			$db->rollback();
		}
		
	}

}
