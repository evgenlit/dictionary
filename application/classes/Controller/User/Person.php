<?php

defined('SYSPATH') OR die('No direct script access.');

class Controller_User_Person extends Controller_User {
	
	public function action_view() {
		$id = $this->request->param('id');
		if (null == $id) {
			throw new Exception('Не указан идентификатор персоналии.');
		}
		$data = array();
		$person = ORM::factory('Person', $id);
		$videos = ORM::factory('Video')->where('person_id', '=', $id)->find_all();
		$images = ORM::factory('Photo')
				->where('person_id', '=', $id)
				->and_where('main', 'IS', NULL)
				->find_all();
		$data['person'] = $person;
		$data['videos'] = $videos;
		$data['images'] = $images;
		$this->setData($data);
		$this->render();
	}
	
}