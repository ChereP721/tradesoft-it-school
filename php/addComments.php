<?php
//Сохранение файлов в катологи
if (isset ($_POST['send'])) {
    print_r($_POST);
}
?>

    <!--заготовка формы комментария-->
        <div class="modal">
        <form class="modal__form" action="php/modal_post.php" method="post" name="form-comment" enctype="multipart/form-data">
                <button type="button" class="modal__btn-close">
                    <i class="fa fa-close"></i>
                </button>
                    <h3 class="form__comments__title">Оставить комментарий</h3>
                    <div class="modal__form__comments__input"> 
                        <p>
                            <label for="name">
                                <span>Name</span>
                                <input type="text" id="name" name="name" placeholder="Введите ваше имя">
                            </label>
                        </p>
                        <p>
                            <label for="E-mail">
                                <span>E-mail</span>
                                <input type="text" id="email" name="email" placeholder="Введите ваш e-mail адрес">
                            </label>
                        </p>
                        <p>
                            <label for="file">
                                <span>File</span>
                                <input type="File" id="file" name="file">
                            </label>
                        </p>
                        <p>
                            <label for="comment">
                                <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Напишите комментарий"></textarea>
                            </label>
                            <button class="modal__btn" type="button" id="btnAddComment" name="send">Отправить комментарий</button>
                        </p>
                       <!-- <div class="loader__wrapper">
                        </div> -->
                        <div class="notification">
                            <p class="notification__title"></p>
                            <p class="notification__text"></p>
                        </div>
                    </div>  
            </form>
        </div>