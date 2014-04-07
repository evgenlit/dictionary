<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Video extends Controller_Admin {

    public function action_index() {
        $this->render();
    }

    public function action_add() {

        $this->render();
    }

    public function action_jupload() {
        if ($_FILES) {
            $video = ORM::factory('Video');
            $result = $video->upload();
            if ($result !== false){
                $video->validationRequired(false);
                $video->setFile($result);
                $video->save();
                $this->setData(array(
                   'id' => $video->getId() 
                ));
            }
        }
        
        $this->render();
    }
	
	

}
