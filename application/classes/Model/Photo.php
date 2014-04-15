<?php

class Model_Photo extends ORM {
	
	protected $_table_name = 'photos';
	protected $_belongs_to = array(
		'person' => array(
			'model'			=> 'Person',
			'foreign_key'	=> 'person_id'
		)
	);
	
    public function rules() {
		if ($this->_validationRequired) {
            return array(
				'title' => array(
                    array('not_empty'),
                    array('max_length', array(':value', 150)),
                ),
                'description' => array(
                    array('not_empty'),
                    array('max_length', array(':value', 150)),
                ),
                'date' => array(
                    array('not_empty'),
                    array('date')
                )
            );
		}
		
		return array();
    }
	
	public function upload() {
        if ($_FILES) {
            if ($_FILES["file"]["size"] > 1024 * 76 * 1024) {
                return false;
            }

            if (is_uploaded_file($_FILES["file"]["tmp_name"])) {
            	$data = array();
                $fname = explode(".", $_FILES["file"]["name"]);
                $ext = end($fname);
                $name = md5(rand(1, rand(100, 700)));

                $new_path = DOCROOT . "res/upload/photos/" . $name . '.' . $ext;
                move_uploaded_file($_FILES["file"]["tmp_name"], $new_path);
				$data['new_path'] = $new_path;
				$data['name'] = $name.'.'.$ext;
                return $data;
            } else {
                return false;
            }
        }

        return false;
    }
	
	public function setPersonId($id) {
		if(!isset($id)) {
			$this->person_id = null;
		} else {
			$this->person_id = $id;
		}
	}
}

