<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<?php if (isset($styles)): ?>
			<?php foreach ($styles as $style): ?>
				<?php echo HTML::style($style); ?>
			<?php endforeach; ?>
		<?php endif; ?>
    </head>
    <body>
		<div class="header">
			<img id="picture" src="/res/main.jpg" width="810" height="200" />
		</div>
		<div id="osnova">
			<div id="obertka">
				<ul class="css-menu-1">
					<li><a href="#">Главная</a></li>
					<li><a href="#">HTML уроки</a></li>
					<li><a href="#">CSS уроки</a></li>
					<li><a href="#" class="selected">CSS меню</a></li>
					<li><a href="#">Справочник</a></li>
				</ul>
			</div>
		</div>
        <div id="container">
            <div class="content">
				<h1>Название страницы</h1>
				<p>Бла-бла.</p>
			</div>
        </div>
    </body>
</html>