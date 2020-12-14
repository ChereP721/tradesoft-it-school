<?php foreach ($this->post as $data) { ?>

    <form method="POST" name="u_add" action="<?=$_SERVER['REQUEST_URI']?>" enctype="multipart/form-data">
        <div class="form__wrap__item">
            <label for="f_author">Автор</label>
            <input type="text" id="f_author" name="u_name" required value="<?=$_SESSION['user']; ?>">
        </div>
        <div class="form__wrap__item">
            <label for="umail" data-msg='Введите корректный e-mail'>E-mail</label>
            <input type="text" id="umail" name="u_mail" required >
        </div>
        <div class="form__wrap__item">
            <label for="f_text">Текст комментария</label>
            <textarea name="u_txt" id="utext" ><?=$data['content']; ?></textarea>
        </div>
        <input type="hidden" name="u_id" value="<?=$_SESSION['user_id']; ?>">
        <input type="hidden" name="p_id" value="<?=$data['post_id']; ?>">
        <input type="hidden" name="c_id" value="<?=$data['id']; ?>">
        <div class="form__wrap__item">
            <input name="f_send" type="submit" value="Изменить">
        </div>
    </form>
<?php } ?>