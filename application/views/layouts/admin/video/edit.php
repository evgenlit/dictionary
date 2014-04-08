<h3>Редактирование темы "<?= $video->getTitle() ?>"</h3>
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
        <a href="http://pseudo01.hddn.com/vod/demo.flowplayervod/Extremists.flv"
           style="display:block;width:425px;height:300px;"
           id="player"></a>
        <script>
            $( document ).ready(function() {
                flowplayer("player", "http://releases.flowplayer.org/swf/flowplayer-3.2.16.swf");
            });
        </script>
        <form class='custom' method="POST" enctype="multipart/form-data" id="video_edit" name="video_edit">
            <fieldset>
                <legend>Описание видео</legend>
                <label for="title">Заголовок</label>
                <input type='text' name='title' id='title' value="<?= $video->getTitle() ?>"/>

                <label for="date">Дата</label>
                <input type='text' name='date' id='date' value="<?= $video->getDate('d.m.Y') ?>"/>

                <label for="date">Время</label>
                <input type='text' name='time' id='time' value="<?= $video->getDate('H:i') ?>"/>

                <label for="content">Описание</label>
                <textarea class="ckeditor" name="content" id="content">
                    <?= $video->getDescription() ?>
                </textarea>

                <input type='submit' style="margin-top: 20px" data-id="<?= $video->getId() ?>" class='delete small alert button' value='Удалить новость'/>
                <input type='submit' style="margin-top: 20px" class='small button' value='Редактировать'/>
            </fieldset>
        </form>
    </div>
</div>