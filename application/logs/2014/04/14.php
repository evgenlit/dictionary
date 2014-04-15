<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-14 22:46:02 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'main' in 'where clause' [ SELECT `photo`.`id` AS `id`, `photo`.`title` AS `title`, `photo`.`description` AS `description`, `photo`.`path` AS `path`, `photo`.`date` AS `date`, `photo`.`person_id` AS `person_id` FROM `photos` AS `photo` WHERE `person_id` = '1' AND `main` = 1 LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\dictionary\www\modules\database\classes\Kohana\Database\Query.php:251
2014-04-14 22:46:02 --- DEBUG: #0 Z:\home\dictionary\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `photo`....', false, Array)
#1 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(266): Kohana_ORM->find()
#4 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(Array)
#5 Z:\home\dictionary\www\application\classes\Model\Person.php(42): Kohana_ORM::factory('Photo', Array)
#6 Z:\home\dictionary\www\application\views\layouts\admin\person\index.php(29): Model_Person->getPhotoName('1')
#7 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#8 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#9 Z:\home\dictionary\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#10 Z:\home\dictionary\www\application\views\layouts\admin\default.php(101): Kohana_View->__toString()
#11 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#12 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#13 Z:\home\dictionary\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#14 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#15 [internal function]: Kohana_Controller->execute()
#16 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#17 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#20 {main} in Z:\home\dictionary\www\modules\database\classes\Kohana\Database\Query.php:251
2014-04-14 22:46:49 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:603
2014-04-14 22:46:49 --- DEBUG: #0 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 Z:\home\dictionary\www\application\classes\Model\Person.php(43): Kohana_ORM->__get('name')
#2 Z:\home\dictionary\www\application\views\layouts\admin\person\index.php(29): Model_Person->getPhotoName('1')
#3 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#4 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#5 Z:\home\dictionary\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 Z:\home\dictionary\www\application\views\layouts\admin\default.php(101): Kohana_View->__toString()
#7 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#8 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#9 Z:\home\dictionary\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#13 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:603
2014-04-14 23:06:33 --- CRITICAL: Kohana_Exception [ 0 ]: The find_all property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:603
2014-04-14 23:06:33 --- DEBUG: #0 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('find_all')
#1 Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php(71): Kohana_ORM->__get('find_all')
#2 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Person->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#5 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:603
2014-04-14 23:06:34 --- CRITICAL: Kohana_Exception [ 0 ]: The find_all property does not exist in the Model_Photo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:603
2014-04-14 23:06:34 --- DEBUG: #0 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('find_all')
#1 Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php(71): Kohana_ORM->__get('find_all')
#2 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Person->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#5 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:603
2014-04-14 23:09:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: photo ~ APPPATH\classes\Controller\Admin\Person.php [ 71 ] in Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php:71
2014-04-14 23:09:33 --- DEBUG: #0 Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\diction...', 71, Array)
#1 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Person->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#4 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php:71
2014-04-14 23:13:08 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Person::action_delete(), called in Z:\home\dictionary\www\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Admin\Person.php [ 64 ] in Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php:64
2014-04-14 23:13:08 --- DEBUG: #0 Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php(64): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\diction...', 64, Array)
#1 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Person->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#4 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php:64
2014-04-14 23:15:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Admin\Person.php [ 65 ] in Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php:65
2014-04-14 23:15:17 --- DEBUG: #0 Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\diction...', 65, Array)
#1 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Person->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#4 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php:65
2014-04-14 23:25:54 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\layouts\admin\person\index.php [ 42 ] in file:line
2014-04-14 23:25:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-14 23:27:22 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\layouts\admin\person\index.php [ 42 ] in file:line
2014-04-14 23:27:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-14 23:31:24 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\layouts\admin\person\index.php [ 42 ] in file:line
2014-04-14 23:31:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-14 23:31:28 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\layouts\admin\person\index.php [ 42 ] in file:line
2014-04-14 23:31:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-14 23:32:05 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\layouts\admin\person\index.php [ 42 ] in file:line
2014-04-14 23:32:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-14 23:39:25 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\layouts\admin\person\index.php [ 42 ] in file:line
2014-04-14 23:39:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line