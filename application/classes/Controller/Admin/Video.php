<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Video extends Controller_Admin {

    public function action_index() {
        $data = array();
		$videos = ORM::factory('Video')->find_all();
		$data['videos'] = $videos;
		
		$this->setData($data);
        $this->render();
    }

    public function action_add() {

        $this->render();
    }
	
	public function action_edit() {
		
		$id = $this->request->param('id');
		$data = array();
		$result = ORM::factory('Video')->find($id);
		$data['video'] = $result;
		$this->setData($data);
		$this->render();
	}

    public function action_jupload() {
        if ($_FILES) {
            $video = ORM::factory('Video');
            $result = $video->upload();
            if ($result !== false){
                $video->validationRequired(false);
                $video->setFile($result);
				$video->description = NULL;
                $video->save();
                $this->setData(array(
                   'id' => $video->getId() 
                ));
            }
        }
        
        $this->render();
    }
	
	public function action_jvideoAdd() {
		$id = $this->request->param('p1');
		if (null == $id) {
			throw new Exception('Не указан идентификатор персоналии.');
		}
		
		if($_POST) {
			$video = ORM::factory('Video');
			$video->title = $_POST['title'];
			$video->description = $_POST['description'];
			$video->youtube = HTML::entities($_POST['youtube']);
			$video->person_id = $id;
			$video->save();
			$this->setData(array(
				'id'			=> $video->getId(),
				'title' 		=> $video->getTitle(),
				'description'	=> $video->getDescription(),
				'date'			=> $video->getDate(),
				'yuotube'		=> $video->getYoutube() 
			));
		}
		$this->render();
	}

}
