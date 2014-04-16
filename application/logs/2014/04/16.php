<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-16 13:54:15 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Kohana_ORM::factory(), called in /home/prophet/www/dict/application/classes/Controller/Admin/Person.php on line 81 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 41 ] in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:41
2014-04-16 13:54:15 --- DEBUG: #0 /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php(41): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/prophet/w...', 41, Array)
#1 /home/prophet/www/dict/application/classes/Controller/Admin/Person.php(81): Kohana_ORM::factory()
#2 /home/prophet/www/dict/system/classes/Kohana/Controller.php(84): Controller_Admin_Person->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#5 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#8 {main} in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:41