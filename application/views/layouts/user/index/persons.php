<?php if(count($persons) > 0): ?>
	<center><h3>Список персоналий</h3></center>
	<table>
<!--		<thead>
			<tr>
				<th></th>
				<th></th>
			</tr>
		</thead>-->
		<tbody>
	<?php foreach ($persons as $person): ?>
		<?php
			$descr = preg_replace('/\s[^\s]+$/', '', substr($person->getDescription(), 0, 940));
		?>
			<tr>
				<td rowspan="2"><?= HTML::image('/res/upload/photos/' . $person->getPhotoName($person->getId()), array('id' => 'mainPic')) ?></td>
				<td><h3 id="name"><?= $person->getName() ?>&nbsp;&nbsp;&nbsp;(<?= $person->getYears() ?>)</h3></td>
			</tr>
			<tr>
				<td><b><?= $descr ?>&nbsp;<a href="/user/person/view/<?= $person->getId() ?>">подробнее...</a></b></td>
			</tr>
	<?php endforeach; ?>
		</tbody>
	</table>
<?php else: ?>
	<center><h3>Ни одной персоналии не найдено</h3></center>
<?php endif; ?>
