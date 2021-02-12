
<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	    <link rel="stylesheet" href="css/styleReset.css" type = "text/css"> <!--Очистка стилей-->

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"> <!--подключение иконок-->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
        
    <title>Frion&Jane</title>

</head>
<body class="body">
    <div class="wrapper">
        <div class="container">   
            <header class="header"><!--Шапка-->
                <div class="header__logo">
                    <img src="img/Logo_FJS.jpg" alt="Logotip">
                </div>
                <Nav class="header__nav"><!--Навигация-->
                    <a href="#">Блог</a>
                    <a href="#">Категории</a>
                </Nav>
            </header>
        </div>

            <div class="container">
                <main class="main"><!--Основной контент сайта-->                
                    <h1>Изделия ручной работы</h1>
                    <article class="main__articl"><!--Блок который можнобез проблем изъять из контента-->
                        <header class="main__articl__header">
                            <h2 title="first-theme">Подарочный Набор на День Всех Святых</h2>
                        </header>
                            <figure class="main__articl__figure"><!-- Блок в который оборачиваем контент, можно заменить дивом-->
                                <img src="img/dolls/doll.jpg" alt="doll">
                                <figcaption></figcaption>
                            </figure>                               
                                <div class="main__articl__description">  
                                        <p> Необычный, уникальный набор не оставит никого равнодушным!
                                        В набор входит кукла ручной работы, свеча ручной работы, подарочная коробка из фанеры.
                                        Куколки все индивидуальны, могут отличаться от фото. При заказе все нюансы и пожелания обсуждаются с мастером
                                        Размер примерно 16см.
                                        Сделана из мешковины с отделкой из натуральной кожи.
                                        Свеча ручной работы "Сердце" от наших друзей.
                                        Состав - ароматный, высококачественный воск, хлопковый фитиль. 
                                    </p>    
                                    <button type="button">Прочитать статью</button>             
                                </div>        
                                         
                             <footer class="main__articl__footer"> <!--Подвал статьи-->
                                    <div>                       
                                        <div>
                                            <i class="fa fa-calendar"></i>
                                            <time datetime="2021-01-26T20:20:30">Январь 26, 2021gi</time>
                                        </div>
                                        <div>
                                            <i class="fa fa-user"></i>
                                            <a href="#" title="Posts by Author">avshatov</a>
                                        </div>
                                    </div>
                                    <hr>
                                    <div>
                                        <div title="Показать все посты данной категории">
                                            <i class="fa fa-bookmark"></i>
                                            <a href="#">dolls</a>
                                        </div>
                                        <div>
                                            <i class="fa fa-comment"></i>
                                            <a href="#" title="Comment on Mauris posuere">No comments</a> 
                                        </div>
                                    </div>
                                    <hr>
                                    <div title="Количество просмотров">
                                        <i class="fa fa-eye"></i>
                                        <span>2</span>
                                    </div>
                                    <hr>
                                    <!--Выводятся списком комментарии к статье-->
                                    <div class="comments" title="Комментарии">
                                    Комментарий к статье
                                    </div>
                                    <div>
                                        <button type="button">
                                            <span>Добавить комментарии</span>
                                        </button>
                                        <ul>
                                            <li>
                                                <img src="#" alt="Avatar">
                                                <div>
                                                    <div>
                                                        <span>Автор комментария: Admin </span>
                                                        <time>Дата создания: 01.01.2021</time>                                                        
                                                    </div>

                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </footer> 
                    </article>
                </main>
            </div>



        <footer class="footer"> <!--Подвал страницы-->
            <div class="container">
                <span>Frion & Jane studio (Куклы и украшения ручной работы) 2021 © </span>
            </div> 
        </footer>



        
    <!--заготовка формы комментария-->
        <div class="modal">
            <form action="#" method="POST" ="multipart/form-data" name="form-comment" class="modal__form__comments">
                    <h3 class="form__comments__title">Оставить комментарий</h3>
                    <div class="modal__form__comments__input"> 
                        <p>
                            <label for="name">
                                <span>Name</span>
                                <input type="text id=name" placeholder="Введите ваше имя">
                            </label>
                        </p>
                        <p>
                            <label for="E-mail">
                                <span>E-mail</span>
                                <input type="text id=E-mail" placeholder="Введите ваш e-mail адрес">
                            </label>
                        </p>
                        <p>
                            <label for="File">
                                <span>File</span>
                                <input type="File" id="File">
                            </label>
                        </p>
                        <p>
                            <label for="content">
                                <textarea name="content" id="content" cols="30" rows="10" placeholder="Напишите комментарий"></textarea>
                                <button class="main_btn" type="button">Отправить комментарий</button>
                            </label>
                        </p>

                    </div>  
            </form>
        </div>
   
    </div>
    
    <link rel="stylesheet" href="css/MyStyle.css" type = "text/css"> <!--Подключение стилей-->
</body>
</html>
