<div class="row">
    <div id ="middle" class="small-8 large-4 small-centered columns centered-middle">
        <div class="panel">
            <?php if (isset($errors) || isset($login_errors)): ?>
                <div data-alert class="alert-box alert">
                    <ul class="errors">
                        <?php if (isset($errors)):?>
                            <?php foreach ($errors as $message): ?>
                                <li><?php echo $message ?></li>
                            <?php endforeach ?>
                        <?php endif; ?>
                        <?php if (isset($login_errors) && empty($errors)): ?>
                            <?= $login_errors; ?>
                        <?php endif; ?>
                    </ul>
                    <a href="#" class="close">&times;</a>
                </div>
            <?php endif;?>
            <form id="login" name="login" method="POST">
                <div id="login-data">
                    <label for="login">Логин</label>
                    <input type="text" id="login" name="login"/>

                    <label for="password">Пароль</label>
                    <input type="password" id="password" name="password"/>              
                </div>
                <input class="button" type="submit" value="Войти" />
            </form>
        </div>
    </div>
</div>  
