<form method="POST" name="f_login" action="<?=$_SERVER['REQUEST_URI'];?>" enctype="multipart/form-data">
    <div class="form__wrap__item">
        <label for="f_login">Логин:</label>
        <input type="text" id="f_login" name="f_login" required class="wid_60">
    </div>
    <div class="form__wrap__item">
        <label for="f_passw">Пароль:</label>
        <input type="password" id="f_passw" name="f_passw" required class="wid_60">
    </div>
    <div class="form__wrap__item">
        <input name="f_send" type="submit" value="Войти">
    </div>
</form>