<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-25 21:59:39 --- CRITICAL: View_Exception [ 0 ]: The requested view layouts/admin/person/editEpigraph could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\dictionary\www\system\classes\Kohana\View.php:137
2014-05-25 21:59:39 --- DEBUG: #0 Z:\home\dictionary\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('layouts/admin/p...')
#1 Z:\home\dictionary\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('layouts/admin/p...', Array)
#2 Z:\home\dictionary\www\system\classes\Controller\Default.php(78): Kohana_View::factory('layouts/admin/p...', Array)
#3 Z:\home\dictionary\www\application\classes\Controller\Admin\Person.php(131): Controller_Default->render()
#4 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Person->action_editEpigraph()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#7 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\dictionary\www\system\classes\Kohana\View.php:137