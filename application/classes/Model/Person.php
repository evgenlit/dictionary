<?php

class Model_Person extends ORM {
	
	protected $_table_name = 'persons';
	protected $has_many = array(
		'videos' => array(
			'model'		=> 'videos',
			'through'	=> 'persons_videos'
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
	
}

