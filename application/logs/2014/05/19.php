<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-19 02:29:37 --- CRITICAL: View_Exception [ 0 ]: The requested view layouts/admin/photo/changeMainPhoto could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\dictionary\www\system\classes\Kohana\View.php:137
2014-05-19 02:29:37 --- DEBUG: #0 Z:\home\dictionary\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('layouts/admin/p...')
#1 Z:\home\dictionary\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('layouts/admin/p...', Array)
#2 Z:\home\dictionary\www\system\classes\Controller\Default.php(78): Kohana_View::factory('layouts/admin/p...', Array)
#3 Z:\home\dictionary\www\application\classes\Controller\Admin\Photo.php(63): Controller_Default->render()
#4 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Photo->action_changeMainPhoto()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Photo))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\dictionary\www\system\classes\Kohana\View.php:137
2014-05-19 02:31:57 --- CRITICAL: View_Exception [ 0 ]: The requested view layouts/admin/photo/changeMainPhoto could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\dictionary\www\system\classes\Kohana\View.php:137
2014-05-19 02:31:57 --- DEBUG: #0 Z:\home\dictionary\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('layouts/admin/p...')
#1 Z:\home\dictionary\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('layouts/admin/p...', Array)
#2 Z:\home\dictionary\www\system\classes\Controller\Default.php(78): Kohana_View::factory('layouts/admin/p...', Array)
#3 Z:\home\dictionary\www\application\classes\Controller\Admin\Photo.php(63): Controller_Default->render()
#4 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Photo->action_changeMainPhoto()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Photo))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\dictionary\www\system\classes\Kohana\View.php:137
2014-05-19 13:54:48 --- EMERGENCY: View_Exception [ 0 ]: The requested view layouts/admin/photo/changeMainPhoto could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/prophet/www/dict/system/classes/Kohana/View.php:137
2014-05-19 13:54:48 --- DEBUG: #0 /home/prophet/www/dict/system/classes/Kohana/View.php(137): Kohana_View->set_filename('layouts/admin/p...')
#1 /home/prophet/www/dict/system/classes/Kohana/View.php(30): Kohana_View->__construct('layouts/admin/p...', Array)
#2 /home/prophet/www/dict/system/classes/Controller/Default.php(78): Kohana_View::factory('layouts/admin/p...', Array)
#3 /home/prophet/www/dict/application/classes/Controller/Admin/Photo.php(63): Controller_Default->render()
#4 /home/prophet/www/dict/system/classes/Kohana/Controller.php(84): Controller_Admin_Photo->action_changeMainPhoto()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Photo))
#7 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#10 {main} in /home/prophet/www/dict/system/classes/Kohana/View.php:137
2014-05-19 13:55:28 --- EMERGENCY: View_Exception [ 0 ]: The requested view layouts/admin/photo/changeMainPhoto could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/prophet/www/dict/system/classes/Kohana/View.php:137
2014-05-19 13:55:28 --- DEBUG: #0 /home/prophet/www/dict/system/classes/Kohana/View.php(137): Kohana_View->set_filename('layouts/admin/p...')
#1 /home/prophet/www/dict/system/classes/Kohana/View.php(30): Kohana_View->__construct('layouts/admin/p...', Array)
#2 /home/prophet/www/dict/system/classes/Controller/Default.php(78): Kohana_View::factory('layouts/admin/p...', Array)
#3 /home/prophet/www/dict/application/classes/Controller/Admin/Photo.php(63): Controller_Default->render()
#4 /home/prophet/www/dict/system/classes/Kohana/Controller.php(84): Controller_Admin_Photo->action_changeMainPhoto()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Photo))
#7 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#10 {main} in /home/prophet/www/dict/system/classes/Kohana/View.php:137
2014-05-19 13:55:54 --- EMERGENCY: View_Exception [ 0 ]: The requested view layouts/admin/photo/changeMainPhoto could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/prophet/www/dict/system/classes/Kohana/View.php:137
2014-05-19 13:55:54 --- DEBUG: #0 /home/prophet/www/dict/system/classes/Kohana/View.php(137): Kohana_View->set_filename('layouts/admin/p...')
#1 /home/prophet/www/dict/system/classes/Kohana/View.php(30): Kohana_View->__construct('layouts/admin/p...', Array)
#2 /home/prophet/www/dict/system/classes/Controller/Default.php(78): Kohana_View::factory('layouts/admin/p...', Array)
#3 /home/prophet/www/dict/application/classes/Controller/Admin/Photo.php(63): Controller_Default->render()
#4 /home/prophet/www/dict/system/classes/Kohana/Controller.php(84): Controller_Admin_Photo->action_changeMainPhoto()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Photo))
#7 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#10 {main} in /home/prophet/www/dict/system/classes/Kohana/View.php:137
2014-05-19 13:58:50 --- EMERGENCY: View_Exception [ 0 ]: The requested view layouts/admin/photo/changeMainPhoto could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/prophet/www/dict/system/classes/Kohana/View.php:137
2014-05-19 13:58:50 --- DEBUG: #0 /home/prophet/www/dict/system/classes/Kohana/View.php(137): Kohana_View->set_filename('layouts/admin/p...')
#1 /home/prophet/www/dict/system/classes/Kohana/View.php(30): Kohana_View->__construct('layouts/admin/p...', Array)
#2 /home/prophet/www/dict/system/classes/Controller/Default.php(78): Kohana_View::factory('layouts/admin/p...', Array)
#3 /home/prophet/www/dict/application/classes/Controller/Admin/Photo.php(63): Controller_Default->render()
#4 /home/prophet/www/dict/system/classes/Kohana/Controller.php(84): Controller_Admin_Photo->action_changeMainPhoto()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Photo))
#7 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#10 {main} in /home/prophet/www/dict/system/classes/Kohana/View.php:137
2014-05-19 14:02:37 --- EMERGENCY: View_Exception [ 0 ]: The requested view layouts/admin/photo/changeMainPhoto could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/prophet/www/dict/system/classes/Kohana/View.php:137
2014-05-19 14:02:37 --- DEBUG: #0 /home/prophet/www/dict/system/classes/Kohana/View.php(137): Kohana_View->set_filename('layouts/admin/p...')
#1 /home/prophet/www/dict/system/classes/Kohana/View.php(30): Kohana_View->__construct('layouts/admin/p...', Array)
#2 /home/prophet/www/dict/system/classes/Controller/Default.php(78): Kohana_View::factory('layouts/admin/p...', Array)
#3 /home/prophet/www/dict/application/classes/Controller/Admin/Photo.php(64): Controller_Default->render()
#4 /home/prophet/www/dict/system/classes/Kohana/Controller.php(84): Controller_Admin_Photo->action_changeMainPhoto()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Photo))
#7 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#10 {main} in /home/prophet/www/dict/system/classes/Kohana/View.php:137
2014-05-19 15:47:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function json_encoode() ~ APPPATH/classes/Controller/Admin/Photo.php [ 56 ] in file:line
2014-05-19 15:47:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-19 17:16:38 --- EMERGENCY: ErrorException [ 2 ]: ob_start(): function 'ob_tidyhandler' not found or invalid function name ~ APPPATH/classes/Controller/Admin/Photo.php [ 55 ] in file:line
2014-05-19 17:16:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'ob_start(): fun...', '/home/prophet/w...', 55, Array)
#1 /home/prophet/www/dict/application/classes/Controller/Admin/Photo.php(55): ob_start('ob_tidyhandler')
#2 /home/prophet/www/dict/system/classes/Kohana/Controller.php(84): Controller_Admin_Photo->action_changeMainPhoto()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Photo))
#5 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-05-19 17:17:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Photo::ob_start() ~ APPPATH/classes/Controller/Admin/Photo.php [ 55 ] in file:line
2014-05-19 17:17:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line