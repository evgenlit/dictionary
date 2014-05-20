<?php if (isset($ajax) && true == $ajax): ?>
    <?= $content ?>
<?php else: ?>
    <!DOCTYPE html>
    <!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width" />
            <title>Панель администратора</title>
            <link rel="stylesheet" href="/res/foundation/css/normalize.css" />
            <link rel="stylesheet" href="/res/foundation/css/foundation.css" />
            <link rel="stylesheet" href="/res/foundation/js/vendor/jquery-ui/css/redmond/jquery-ui-1.10.2.custom.min.css" />

            <!--script src="/res/foundation/js/vendor/jquery.js"></script-->
			<script src="/res/foundation/js/vendor/jquery-1.9.1.min.js"></script>
			<script src="/res/foundation/js/vendor/jquery-1.11.0.js"></script>
            <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
            <script src="/res/foundation/js/vendor/custom.modernizr.js"></script>
            <script src="/res/foundation/js/foundation.min.js"></script>
            <script src="/res/foundation/js/vendor/jquery-ui/js/jquery-ui-1.10.2.custom.min.js"></script>
            <script src="/res/foundation/js/vendor/jquery-ui/js/jquery.ui.datepicker-ru.js"></script>
			<script type="text/javascript" src="/res/etc/ckeditor/ckeditor.js"></script>
			

            <!-- Дополнительные стили и скрипты, которые грузятся исходя из страницы -->
            <?php if (isset($styles)): ?>
                <?php foreach ($styles as $style): ?>
                    <?php echo HTML::style($style); ?>
                <?php endforeach; ?>
            <?php endif; ?>

            <?php if (isset($scripts)): ?>
                <?php foreach ($scripts as $script): ?>
                    <?php echo HTML::script($script); ?>
                <?php endforeach; ?>
            <?php endif; ?>

            <script>
                $(function() {
                    $(document).foundation();
                });
            </script>

        </head>
        <body>
            <?php if (isset($user) && null != $user): ?>
                <nav class="top-bar">
                    <ul class="title-area">
                        <li class="name">
                            <h1><a href="#">Панель администратора</a></h1>
                        </li>
                        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                    </ul>

                    <section class="top-bar-section">
                        <ul class="left">
                            <li class="divider"></li>
                            <li class='has-dropdown'><a href="#">Персоналии</a>
                                <ul class="dropdown">
                                    <li><a href="/admin/person/">Список персон</a></li>
                                    <li><a href="/admin/person/add/">Добавить персону</a></li>
                                </ul>
                            </li>
                        </ul>
                        
                        
                        <ul class="left">
                            <li class="divider"></li>
                            <li class='has-dropdown'><a href="#">Фото</a>
                                <ul class="dropdown">
                                    <li><a href="/admin/photo/">Список</a></li>
                                    <li><a href="/admin/photo/add/">Загрузка фото</a></li>
                                </ul>
                            </li>
                        </ul>
						
						
						<ul class="left">
							<li class="divider"></li>
							<li class='has-dropdown'><a href="#">Видео</a>
								<ul class="dropdown">
									<li><a href="/admin/video/">Список</a>
									<li><a href="/admin/video/add/">Загрузка видео</a></li>
								</ul>
						</ul>


                        <ul class="right">
                            <li class="divider"></li>
                            <li><a href="/">На сайт</a>
                            <li class="divider"></li>
                            <li><a href="/admin/auth/logout/">Выход</a>
                            <li class="divider"></li>
                        </ul>     
                    </section>
                </nav>
            <?php endif; ?>
            <div class="row">
                <?php if (isset($content)): ?>
                    <?php echo $content; ?>
                <?php endif; ?>
            </div>
        </body>
    </html>
<?php endif; ?>