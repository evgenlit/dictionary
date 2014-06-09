<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Default {

	public $template = 'layouts/index';

	public function action_index() {
		
		$this->template->styles[]
                = '/res/css/index.css';
		
		$data = array();
		$persons = ORM::factory('Person')->find_all();
		$data['persons'] = $persons;
		$this->setData($data);
		$this->render();
	}

}