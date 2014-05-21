<h3>Добавление персоналии</h3>
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
<style>
    table {
        border: 0px !important;
    }
</style>
<div class="row">
    <div class='small-8 large-8 columns'>
        <form class='custom' method="POST" enctype="multipart/form-data" id="post_add" name="post_add">
            <fieldset>
                <label for="name">ФИО (полностью)</label>
                <input type='text' name='name' id='name'/>

                <label for="years">Годы жизни</label>
                <input type='text' name='years' id='years'/>
                
                <label for="file">Загрузить фото</label>
                <input type="file" name="file" id="file"/>
				
                <label for="description">Биография</label>
                <textarea class="ckeditor" name="desc" id="desc"></textarea>
				<input type="hidden" name="description" id="description">
					   

                <input 
                    type='submit' 
                    style="margin-top: 20px" 
                    class='small button' 
                    value='Добавить'
                />
            </fieldset>
        </form>
    </div>
</div>
<script type="text/javascript">
	CKEDITOR.replace('desc');
	var editor = CKEDITOR.instances.desc;
	editor.on('blur', function(event) {
		var ckvalue = this.getData();
		$('input#description').val(ckvalue);
	});
</script>