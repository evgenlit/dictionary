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
		$this->template->scripts[]
                = '/res/etc/ckeditor/ckeditor.js';
        $this->template->scripts[]
                = '/res/etc/ckeditor/config.js';
        $this->template->scripts[]
                = '/res/etc/ckeditor/lang/ru.js';

        $this->template->scripts[]
                = '/res/etc/ng/ng_lite.js';

        $this->template->scripts[]
                = '/res/etc/ng/timepicker_lite.js';

        $this->template->scripts[]
                = '/res/etc/ckeditor/lang/ru.js';
        $data = array();
        if ($_POST) {
            $data = $this->getPost();
            $person = ORM::factory('Person');
            $person->loadValues($data);
            try {
                $person->save();
				$last_insert_id = $person->pk();
				if ($_FILES) {
		            $photo = ORM::factory('Photo');
		            $result = $photo->upload();
		            if ($result !== false){
		                $photo->validationRequired(false);
		                $photo->setPath($result);
						$photo->setPerson_id($last_insert_id);
						$photo->description = 'Портрет';
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

}
