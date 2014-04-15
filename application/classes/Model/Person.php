<?php

class Model_Person extends ORM {
	
	protected $_table_name = 'persons';
	protected $_has_many = array(
		'videos' => array(
			'model'			=> 'Video',
			'foreign_key'	=> 'person_id'
		),
		'photos' => array(
			'model'			=> 'Photo',
			'foreign_key'	=> 'person_id'
		)
	);
	
    public function rules() {
		if ($this->_validationRequired) {
            return array(
				'name' => array(
                    array('not_empty'),
                    array('max_length', array(':value', 50)),
                ),
                'years' => array(
                    array('not_empty')
                ),
                'description' => array(
                    array('not_empty'),
                    array('max_length', array(':value', 500)),
                )
            );
		}
		
		return array();
    }
	
	public function getPhotoName($id) {
		$array = array(
			'person_id'	=> $id,
			'main'		=> 1
		);
		$photo = ORM::factory('Photo', $array);
		return $photo->name;
	}
	
}

