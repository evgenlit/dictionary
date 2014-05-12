<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-13 00:27:10 --- CRITICAL: Exception [ 0 ]: Не указан идентификатор персоналии. ~ APPPATH\classes\Controller\Admin\Photo.php [ 105 ] in Z:\home\dictionary\www\system\classes\Kohana\Controller.php:84
2014-05-13 00:27:10 --- DEBUG: #0 Z:\home\dictionary\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Photo->action_changeMainPhoto()
#1 [internal function]: Kohana_Controller->execute()
#2 Z:\home\dictionary\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Photo))
#3 Z:\home\dictionary\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 Z:\home\dictionary\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\dictionary\www\index.php(118): Kohana_Request->execute()
#6 {main} in Z:\home\dictionary\www\system\classes\Kohana\Controller.php:84