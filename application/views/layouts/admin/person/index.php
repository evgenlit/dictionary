<h3>Список персоналий</h3>
<div class='small-8 large-8 columns'>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>ФИО</th>
                <th>Годы жизни</th>
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
                        <a 
                            href="/admin/person/edit/<?=$person->getId()?>"
                            class="small button"
                            style="margin-bottom:-3px;"
                        >
                            Редактировать 
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>