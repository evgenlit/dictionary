<center>
	<h2><?= $person->getName() ?></h2>
</center>
<div class="menu1">
	<br id="tab2"/>
	<br id="tab3"/>
	<br id="tab4"/>
	<br id="tab5"/>
	<a href="#tab1">Главная</a>
	<a href="#tab2">Биографические данные</a>
	<a href="#tab3">Видео</a>
	<a href="#tab4">Фотогалерея</a>
	<a href="#tab5">Основные труды</a>
	<div>
		<table>
			<tbody>
				<tr>
					<td><?= HTML::image('/res/upload/photos/' . $person->getPhotoName($person->getId()), array('id' => 'mainPhoto')) ?></td>
					<td class="epigraph"><?= $person->getEpigraph() ?></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div>
		<center>
			<h3>Годы жизни: <?= $person->getYears() ?></h3>
		</center>
		<?= $person->getDescription() ?>
	</div>
	<div>
		<?php if (count($videos) > 0): ?>
			<table id="video_table">
			<?php foreach($videos as $video): ?>
				<tr>
					<td><?= $video->getYoutube() ?></td>
				</tr>
			<?php endforeach;?>
			</table>
		<?php else: ?>
			<center>
				<h4 id="noresults">Ничего не найдено</h4>
			</center>
		<?php endif; ?>
	</div>
	<div>
		<?php if (count($images) > 0): ?>
			<?php $i = 0; ?>
			<table id="photo_table">
				<tbody>
					<tr>
				<?php foreach($images as $img): ?>
					<?php $i++; ?>
						<td id="countPhotos">
							<a class="fancybox" rel="group" href="/res/upload/photos/<?= $img->getName() ?>"><?= HTML::image('/res/upload/photos/' . $img->getName(), array('id' => 'simpleImage')) ?></a>
						</td>
						<?php if($i == 4): ?>
					</tr>
					<tr>
							<?php $i = 0; ?>
						<?php endif; ?>
				<?php endforeach; ?>
					</tr>
				</tbody>
			</table>
		<?php else: ?>
			<center>
				<h4 id="noimages">Ничего не найдено</h4>
			</center>
		<?php endif; ?>
	</div>
	<div>
		<?= htmlspecialchars($person->getProceedings()) ?>
	</div>
</div>
