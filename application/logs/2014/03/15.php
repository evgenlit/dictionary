<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-15 22:11:10 --- CRITICAL: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\dict\www\system\classes\Kohana\View.php:137
2014-03-15 22:11:10 --- DEBUG: #0 Z:\home\dict\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('welcome')
#1 Z:\home\dict\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('welcome', NULL)
#2 Z:\home\dict\www\application\classes\Controller\Welcome.php(7): Kohana_View::factory('welcome')
#3 Z:\home\dict\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\dict\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 Z:\home\dict\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\dict\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\dict\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\dict\www\system\classes\Kohana\View.php:137