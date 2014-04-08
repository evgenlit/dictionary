<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-21 23:40:00 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'dictionary'@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\dict\www\modules\database\classes\Kohana\Database\MySQL.php:171
2014-03-21 23:40:00 --- DEBUG: #0 Z:\home\dict\www\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\dict\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 Z:\home\dict\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 Z:\home\dict\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 Z:\home\dict\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 Z:\home\dict\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 Z:\home\dict\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 Z:\home\dict\www\modules\orm\classes\Kohana\Auth\ORM.php(79): Kohana_ORM::factory('User')
#8 Z:\home\dict\www\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('admin', 'alertiu11', 1)
#9 Z:\home\dict\www\application\classes\Controller\Admin\Auth.php(17): Kohana_Auth->login('admin', 'alertiu11', 1)
#10 Z:\home\dict\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Auth->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\dict\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#13 Z:\home\dict\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\dict\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\dict\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\dict\www\modules\database\classes\Kohana\Database\MySQL.php:171