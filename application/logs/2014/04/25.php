<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-25 00:16:06 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2014-04-25 00:16:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\diction...', 33, Array)
#1 Z:\home\dictionary\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #115, 'id')
#2 Z:\home\dictionary\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('id')
#3 Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php(12): Kohana_Database_Result->offsetGet('id')
#4 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Person->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-04-25 00:16:22 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Person as array ~ APPPATH\classes\Controller\Admin\Person.php [ 12 ] in file:line
2014-04-25 00:16:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-25 00:24:42 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type SplFileInfo as array ~ APPPATH\classes\Controller\Admin\Photo.php [ 27 ] in file:line
2014-04-25 00:24:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-25 00:29:51 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\layouts\admin\photo\add.php [ 7 ] in Z:\home\dictionary\www\application\views\layouts\admin\photo\add.php:7
2014-04-25 00:29:51 --- DEBUG: #0 Z:\home\dictionary\www\application\views\layouts\admin\photo\add.php(7): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\diction...', 7, Array)
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