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
		<form class='custom' method="POST" enctype="multipart/form-data" id="post_add" name="post_add" width="100px">
			<fieldset>
				<label for="name" id="formlabel">ФИО (полностью)</label>
				<input type='text' name='name' id='name' value="<?= $person->getName() ?>" data-edit="auto"/>
				
				<label for="years" id="formlabel">Годы жизни</label>
				<input type='text' name='years' id='years' value="<?= $person->getYears() ?>" data-edit="auto"/>
				
				<label for="epigraph" id="formlabel">Эпиграф</label>
				<textarea class="ckeditor" name="epigraph" id="epigraph" data-edit="auto"><?= $person->getEpigraph() ?></textarea>
				<!--input 
					type='submit' 
					style="margin-top: 20px" 
					class='small button' 
					value='Сохранить изменения'
				/-->
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
					<?= HTML::image('/res/upload/photos/' . $mainPhoto) ?>
				</p>
			</div>
			<label for="mainfile" id="formlabel">Выбрать другое фото</label>
			<form id="addPhotoMain" name="addphotoMain">
				<input type="file" name="file" id="mainfile" accept="image/*" /> <input type="submit" name="uploadmain" value="Отправить" />
			</form>
		<?php else: ?>
			<p>
				Фото не загружено
			</p>
			<input type="file" name="file" id="mainfile" accept="image/*"/>
		<?php endif; ?>
	</div>
</section>
<section>
	<p class="title" data-section-title>
		<a href="#life">Очерк жизни</a>
	</p>
	<div class="content" data-section-content>
		<textarea class="ckeditor" name="description" id="description"><?= $person->getDescription() ?></textarea>
	</div>
</section>
<section>
	<p class="title" data-section-title>
		<a href="#video">Видео</a>
	</p>
	<div class="content" data-section-content>
		<p>Content of section 2.</p>
	</div>
</section>
</div>
<!--div class="row">
    <div class='small-8 large-8 columns'>
        <form class='custom' method="POST" enctype="multipart/form-data" id="post_add" name="post_add">
            <fieldset>
                <label for="name">ФИО (полностью)</label>
                <input type='text' name='name' id='name' value="<?//= $person->getName() ?>"/>

                <label for="years">Годы жизни</label>
                <input type='text' name='years' id='years' value="<?//= $person->getYears() ?>"/>
                
                <?//= HTML::image('/res/upload/photos/' . $person->getPhotoName($person->getId())) ?>
                
                <label for="file">Изменить фото</label>
                <input type="file" name="file" id="file" accept="image/*"/>
				
                <label for="description">Биография</label>
                <textarea class="ckeditor" name="description" id="description">
					<?//= $person->getDescription() ?>
                </textarea>

                <input 
                    type='submit' 
                    style="margin-top: 20px" 
                    class='small button' 
                    value='Сохранить изменения'
                />
            </fieldset>
        </form>
    </div>
</div-->