<h3>Список видео</h3>
<?php if (count($videos) > 0): ?>
	<div class='small-8 large-8 columns'>
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Название</th>
					<th>Что-то еще</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($videos as $video): ?>
					<tr>
						<td>
							<?= $video->getId() ?>
						</td>
						<td>
							<?= $video->getTitle() ?>
						</td>
						<td>
							<?= $video->getDate() ?>
						</td>
						<td>
							<?= $video->getPath() ?>
						</td>
						<td>
							<?= HTML::anchor('/admin/video/edit/' . $video->getId(), 'Редактировать'); ?>
						</td>
					</tr>
				<?php endforeach;  ?>
			</tbody>
		</table>
	</div>
<?php else: ?>
	<div><center><h3>Пока еще ничего нет</h3></center></div>
<?php endif; ?>