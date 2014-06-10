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
		<div class="sidebar">
			<h2>Меню</h2>
			<ul>
				<li><a href="link1.html">Ссылка 1</a></li>
				<li><a href="link2.html">Ссылка 2</a></li>
				<li><a href="link3.html">Ссылка 3</a></li>
				<li><a href="link4.html">Ссылка 4</a></li>
			</ul>
		</div>
        <div id="container">
            <div class="content">
				<h1>Название страницы</h1>
				<p>Бла-бла.</p>
			</div>
        </div>
    </body>
</html>