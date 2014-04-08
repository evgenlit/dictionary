<h3>Редактирование видео</h3>
<div class='small-8 large-8 columns'>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th>Что-то еще</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
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
                    <a 
                        href="/admin/person/edit/<?=$person->getId()?>"
                        class="small button"
                        style="margin-bottom:-3px;"
                    >
                        Редактировать 
                    </a>
                </td>
            </tr>
        </tbody>

    </table>
</div>