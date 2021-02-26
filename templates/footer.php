
    <!-- блок просмотра коммента -->
    <div>
        <div class="show__block">
            <p class="show__comment">Comments</p>
            <button data-modal class="show__btn">Comments</button>

            <!--                    <ul>-->
            <!--                        <li><img class="show__img" src="https://forums.drom.ru/pp.php?u=http://hsto.org/storage1/51c49914/7a1470ce/c905694e/4f74d479.png" alt="Avatar admin">-->
            <!--                            <div>-->
            <!--                                <i class="fa fa-user"></i>-->
            <!--                                <span class="fav__user">--><?php //echo $user;  ?><!--</span>-->
            <!--                                <i class="fa fa-calendar"></i>-->
            <!--                                <time class="fav__calendar" datetime="2021-01-14T20:28:57"> --><?php //timeComment() ?><!--</time>-->
            <!--                            </div>-->
            <!--                            <p class="show__post">--><?php //echo ($quotes[$random_number]);  ?><!--</p>-->
            <!--                        </li>-->
            <!--                        <li><img class="show__img" src="https://forums.drom.ru/pp.php?u=http://hsto.org/storage1/51c49914/7a1470ce/c905694e/4f74d479.png" alt="Avatar admin">-->
            <!--                            <div>-->
            <!--                                <i class="fa fa-user"></i>-->
            <!--                                <span class="fav__user">--><?php //nameUserGeneri()  ?><!--</span>-->
            <!--                                <i class="fa fa-calendar"></i>-->
            <!--                                <time class="fav__calendar" datetime="2021-01-14T20:28:57"> --><?php //timeComment() ?><!--</time>-->
            <!--                            </div>-->
            <!--                            <p class="show__post">--><?php //echo ($quotes[$random_number2]);  ?><!--</p>-->
            <!--                        </li>-->
            <!--                        <li><img class="show__img" src="https://forums.drom.ru/pp.php?u=http://hsto.org/storage1/51c49914/7a1470ce/c905694e/4f74d479.png" alt="Avatar admin">-->
            <!--                            <div>-->
            <!--                                <i class="fa fa-user"></i>-->
            <!--                                <span class="fav__user">--><?php //nameUserGeneri()  ?><!--</span>-->
            <!--                                <i class="fa fa-calendar"></i>-->
            <!--                                <time class="fav__calendar" datetime="2021-01-14T20:28:57"> --><?php //timeComment() ?><!--</time>-->
            <!--                            </div>-->
            <!--                            <p class="show__post">--><?php //echo ($quotes[$random_number3]);  ?><!--</p>-->
            <!--                        </li>-->
            <!--                    </ul>-->

        </div>
</footer>
</article>
</section>

<!-- пробный модал -->

<div class="modal">
    <div class="modal__dialog">
        <div class="modal__content">
            <footer class="main__title_post">My First Blog 2021</footer>
            <form action="/../../src/MyProject/controller/upload.php"  method="post" enctype="multipart/form-data" name="form-comment">
                <div data-close class="modal__close">&times;</div>
                <div class="modal__title">Leave a comment</div>
                <input required placeholder="Ваше имя" name="name" type="text" class="modal__input">
                <input required placeholder="Ваш email" name="email" type="email" class="modal__input">

                <div class="modal__comment">
                    <textarea placeholder="Ваш комментарий" name="comment" type="text" class="order__comment"></textarea>
                </div>
                <input type="file" name="image" >
                <button class="modal__btn">Оставить комментарий</button>
            </form>
        </div>
    </div>
</div>