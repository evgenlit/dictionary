<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-13 09:26:23 --- CRITICAL: Kohana_Exception [ 0 ]: The biography property does not exist in the Model_Person class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:603
2014-06-13 09:26:23 --- DEBUG: #0 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('biography')
#1 Z:\home\dictionary\www\modules\orm\classes\ORM.php(21): Kohana_ORM->__get('biography')
#2 Z:\home\dictionary\www\application\views\layouts\user\person\view.php(9): ORM->__call('getBiography', Array)
#3 Z:\home\dictionary\www\application\views\layouts\user\person\view.php(9): Model_Person->getBiography()
#4 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#5 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#6 Z:\home\dictionary\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 Z:\home\dictionary\www\application\views\layouts\user\default.php(96): Kohana_View->__toString()
#8 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#9 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#10 Z:\home\dictionary\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Person))
#14 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:603
2014-06-13 09:33:28 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:1362
2014-06-13 09:33:28 --- DEBUG: #0 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#2 Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php(141): Kohana_ORM->save()
#3 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Person->action_jeditDescription()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:1362
2014-06-13 09:34:23 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:1362
2014-06-13 09:34:23 --- DEBUG: #0 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#2 Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php(141): Kohana_ORM->save()
#3 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Person->action_jeditDescription()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:1362
2014-06-13 09:35:16 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:1362
2014-06-13 09:35:16 --- DEBUG: #0 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#2 Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php(141): Kohana_ORM->save()
#3 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Person->action_jeditDescription()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:1362
2014-06-13 09:35:22 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:1362
2014-06-13 09:35:22 --- DEBUG: #0 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#2 Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php(141): Kohana_ORM->save()
#3 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Person->action_jeditDescription()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:1362
2014-06-13 09:35:33 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:1362
2014-06-13 09:35:33 --- DEBUG: #0 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#2 Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php(141): Kohana_ORM->save()
#3 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Person->action_jeditDescription()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:1362
2014-06-13 09:35:38 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:1362
2014-06-13 09:35:38 --- DEBUG: #0 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#2 Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php(141): Kohana_ORM->save()
#3 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Person->action_jeditDescription()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:1362
2014-06-13 09:36:03 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:1362
2014-06-13 09:36:03 --- DEBUG: #0 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#2 Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php(141): Kohana_ORM->save()
#3 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Person->action_jeditDescription()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:1362
2014-06-13 14:41:42 --- CRITICAL: Kohana_Exception [ 0 ]: The get property does not exist in the Model_Person class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:603
2014-06-13 14:41:42 --- DEBUG: #0 Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('get')
#1 Z:\home\dictionary\www\application\views\layouts\user\person\view.php(27): Kohana_ORM->__get('get')
#2 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#3 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#4 Z:\home\dictionary\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\dictionary\www\application\views\layouts\user\default.php(96): Kohana_View->__toString()
#6 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#7 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#8 Z:\home\dictionary\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Person))
#12 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\dictionary\www\modules\orm\classes\Kohana\ORM.php:603
2014-06-13 14:55:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH\views\layouts\user\person\view.php [ 32 ] in Z:\home\dictionary\www\application\views\layouts\user\person\view.php:32
2014-06-13 14:55:06 --- DEBUG: #0 Z:\home\dictionary\www\application\views\layouts\user\person\view.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\diction...', 32, Array)
#1 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#2 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#3 Z:\home\dictionary\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\dictionary\www\application\views\layouts\user\default.php(96): Kohana_View->__toString()
#5 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#6 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#7 Z:\home\dictionary\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Person))
#11 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\dictionary\www\application\views\layouts\user\person\view.php:32
2014-06-13 14:55:32 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\layouts\user\person\view.php [ 37 ] in Z:\home\dictionary\www\application\views\layouts\user\person\view.php:37
2014-06-13 14:55:32 --- DEBUG: #0 Z:\home\dictionary\www\application\views\layouts\user\person\view.php(37): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\diction...', 37, Array)
#1 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#2 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#3 Z:\home\dictionary\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\dictionary\www\application\views\layouts\user\default.php(96): Kohana_View->__toString()
#5 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#6 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#7 Z:\home\dictionary\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Person))
#11 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\dictionary\www\application\views\layouts\user\person\view.php:37
2014-06-13 15:01:36 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\layouts\user\person\view.php [ 31 ] in Z:\home\dictionary\www\application\views\layouts\user\person\view.php:31
2014-06-13 15:01:36 --- DEBUG: #0 Z:\home\dictionary\www\application\views\layouts\user\person\view.php(31): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\diction...', 31, Array)
#1 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#2 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#3 Z:\home\dictionary\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\dictionary\www\application\views\layouts\user\default.php(96): Kohana_View->__toString()
#5 Z:\home\dictionary\www\system\classes\Kohana\View.php(61): include('Z:\home\diction...')
#6 Z:\home\dictionary\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\diction...', Array)
#7 Z:\home\dictionary\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Person))
#11 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\dictionary\www\application\views\layouts\user\person\view.php:31