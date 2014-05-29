<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-29 16:52:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/classes/Controller/Admin/Video.php [ 56 ] in /home/prophet/www/dict/application/classes/Controller/Admin/Video.php:56
2014-05-29 16:52:03 --- DEBUG: #0 /home/prophet/www/dict/application/classes/Controller/Admin/Video.php(56): Kohana_Core::error_handler(8, 'Undefined index...', '/home/prophet/w...', 56, Array)
#1 /home/prophet/www/dict/system/classes/Kohana/Controller.php(84): Controller_Admin_Video->action_jvideoAdd()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Video))
#4 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#7 {main} in /home/prophet/www/dict/application/classes/Controller/Admin/Video.php:56
2014-05-29 16:54:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/classes/Controller/Admin/Video.php [ 56 ] in /home/prophet/www/dict/application/classes/Controller/Admin/Video.php:56
2014-05-29 16:54:40 --- DEBUG: #0 /home/prophet/www/dict/application/classes/Controller/Admin/Video.php(56): Kohana_Core::error_handler(8, 'Undefined index...', '/home/prophet/w...', 56, Array)
#1 /home/prophet/www/dict/system/classes/Kohana/Controller.php(84): Controller_Admin_Video->action_jvideoAdd()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Video))
#4 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#7 {main} in /home/prophet/www/dict/application/classes/Controller/Admin/Video.php:56
2014-05-29 16:55:08 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:1302
2014-05-29 16:55:08 --- DEBUG: #0 /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /home/prophet/www/dict/application/classes/Controller/Admin/Video.php(60): Kohana_ORM->save()
#3 /home/prophet/www/dict/system/classes/Kohana/Controller.php(84): Controller_Admin_Video->action_jvideoAdd()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Video))
#6 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#9 {main} in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:1302
2014-05-29 16:55:34 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:1302
2014-05-29 16:55:34 --- DEBUG: #0 /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /home/prophet/www/dict/application/classes/Controller/Admin/Video.php(60): Kohana_ORM->save()
#3 /home/prophet/www/dict/system/classes/Kohana/Controller.php(84): Controller_Admin_Video->action_jvideoAdd()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Video))
#6 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#9 {main} in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:1302
2014-05-29 16:58:02 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:1302
2014-05-29 16:58:02 --- DEBUG: #0 /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /home/prophet/www/dict/application/classes/Controller/Admin/Video.php(60): Kohana_ORM->save()
#3 /home/prophet/www/dict/system/classes/Kohana/Controller.php(84): Controller_Admin_Video->action_jvideoAdd()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Video))
#6 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#9 {main} in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:1302
2014-05-29 17:03:03 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:1302
2014-05-29 17:03:03 --- DEBUG: #0 /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /home/prophet/www/dict/application/classes/Controller/Admin/Video.php(61): Kohana_ORM->save()
#3 /home/prophet/www/dict/system/classes/Kohana/Controller.php(84): Controller_Admin_Video->action_jvideoAdd()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Video))
#6 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#9 {main} in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:1302
2014-05-29 17:04:17 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:1302
2014-05-29 17:04:17 --- DEBUG: #0 /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /home/prophet/www/dict/application/classes/Controller/Admin/Video.php(61): Kohana_ORM->save()
#3 /home/prophet/www/dict/system/classes/Kohana/Controller.php(84): Controller_Admin_Video->action_jvideoAdd()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Video))
#6 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#9 {main} in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:1302
2014-05-29 17:10:48 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:1302
2014-05-29 17:10:48 --- DEBUG: #0 /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /home/prophet/www/dict/application/classes/Controller/Admin/Video.php(61): Kohana_ORM->save()
#3 /home/prophet/www/dict/system/classes/Kohana/Controller.php(84): Controller_Admin_Video->action_jvideoAdd()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Video))
#6 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#9 {main} in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:1302
2014-05-29 17:27:57 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:1302
2014-05-29 17:27:57 --- DEBUG: #0 /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /home/prophet/www/dict/application/classes/Controller/Admin/Video.php(61): Kohana_ORM->save()
#3 /home/prophet/www/dict/system/classes/Kohana/Controller.php(84): Controller_Admin_Video->action_jvideoAdd()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Video))
#6 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#9 {main} in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:1302
2014-05-29 17:30:26 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:1302
2014-05-29 17:30:26 --- DEBUG: #0 /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /home/prophet/www/dict/application/classes/Controller/Admin/Video.php(61): Kohana_ORM->save()
#3 /home/prophet/www/dict/system/classes/Kohana/Controller.php(84): Controller_Admin_Video->action_jvideoAdd()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Video))
#6 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#9 {main} in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:1302