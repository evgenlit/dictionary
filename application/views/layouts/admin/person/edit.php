<div class="row">
    <div class='small-4 large-4 columns'>
        <?php if (isset($errors)): ?>
            <div data-alert class="alert-box alert" style="font-size:10px;">
                <ul class="errors">
                    <?php foreach ($errors as $message): ?>
                        <li><?php echo $message ?></li>
                    <?php endforeach ?>
                </ul>
                <a href="#" class="close">&times;</a>
            </div>
        <?php elseif (isset($success)): ?>
            <div data-alert class="alert-box success" style="font-size:10px;">
                <ul class="errors">
                    <li><?php echo $success ?></li>
                </ul>
                <a href="#" class="close">&times;</a>
            </div>    
        <?php endif; ?>
    </div>    
</div>
<h3><?= $person->getName() ?></h3>
<div class="section-container auto" data-section>
<section class="active">
	<p class="title" data-section-title>
		<a href="#personal">Биографические данные</a>
	</p>
	<div class="content" data-section-content>
		<form class='custom' method="POST" enctype="multipart/form-data" id="post_edit" name="post_edit" width="100px">
			<fieldset>
				<label for="name" id="formlabel">ФИО (полностью)</label>
				<input type='text' name='name' id='name' value="<?= $person->getName() ?>" data-edit="auto" data-save="" />
				
				<label for="years" id="formlabel">Годы жизни</label>
				<input type='text' name='years' id='years' value="<?= $person->getYears() ?>" data-edit="auto" data-save="" />
				
				<label for="epigraph" id="formlabel">Эпиграф</label>
				<textarea class="ckeditor" name="epigraph" id="epigraph"><?= $person->getEpigraph() ?></textarea>
			</fieldset>
		</form>
	</div>
</section>
<section>
	<p class="title" data-section-title>
		<a href="#photo">Главное фото</a>
	</p>
	<div class="content" data-section-content>
		<?php if (isset($mainPhoto)): ?>
			<div id="mainPhoto">
				<p>
					<?= HTML::image('/res/upload/photos/' . $mainPhoto, array('id' => 'mainPic')) ?>
				</p>
			</div>
			<label for="mainfile" id="formlabel">Выбрать другое фото</label>
			<form id="addPhotoMain" name="addphotoMain" enctype="multipart/form-data">
				<input type="file" name="file" id="mainfile" accept="image/*"/>
				<input type="hidden" name="personId" id="personId" value="<?= $person->getId() ?>"/>
				<input type="submit" name="uploadmain" value="Сменить" />
			</form> 
		<?php endif; ?>
	</div>
</section>
<section>
	<p class="title" data-section-title>
		<a href="#life">Очерк жизни</a>
	</p>
	<div class="content" data-section-content>
		<textarea class="ckeditor" name="description" id="description"><?= htmlspecialchars_decode($person->getDescription(), ENT_QUOTES) ?></textarea>
	</div>
</section>
<section>
	<p class="title" data-section-title>
		<a href="#video">Видео</a>
	</p>
	<div class="content" data-section-content>
		<?//php var_dump($videos); die; ?>
		<?php if (count($videos) > 0): ?>
			<table id="add_video_table">
			<?php foreach($videos as $video): ?>
				<tr>
					<td rowspan="4"><?= $video->getYoutube() ?></td>
					<td><b>ID:</b> <?= $video->getId() ?></td>
				</tr>
				<tr>
					<td class="youtube"><b>Название:</b> <?= $video->getTitle() ?></td>
				</tr>
				<tr>
					<td class="youtube"><b>Описание:</b> <?= $video->getDescription() ?></td>
				</tr>
				<tr>
					<td class="youtube"><b>Дата добавления:</b> <?= Date::formatted_time($video->getDate(), 'd.m.Y') ?></td>
				</tr>
			<?php endforeach;?>
			</table>
		<?php else: ?>
			<center>
				<h4 id="noresults">Ничего не найдено</h4>
			</center>
		<?php endif; ?>
		<div id="videoMain">
			<a href="#" data-reveal-id="addvideomodal" class="round small button videoadd">Добавить</a>
		</div>
		<div id="addvideomodal" class="reveal-modal medium" data-reveal>
			<h3>Добавляем видео</h3>
			<div class="row">
				<form method="POST" id="videoaddform" name="videoaddform">
					<fieldset>
						<input type="hidden" name="person_id" id="person_id" value="<?= $person->getId()?>"/>
						<label for="title">Название</label>
						<input type='text' name='title' id='title'/>

						<label for="description">Описание</label>
						<textarea class="description" name="description" id="description"></textarea>

						<label for="youtube">Код с youtube</label>
						<textarea class="youtube" name="youtube" id="youtube"></textarea>

						<input 
							type='submit' 
							style="margin-top: 20px" 
							class='success radius medium button' 
							id="submitVideo"
							value='Добавить'
						/>
					</fieldset>
				</form>
			</div>
			<a class="close-reveal-modal">&#215;</a>
		</div>
	</div>
</section>
<section>
	<p class="title" data-section-title>
		<a href="#images">Фотогалерея</a>
	</p>
	<div class="content" data-section-content>
		Фотогалерея
	</div>
</section>
</div>