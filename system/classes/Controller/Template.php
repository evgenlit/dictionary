<?php defined('SYSPATH') OR die('No direct script access.');

abstract class Controller_Template extends Kohana_Controller_Template {
	public $template = 'layouts/default';
        
        public function before() {
            parent::before();
            $this->template->ajax = false;
            $this->template->styles = array();
            $this->template->scripts = array();
        }
}
