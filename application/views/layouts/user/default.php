<?php if (isset($ajax) && true == $ajax): ?>
    <?= $content ?>
<?php else: ?>
    <!DOCTYPE html>
    <!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width" />
            <title>Создатели САР</title>

            <!--script src="/res/foundation/js/vendor/jquery.js"></script-->
			<script src="/res/foundation/js/vendor/jquery-1.9.1.min.js"></script>
			<script src="/res/foundation/js/vendor/jquery-1.11.0.js"></script>
            <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
            <script src="/res/foundation/js/vendor/custom.modernizr.js"></script>
            <script src="/res/foundation/js/foundation.min.js"></script>
            <script src="/res/foundation/js/vendor/jquery-ui/js/jquery-ui-1.10.2.custom.min.js"></script>
            <script src="/res/foundation/js/vendor/jquery-ui/js/jquery.ui.datepicker-ru.js"></script>
			
			
<!--			<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>-->
			<script type="text/javascript" src="/res/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
			<!-- Add fancyBox -->
			<link rel="stylesheet" href="/res/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
			<script type="text/javascript" src="/res/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
			<!-- Optionally add helpers - button, thumbnail and/or media -->
			<link rel="stylesheet" href="/res/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
			<script type="text/javascript" src="/res/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
			<script type="text/javascript" src="/res/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
			<link rel="stylesheet" href="/res/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
			<script type="text/javascript" src="/res/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
			

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
			<style type="text/css">
				.row {
					width: 810px;
				}
				#osnova {
					/*position:absolute;*/
					width: 810px;
				}
				#obertka {
					position:relative;
					width: 810px;
					text-align: center;
				}
				ul {
					list-style: none;
					padding-left: 0px;
				}
				li {
					display: inline-block;
				}
				li a {
					font-family: Tahoma, Geneva, sans-serif;
					text-decoration: none;
					background: #5C1C00;
					font-weight: bold;
					color: #ffaa00; 
					padding: 6px 10px 6px 10px;
				}
				li a:hover {
					padding: 6px 10px 6px 10px;
					font-weight: bold;
					background: #CE4B12;
					color: #ff9900;
				}
				body {
					margin-left:20%;
					margin-right:20%;
					background: #FFE4C4;
				}
				menu {
					text-align: center;
				}
			</style>
        </head>
		<body>
			<div class="header">
				<img id="picture" src="/res/main.jpg" width="810" height="200" />
			</div>
			<div id="osnova">
				<div id="obertka">
					<ul class="css-menu-1">
						<li><a href="/">Главная страница</a></li>
						<li><a href="/compilers">Составители САР</a></li>
						<li><a href="/persons">Персоналии</a></li>
						<li><a href="/info">САР 1789 - 1794 гг.</a></li>
						<li><a href="/about">О проекте</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
                <?php if (isset($content)): ?>
                    <?php echo $content; ?>
                <?php endif; ?>
            </div>
		</body>
    </html>
<?php endif; ?>