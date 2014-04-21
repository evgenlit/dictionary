<h3>Редактирование видео</h3>
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
        </tbody>

    </table>
</div>