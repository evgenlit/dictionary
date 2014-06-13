<?php

defined('SYSPATH') OR die('No direct script access.');

abstract class Controller_User extends Controller_Default {

    public $template = 'layouts/user/default';
    protected $_user = null;

    public function before() {
        parent::before();
		$this->_user = Auth::instance()->get_user();
        
    }

}
