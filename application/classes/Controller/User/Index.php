<?php

defined('SYSPATH') OR die('No direct script access.');

class Controller_User_Index extends Controller_Default {
	public $template = 'layouts/user/index/index';

	public function action_index() {
		$data = array();
		$persons = ORM::factory('Person')->find_all();
		$data['persons'] = $persons;
		$this->setData($data);
		$this->render();
	}
	
	public function action_video() {
		$data = array();
		$video = ORM::factory('Video')->where('person_id', '=', 6)->find();
		var_dump($video);
		$data['video'] = $video;
		$content = View::factory('/layouts/user/index/video')->render();
		$this->response->body($content);
	}

}