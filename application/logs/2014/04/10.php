<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-10 15:30:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Photos' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-04-10 15:30:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-10 15:31:31 --- EMERGENCY: ErrorException [ 2 ]: move_uploaded_file(/home/prophet/www/dict/res/upload/photos/d82c8d1619ad8176d665453cfb2e55f0.jpg): failed to open stream: No such file or directory ~ APPPATH/classes/Model/Photo.php [ 46 ] in file:line
2014-04-10 15:31:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', '/home/prophet/w...', 46, Array)
#1 /home/prophet/www/dict/application/classes/Model/Photo.php(46): move_uploaded_file('/tmp/phpPMbaeY', '/home/prophet/w...')
#2 /home/prophet/www/dict/application/classes/Controller/Admin/Person.php(37): Model_Photo->upload()
#3 /home/prophet/www/dict/system/classes/Kohana/Controller.php(84): Controller_Admin_Person->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#6 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-04-10 15:33:20 --- EMERGENCY: Kohana_Exception [ 0 ]: The pk property does not exist in the Model_Photo class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:603
2014-04-10 15:33:20 --- DEBUG: #0 /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('pk')
#1 /home/prophet/www/dict/application/classes/Controller/Admin/Person.php(43): Kohana_ORM->__get('pk')
#2 /home/prophet/www/dict/system/classes/Kohana/Controller.php(84): Controller_Admin_Person->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#5 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#8 {main} in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:603
2014-04-10 17:24:38 --- EMERGENCY: Kohana_Exception [ 0 ]: The personid property does not exist in the Model_Photo class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:702
2014-04-10 17:24:38 --- DEBUG: #0 /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('personid', 3)
#1 /home/prophet/www/dict/modules/orm/classes/ORM.php(23): Kohana_ORM->__set('personid', 3)
#2 /home/prophet/www/dict/application/classes/Controller/Admin/Person.php(47): ORM->__call('setPersonId', Array)
#3 /home/prophet/www/dict/application/classes/Controller/Admin/Person.php(47): Model_Photo->setPersonId(3)
#4 /home/prophet/www/dict/system/classes/Kohana/Controller.php(84): Controller_Admin_Person->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#7 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#10 {main} in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:702