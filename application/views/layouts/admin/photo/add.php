<div id="wrap">
	<h2>Files</h2>
	<?php if (empty($files)) : ?>
		<p>Uploaded files not found</p>
	<?php else : ?>
		<div class="pictures">
			<?php foreach ($files as $file) : ?>
				<img src="/res/upload/photos/<?= $file['fileName'] ?>" alt=""/>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
	

	<h2>Upload</h2>
	<?php if ($message) : ?>
		<div class="message"><?php echo HTML::chars($message) ?></div>
	<?php endif; ?>
	<?php foreach ($errors as $error) : ?>
		<div class="error"><?php echo HTML::chars($error) ?></div>
	<?php endforeach; ?>
	<form action="<?php echo Route::url('admin', array('controller' => 'photo', 'action' => 'add')) ?>" method="post" enctype="multipart/form-data">
		<label for="image_control">For upload picture please select the file and click upload button</label>
		<div class="row">
			<input type="file" name="image" id="image_control">
			<input type="submit" value="Upload">
		</div>
	</form>
</div>