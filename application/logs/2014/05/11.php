<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-11 13:41:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Admin\Photo.php [ 111 ] in file:line
2014-05-11 13:41:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-11 21:37:42 --- CRITICAL: Exception [ 0 ]: Не указан идентификатор персоналии. ~ APPPATH\classes\Controller\Admin\Photo.php [ 105 ] in Z:\home\dictionary\www\system\classes\Kohana\Controller.php:84
2014-05-11 21:37:42 --- DEBUG: #0 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Photo->action_changeMainPhoto()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Photo))
#3 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\dictionary\www\system\classes\Kohana\Controller.php:84
2014-05-11 21:37:43 --- CRITICAL: Exception [ 0 ]: Не указан идентификатор персоналии. ~ APPPATH\classes\Controller\Admin\Photo.php [ 105 ] in Z:\home\dictionary\www\system\classes\Kohana\Controller.php:84
2014-05-11 21:37:43 --- DEBUG: #0 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Photo->action_changeMainPhoto()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Photo))
#3 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\dictionary\www\system\classes\Kohana\Controller.php:84
2014-05-11 22:38:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\views\layouts\admin\person\edit.php [ 65 ] in Z:\home\dictionary\www\application\views\layouts\admin\person\edit.php:65
2014-05-11 22:38:35 --- DEBUG: #0 Z:\home\dictionary\www\application\views\layouts\admin\person\edit.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\diction...', 65, Array)
#1 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#2 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#3 Z:\home\dictionary\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\dictionary\www\application\views\layouts\admin\default.php(101): Kohana_View->__toString()
#5 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#6 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#7 Z:\home\dictionary\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#11 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\dictionary\www\application\views\layouts\admin\person\edit.php:65