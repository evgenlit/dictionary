<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_User_Index extends Controller_Default {

	public function action_index() {
		$data = array();
		$persons = ORM::factory('Person')->find_all();
		$data['persons'] = $persons;
		
		$this->setData($data);
        $this->render();
	}

}