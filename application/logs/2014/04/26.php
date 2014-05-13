<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-26 00:20:39 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\layouts\admin\photo\add.php [ 7 ] in Z:\home\dictionary\www\application\views\layouts\admin\photo\add.php:7
2014-04-26 00:20:39 --- DEBUG: #0 Z:\home\dictionary\www\application\views\layouts\admin\photo\add.php(7): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\diction...', 7, Array)
#1 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#2 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#3 Z:\home\dictionary\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\dictionary\www\application\views\layouts\admin\default.php(101): Kohana_View->__toString()
#5 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#6 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#7 Z:\home\dictionary\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Photo))
#11 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\dictionary\www\application\views\layouts\admin\photo\add.php:7