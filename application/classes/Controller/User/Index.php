<?php

defined('SYSPATH') OR die('No direct script access.');

class Controller_User_Index extends Controller_User {
//	public $template = 'layouts/user/index/index';

	public function action_index() {
		$this->render();
	}
	
	public function action_about() {
		$this->render();
	}
	
	public function action_info() {
		$this->render();
	}
	
	public function action_compilers() {
		$this->render();
	}
	
	public function action_persons() {
		$data = array();
		$persons = 
				ORM::factory('person')
				->join('photos')
				->on('photos.person_id', '=', 'person.id')
				->where('photos.main', '=', 1)
				->order_by('name', 'ASC')
				->find_all();
//		var_dump($persons); die;
		$data['persons'] = $persons;
		$this->setData($data);
		$this->render();
	}

}