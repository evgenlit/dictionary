<?php

defined('SYSPATH') OR die('No direct script access.');

abstract class Controller_Default extends Controller_Template {

    public $template = 'layouts/user/default';
    protected $_user = null;
    protected $_data = array();
    protected $_controller = null;
    protected $_action = null;
    protected $_type = null;

    public function getPost() {
        if ($_POST) {
            $array = $_POST;
            foreach ($array as $key => $value) {
                if ($key == 'content') {
                    continue;
                }

                $array[$key] = trim(strip_tags($value));
            }
            return $array;
        }

        return null;
    }

    public function before() {
        parent::before();
        $controller = strtolower($this->request->controller());
        $action = $this->request->action();
        $directory = $this->request->directory();


        $this->_user = Auth::instance()->get_user();
        $this->template->user = $this->_user;
        $this->template->styles = array();
        $this->template->scripts = array();
        $this->template->current_page = $this->request->detect_uri();
        $this->template->title = null;
        $this->template->keywords = null;
        $this->template->description = null;


        /* Автоматом назначаем для контроллера и действия вьюшку и прочее */
        if ($directory === 'Admin') {
            $type = 'admin';
        } else {
            $type = 'user';
        }

        $this->template->styles[] =
                '/res/css/' . $type . '/' . $controller . '/' . $action . '.css';

        $this->template->scripts[] =
                '/res/js/' . $type . '/' . $controller . '/' . $action . '.js';


        $this->_type = $type;
        $this->_controller = $controller;
        $this->_action = $action;
    }

    public function setData($data) {
        $this->_data = $data;
    }

    public function render() {
        if ($this->_action[0] === 'j') {
            echo json_encode($this->_data); die;
        }
        $this->template->content = View::factory(
                        'layouts/' . $this->_type . '/'
                        . $this->_controller
                        . '/' . $this->_action, $this->_data
        );
    }

}
