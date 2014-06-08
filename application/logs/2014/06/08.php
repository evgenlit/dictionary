<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-08 11:54:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Index.php [ 8 ] in file:line
2014-06-08 11:54:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-08 11:56:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Admin\Index.php [ 8 ] in file:line
2014-06-08 11:56:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-08 11:56:57 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Admin\Index.php [ 8 ] in file:line
2014-06-08 11:56:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-08 11:57:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Admin\Index.php [ 8 ] in file:line
2014-06-08 11:57:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-08 22:10:52 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 13 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-06-08 22:10:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\diction...', 423, Array)
#1 Z:\home\dictionary\www\system\classes\Kohana\Route.php(423): preg_match('#^index(?:(?P</...', '', NULL)
#2 Z:\home\dictionary\www\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 Z:\home\dictionary\www\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-06-08 22:13:57 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 12 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-06-08 22:13:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\diction...', 423, Array)
#1 Z:\home\dictionary\www\system\classes\Kohana\Route.php(423): preg_match('#^user(?:(?P</c...', '', NULL)
#2 Z:\home\dictionary\www\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 Z:\home\dictionary\www\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-06-08 22:13:58 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 12 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-06-08 22:13:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\diction...', 423, Array)
#1 Z:\home\dictionary\www\system\classes\Kohana\Route.php(423): preg_match('#^user(?:(?P</c...', '', NULL)
#2 Z:\home\dictionary\www\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 Z:\home\dictionary\www\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-06-08 22:23:14 --- CRITICAL: View_Exception [ 0 ]: The requested view layouts/user/index/index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\dictionary\www\system\classes\Kohana\View.php:137
2014-06-08 22:23:14 --- DEBUG: #0 Z:\home\dictionary\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('layouts/user/in...')
#1 Z:\home\dictionary\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('layouts/user/in...', Array)
#2 Z:\home\dictionary\www\system\classes\Controller\Default.php(78): Kohana_View::factory('layouts/user/in...', Array)
#3 Z:\home\dictionary\www\application\classes\Controller\User\Index.php(8): Controller_Default->render()
#4 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_User_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Index))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\dictionary\www\system\classes\Kohana\View.php:137
2014-06-08 22:26:20 --- CRITICAL: View_Exception [ 0 ]: The requested view layouts/user/index/index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\dictionary\www\system\classes\Kohana\View.php:137
2014-06-08 22:26:20 --- DEBUG: #0 Z:\home\dictionary\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('layouts/user/in...')
#1 Z:\home\dictionary\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('layouts/user/in...', Array)
#2 Z:\home\dictionary\www\system\classes\Controller\Default.php(78): Kohana_View::factory('layouts/user/in...', Array)
#3 Z:\home\dictionary\www\application\classes\Controller\User\Index.php(8): Controller_Default->render()
#4 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_User_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Index))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\dictionary\www\system\classes\Kohana\View.php:137
2014-06-08 23:17:03 --- CRITICAL: View_Exception [ 0 ]: The requested view layouts/user/index/index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\dictionary\www\system\classes\Kohana\View.php:137
2014-06-08 23:17:03 --- DEBUG: #0 Z:\home\dictionary\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('layouts/user/in...')
#1 Z:\home\dictionary\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('layouts/user/in...', Array)
#2 Z:\home\dictionary\www\system\classes\Controller\Default.php(78): Kohana_View::factory('layouts/user/in...', Array)
#3 Z:\home\dictionary\www\application\classes\Controller\Index.php(12): Controller_Default->render()
#4 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\dictionary\www\system\classes\Kohana\View.php:137
2014-06-08 23:19:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: persons ~ APPPATH\views\layouts\user\default.php [ 9 ] in Z:\home\dictionary\www\application\views\layouts\user\default.php:9
2014-06-08 23:19:12 --- DEBUG: #0 Z:\home\dictionary\www\application\views\layouts\user\default.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\diction...', 9, Array)
#1 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#2 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#3 Z:\home\dictionary\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\dictionary\www\application\views\layouts\user\default.php:9
2014-06-08 23:22:25 --- CRITICAL: View_Exception [ 0 ]: The requested view layouts/user/index/index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\dictionary\www\system\classes\Kohana\View.php:137
2014-06-08 23:22:25 --- DEBUG: #0 Z:\home\dictionary\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('layouts/user/in...')
#1 Z:\home\dictionary\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('layouts/user/in...', Array)
#2 Z:\home\dictionary\www\system\classes\Controller\Default.php(78): Kohana_View::factory('layouts/user/in...', Array)
#3 Z:\home\dictionary\www\application\classes\Controller\Index.php(12): Controller_Default->render()
#4 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\dictionary\www\system\classes\Kohana\View.php:137
2014-06-08 23:23:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: persons ~ APPPATH\views\layouts\user\default.php [ 9 ] in Z:\home\dictionary\www\application\views\layouts\user\default.php:9
2014-06-08 23:23:31 --- DEBUG: #0 Z:\home\dictionary\www\application\views\layouts\user\default.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\diction...', 9, Array)
#1 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#2 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#3 Z:\home\dictionary\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\dictionary\www\application\views\layouts\user\default.php:9
2014-06-08 23:25:13 --- CRITICAL: View_Exception [ 0 ]: The requested view /user/index/index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\dictionary\www\system\classes\Kohana\View.php:137
2014-06-08 23:25:13 --- DEBUG: #0 Z:\home\dictionary\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/user/index/ind...')
#1 Z:\home\dictionary\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/user/index/ind...', Array)
#2 Z:\home\dictionary\www\application\classes\Controller\Index.php(11): Kohana_View::factory('/user/index/ind...', Array)
#3 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\dictionary\www\system\classes\Kohana\View.php:137
2014-06-08 23:26:59 --- CRITICAL: View_Exception [ 0 ]: The requested view /user/index/index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\dictionary\www\system\classes\Kohana\View.php:137
2014-06-08 23:26:59 --- DEBUG: #0 Z:\home\dictionary\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/user/index/ind...')
#1 Z:\home\dictionary\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/user/index/ind...', Array)
#2 Z:\home\dictionary\www\application\classes\Controller\Index.php(11): Kohana_View::factory('/user/index/ind...', Array)
#3 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\dictionary\www\system\classes\Kohana\View.php:137
2014-06-08 23:27:01 --- CRITICAL: View_Exception [ 0 ]: The requested view /user/index/index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\dictionary\www\system\classes\Kohana\View.php:137
2014-06-08 23:27:01 --- DEBUG: #0 Z:\home\dictionary\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/user/index/ind...')
#1 Z:\home\dictionary\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('/user/index/ind...', Array)
#2 Z:\home\dictionary\www\application\classes\Controller\Index.php(11): Kohana_View::factory('/user/index/ind...', Array)
#3 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\dictionary\www\system\classes\Kohana\View.php:137
2014-06-08 23:34:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: persons ~ APPPATH\views\layouts\user\default.php [ 9 ] in Z:\home\dictionary\www\application\views\layouts\user\default.php:9
2014-06-08 23:34:52 --- DEBUG: #0 Z:\home\dictionary\www\application\views\layouts\user\default.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\diction...', 9, Array)
#1 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#2 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#3 Z:\home\dictionary\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\dictionary\www\application\views\layouts\user\default.php:9
2014-06-08 23:34:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: persons ~ APPPATH\views\layouts\user\default.php [ 9 ] in Z:\home\dictionary\www\application\views\layouts\user\default.php:9
2014-06-08 23:34:55 --- DEBUG: #0 Z:\home\dictionary\www\application\views\layouts\user\default.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\diction...', 9, Array)
#1 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#2 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#3 Z:\home\dictionary\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\dictionary\www\application\views\layouts\user\default.php:9
2014-06-08 23:56:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting '{' ~ APPPATH\classes\Controller\Index.php [ 5 ] in file:line
2014-06-08 23:56:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line