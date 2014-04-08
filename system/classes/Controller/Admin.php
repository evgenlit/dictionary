<?php

defined('SYSPATH') OR die('No direct script access.');

abstract class Controller_Admin extends Controller_Default {

    public $template = 'layouts/admin/default';
    protected $_user = null;

    public function before() {
        parent::before();  
        if (
            !Auth::instance()->logged_in()
            &&
            Request::current()->controller() != 'Auth'
        ) {
            $this->redirect('/admin/auth/index/');
        } else {
            $this->_user = Auth::instance()->get_user();
            if (null != $this->_user) {
                $this->template->user = $this->_user;  
            }
        }
    }

}
