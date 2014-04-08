<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-17 21:34:28 --- CRITICAL: View_Exception [ 0 ]: The requested view layouts/user/default could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\dict\www\system\classes\Kohana\View.php:137
2014-03-17 21:34:28 --- DEBUG: #0 Z:\home\dict\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('layouts/user/de...')
#1 Z:\home\dict\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('layouts/user/de...', NULL)
#2 Z:\home\dict\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('layouts/user/de...')
#3 Z:\home\dict\www\system\classes\Controller\Template.php(7): Kohana_Controller_Template->before()
#4 Z:\home\dict\www\system\classes\Controller\Default.php(31): Controller_Template->before()
#5 Z:\home\dict\www\system\classes\Kohana\Controller.php(69): Controller_Default->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\dict\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 Z:\home\dict\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\dict\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\dict\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\dict\www\system\classes\Kohana\View.php:137