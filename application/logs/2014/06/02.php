<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-02 22:39:44 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2014-06-02 22:39:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'Z:\home\diction...', 33, Array)
#1 Z:\home\dictionary\www\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #122, 'name')
#2 Z:\home\dictionary\www\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('name')
#3 Z:\home\dictionary\www\application\views\layouts\admin\person\edit.php(145): Kohana_Database_Result->offsetGet('name')
#4 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#5 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#6 Z:\home\dictionary\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 Z:\home\dictionary\www\application\views\layouts\admin\default.php(102): Kohana_View->__toString()
#8 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#9 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#10 Z:\home\dictionary\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#14 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2014-06-02 22:40:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::getName() ~ APPPATH\views\layouts\admin\person\edit.php [ 145 ] in file:line
2014-06-02 22:40:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-06-02 23:08:12 --- CRITICAL: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::and_where(), called in Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php on line 77 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 1868 ] in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:1868
2014-06-02 23:08:12 --- DEBUG: #0 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(1868): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\diction...', 1868, Array)
#1 Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php(77): Kohana_ORM->and_where('main', 'IS NULL')
#2 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Person->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#5 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:1868
2014-06-02 23:08:48 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''NULL'' at line 1 [ SELECT `photo`.`id` AS `id`, `photo`.`title` AS `title`, `photo`.`description` AS `description`, `photo`.`path` AS `path`, `photo`.`name` AS `name`, `photo`.`date` AS `date`, `photo`.`person_id` AS `person_id`, `photo`.`main` AS `main` FROM `photos` AS `photo` WHERE `person_id` = '10' AND `main` IS 'NULL' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\dictionary\www\modules\database\classes\Kohana\Database\Query.php:251
2014-06-02 23:08:48 --- DEBUG: #0 Z:\home\dictionary\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `photo`....', 'Model_Photo', Array)
#1 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php(78): Kohana_ORM->find_all()
#4 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Person->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\dictionary\www\modules\database\classes\Kohana\Database\Query.php:251