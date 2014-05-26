<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-26 21:54:54 --- CRITICAL: Kohana_Exception [ 0 ]: The biography property does not exist in the Model_Person class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:702
2014-05-26 21:54:54 --- DEBUG: #0 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('biography', '<p><strong>????...')
#1 Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php(137): Kohana_ORM->__set('biography', '<p><strong>????...')
#2 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Person->action_jeditBiography()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#5 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:702
2014-05-26 21:55:32 --- CRITICAL: Kohana_Exception [ 0 ]: The biography property does not exist in the Model_Person class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:702
2014-05-26 21:55:32 --- DEBUG: #0 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('biography', '<p><strong>????...')
#1 Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php(137): Kohana_ORM->__set('biography', '<p><strong>????...')
#2 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Person->action_jeditBiography()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#5 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:702