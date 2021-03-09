<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Test page</title>
    </head>
    <body>
        <form>
            <tr>
                <div id="textFieldBlock">
                    <label for="testTextfield">Test Label for textfield</label><br>
                    <input type="textfield" id="testTextField" value="Test TextField"/>
                </div>
            </tr>
            <tr>
                <div id="buttonBlock">
                    <input type="button" id="testButton" value="Test Button"/>
                </div>
            </tr>
            <tr>
                <input type="checkbox" id="hideTextField" onclick="changeVisibility('textFieldBlock', checked)"/>Hide TextField
                <input type="checkbox" id="hideButton" onclick="changeVisibility('buttonBlock', checked)"/>Hide Button
            </tr>
        </form>
        
        <script type="text/javascript" language="JavaScript">
            function changeVisibility(divId, visible){
                document.getElementById(divId).style.display = visible ? "none": "block";
            }
        </script>


<!-- моя форма -->
<div class="auth__form shadow">  
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>"  enctype="multipart/form-data">
        <input type="hidden" name="form-name" value="form-auth" >
            <div class="auth__group">
                <label class="auth__label auth_login" for="authLogin">Логин</label>
                <input class="auth__input" type="text" id="authLogin" name="authLogin" placeholder="Введите логин">
            </div>
            <div class="auth__group auth_password">
                <label class="auth__label" for="password">Пароль</label>
                <input class="auth__input" type="password" id="password1" name="password1" placeholder="Введите пароль">
            </div>
            <button class="btn" id="" type="submit" name="authSubmit">Войти</button>                        
            <button class="btn" id="" type="submit" name="authregSubmit">Зарегистрироваться</button>
</form>
</div> 
<div class="reg__form shadow">  
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
        <input type="hidden" name="form-name" value="form-reg" >
            <div class="reg__group">
                <label class="reg__label reg_login" for="regLogin">Логин</label>
                <input class="reg__input" type="text" id="regLogin" name="regLogin" placeholder="Введите логин">
            </div>
            <div class="reg__group reg_password1">
                <label class="reg__label" for="password1">Введите пароль</label>
                <input class="reg__input" type="password" id="password1" name="password1" placeholder="Введите пароль">
            </div>
            <div class="reg__group reg_password2">
                <label class="reg__label" for="password2">Повторите пароль</label>
                <input class="reg__input" type="password" id="password2" name="password2" placeholder="Повторите пароль">
            </div>                  
            <button class="btn" id="" type="submit" name="Back">Назад</button>
            <button class="btn" id="" type="submit" name="regSubmit">Зарегистрироваться</button>
</form>
</div>





<link rel="stylesheet" href="../css/MyStyle.css" type = "text/css">

    </body>
</html>