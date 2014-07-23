<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Person extends Controller_Admin {

    public function action_index() {
		
		$data = array();
		$persons = ORM::factory('person')->find_all();
		$data['persons'] = $persons;
		
		$this->setData($data);
        $this->render();
    }

    public function action_add() {
		$data = array();
        if ($_POST) {
            $data = $this->getPost();
            try {
				$person = ORM::factory('person');
				$person->name = $data['name'];
				$person->years = $data['years'];
				$person->epigraph = $_POST['epigraph'];
				$person->description = $_POST['description'];
				$person->save();
				$last_insert_id = $person->pk();
				if ($_FILES) {
		            $photo = ORM::factory('photo');
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
		$person = ORM::factory('person', $id);
		$photomain = ORM::factory('photo', $selectPhoto);
		if (isset($photomain)) {
			$data['mainPhoto'] = $photomain->getName();
		}
		
		$videos = ORM::factory('video')->where('person_id', '=', $id)->find_all();
		
		$images = ORM::factory('photo')
						->where('person_id', '=', $id)
						->and_where('main', 'IS', NULL)
						->find_all();
//		var_dump($images); die;
		$data['person'] = $person;
		$data['videos'] = $videos;
		$data['images'] = $images;
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
			$person = ORM::factory('person', $id);
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
	
	public function action_save() {
		$data = $this->request->query();
		$person = ORM::factory('person', $data['id']);
		$person->$data['field'] = $data['value'];
		$person->save();
		
	}
	
	public function action_jeditEpigraph() {
		$id = $this->request->param('p1');
		if (null == $id) {
			throw new Exception('Не указан идентификатор персоналии.');
		}
		if ($_POST) {
			$person = ORM::factory('person', $id);
			$person->epigraph = $_POST['value'];
			$person->save();
		} else {
			echo 'Все плохо!';
		}
	}
	
	public function action_jeditDescription() {
		$id = $this->request->param('p1');
		if (null == $id) {
			throw new Exception('Не указан идентификатор персоналии.');
		}
		if ($_POST) {
			$person = ORM::factory('person', $id);
			$person->description = $_POST['value'];
			$person->save();
		} else {
			echo 'Все плохо!';
		}
	}
	
	public function action_jeditProceedings() {
		$id = $this->request->param('p1');
		if (null == $id) {
			throw new Exception('Не указан идентификатор персоналии.');
		}
		if ($_POST) {
			$person = ORM::factory('person', $id);
			$person->proceedings = $_POST['value'];
			$person->save();
		} else {
			echo 'Все плохо!';
		}
	}

}
