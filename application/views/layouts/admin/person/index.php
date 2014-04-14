<h3>Список персоналий</h3>
<?php if (count($persons) > 0): ?>
	<div class='small-8 large-8 columns'>
	    <table width="700">
	        <thead>
	            <tr>
	                <th>#</th>
	                <th>ФИО</th>
	                <th>Годы жизни</th>
	                <th>Изображение</th>
	                <th></th>
	                <th></th>
	            </tr>
	        </thead>
	        <tbody>
	            <?php foreach ($persons as $person): ?>
	                <tr>
						<td>
							<?= $person->getId() ?>
						</td>
	                    <td>
	                        <?= $person->getName() ?>
	                    </td>
	                    <td>
	                        <?= $person->getYears() ?>
	                    </td>
	                    <td>
	                    	<img 
	                    		src="/res/upload/photos/<?= $person->getPhotoName($person->getId()) ?>"
	                    	/>
	                    </td>
	                    <td>
	                        <a 
	                            href="/admin/person/edit/<?=$person->getId()?>"
	                            class="small button"
	                            style="margin-bottom:-3px;"
	                        >
	                            Редактировать 
	                        </a>
	                    </td>
	                    <td>
	                        <a 
	                            href="/admin/person/delete/<?=$person->getId()?>"
	                            class="small button"
	                            style="margin-bottom:-3px;"
	                        >
	                            Удалить
	                        </a>
	                    </td>
	                </tr>
	            <?php endforeach; ?>
	        </tbody>
	    </table>
	</div>
<?php else: ?>
	<div><center><h3>Пока еще ничего нет</h3></center></div>
<?php endif; ?>