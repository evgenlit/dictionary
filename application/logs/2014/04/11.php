<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-11 11:18:42 --- EMERGENCY: Kohana_Exception [ 0 ]: The path property does not exist in the Model_Person class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:603
2014-04-11 11:18:42 --- DEBUG: #0 /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('path')
#1 /home/prophet/www/dict/modules/orm/classes/ORM.php(21): Kohana_ORM->__get('path')
#2 /home/prophet/www/dict/application/views/layouts/admin/person/index.php(27): ORM->__call('getPath', Array)
#3 /home/prophet/www/dict/application/views/layouts/admin/person/index.php(27): Model_Person->getPath()
#4 /home/prophet/www/dict/system/classes/Kohana/View.php(61): include('/home/prophet/w...')
#5 /home/prophet/www/dict/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/prophet/w...', Array)
#6 /home/prophet/www/dict/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /home/prophet/www/dict/application/views/layouts/admin/default.php(101): Kohana_View->__toString()
#8 /home/prophet/www/dict/system/classes/Kohana/View.php(61): include('/home/prophet/w...')
#9 /home/prophet/www/dict/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/prophet/w...', Array)
#10 /home/prophet/www/dict/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /home/prophet/www/dict/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#14 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#17 {main} in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:603
2014-04-11 11:27:28 --- EMERGENCY: Kohana_Exception [ 0 ]: The path property does not exist in the Model_Person class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:603
2014-04-11 11:27:28 --- DEBUG: #0 /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('path')
#1 /home/prophet/www/dict/modules/orm/classes/ORM.php(21): Kohana_ORM->__get('path')
#2 /home/prophet/www/dict/application/views/layouts/admin/person/index.php(27): ORM->__call('getPath', Array)
#3 /home/prophet/www/dict/application/views/layouts/admin/person/index.php(27): Model_Person->getPath()
#4 /home/prophet/www/dict/system/classes/Kohana/View.php(61): include('/home/prophet/w...')
#5 /home/prophet/www/dict/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/prophet/w...', Array)
#6 /home/prophet/www/dict/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /home/prophet/www/dict/application/views/layouts/admin/default.php(101): Kohana_View->__toString()
#8 /home/prophet/www/dict/system/classes/Kohana/View.php(61): include('/home/prophet/w...')
#9 /home/prophet/www/dict/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/prophet/w...', Array)
#10 /home/prophet/www/dict/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /home/prophet/www/dict/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#14 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#17 {main} in /home/prophet/www/dict/modules/orm/classes/Kohana/ORM.php:603
2014-04-11 14:13:09 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /home/prophet/www/dict/application/classes/Model/Person.php:42
2014-04-11 14:13:09 --- DEBUG: #0 /home/prophet/www/dict/application/classes/Model/Person.php(42): Kohana_ORM->find()
#1 /home/prophet/www/dict/application/views/layouts/admin/person/index.php(27): Model_Person->getPhotoName('1')
#2 /home/prophet/www/dict/system/classes/Kohana/View.php(61): include('/home/prophet/w...')
#3 /home/prophet/www/dict/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/prophet/w...', Array)
#4 /home/prophet/www/dict/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/prophet/www/dict/application/views/layouts/admin/default.php(101): Kohana_View->__toString()
#6 /home/prophet/www/dict/system/classes/Kohana/View.php(61): include('/home/prophet/w...')
#7 /home/prophet/www/dict/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/prophet/w...', Array)
#8 /home/prophet/www/dict/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/prophet/www/dict/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/prophet/www/dict/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Person))
#12 /home/prophet/www/dict/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/prophet/www/dict/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home/prophet/www/dict/index.php(118): Kohana_Request->execute()
#15 {main} in /home/prophet/www/dict/application/classes/Model/Person.php:42