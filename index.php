<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	    <link rel="stylesheet" href="css/styleReset.css" type = "text/css"> <!--Очистка стилей-->

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"> <!--подключение иконок-->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
            
    <title>Blog</title>
    
</head>
<body>
    <header class="header"><!--Шапка-->
        <div class="logo">
            <img src="img/Logo_FJS.jpg" alt="Logotip">
        </div>
        <Nav class="nav"><!--Навигация-->
            <a href="#">Блог</a>
            <a href="#">Категории</a>
        </Nav>



    </header>

        <main class="main"><!--Основной контент сайта-->
            <h1>Изделия ручной работы</h1>

            <article class="articl"><!--Блок который можнобез проблем изъять из контента-->
                <header class="arthed">
                    <h2 title="first-theme">Кукла Azazel</h2>
                </header>
                    <figure class="artfig"><!-- Блок в который оборачиваем контент, можно заменить дивом-->
                            <img src="img/dolls/Azazel.jpg" alt="mini-doll_Azazel_Red">
                            <figcaption>Azazel</figcaption>
                                <p>Мини-кукла "Азазель" (Черно-красный окрас)
                                    Азазель — это один из первых падших ангелов, который не побоялся Бога и его воли, после чего Архангелам было приказано убить его, но никто не был сильней, чем он...
                                    <br><br>                                  
                                    Он научил мужчин оружейному искусству и научил их воевать, а женщин — использованию драгоценных камней, украшений и искусству раскрашивания лица (косметике), а также искусству обмана.
                                    <br><br> 
                                    Кукла выполнена полностью вручную.
                                    Мордочка и копыта сделаны из полимерной глины.
                                    Наполнитель - холофайбер и стеклянный гранулянт.
                                    Все куклы индивидуальны и неповторимы. 100% сходство невозможно.
                                    Размер 13 см.
                                    Можно использовать как подвеску в машине или просто как интерьер.
                                </p>
                            <button type="button">Прочитать статью</button>
                            
                        <footer class="artfoot"> <!--Подвал статьи-->
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
                            <div title="Комментарии">
                                <span>Комментарии</span>
                            </div>
                            <div>
                                <button type="button">
                                    <span>Показать комментарии</span>
                                </button>
                                <ul>
                                    <li>
                                        <img src="#" alt="Avatar admin">
                                        <div>
                                            <div>
                                                <span>Admin</span>
                                                <time datetime="2021-01-26T20:28:57">January 26, 2021</time>
                                            </div>
                                            <p>
                                                Текст комментария
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </footer> 
                    </figure>    
            </article>

            <article class="articl"><!--Блок который можнобез проблем изъять из контента-->
                <header class="arthed">
                    <h2 title="second-theme">Кулон "Следы леса"</h2>
                </header>
                    <figure class="artfig"><!-- Блок в который оборачиваем контент, можно заменить дивом-->
                            <img src="img/pendants/Traces_forest.jpg" alt="pendant_Traces_forest">
                            <figcaption>Кулон "Следы леса"</figcaption>
                                <p>
                                    Артефакт на шею "Следы леса"<br>
                                    Кулон ручной работы.<br>
                                    Дерево,акриловые краски,лак.<br>
                                    Диаметр 3,5см<br>
                                </p>
                            <button type="button">Прочитать статью</button>
                            <hr>
                        <footer class="artfoot"> <!--Подвал статьи-->
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
                                    <a href="#">pendants</a>
                                </div>
                                <div>
                                    <i class="fa fa-comment"></i>
                                    <a href="#" title="Comment on Mauris posuere">No comments</a> 
                                </div>
                            </div>
                            <hr>
                            <div title="Количество просмотров">
                                <i class="fa fa-eye"></i>
                                <span>5</span>
                            </div>
                            <hr>
                             <!--Выводятся списком комментарии к статье-->
                            <div title="Комментарии">
                                <span>Комментарии</span>
                            </div>
                            <div>
                                <button type="button">
                                    <span>Показать комментарии</span>
                                </button>
                                <ul>
                                    <li>
                                        <img src="#" alt="Avatar admin">
                                        <div>
                                            <div>
                                                <span>Admin</span>
                                                <time datetime="2021-01-26T20:28:57">January 26, 2021</time>
                                            </div>
                                            <p>
                                                Текст комментария
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </footer> 
                    </figure>    
            </article>

            <article class="articl"><!--Блок который можнобез проблем изъять из контента-->
                <header class="arthed">
                    <h2 title="second-theme">Кулон "Следы леса"</h2>
                </header>
                    <figure class="artfig"><!-- Блок в который оборачиваем контент, можно заменить дивом-->
                            <img src="img/brooches/brooches_2.jpg" alt="brooches_brooches_2" >
                            <figcaption>Брошь-оберег</figcaption>
                                <p>
                                    Брошь-оберег от сглаза<br>
                                    Брошь ручной работы.<br>
                                    Глина, краски, лак.<br>                                    
                                </p>
                            <button type="button">Прочитать статью</button>
                            <hr>
                        <<footer class="artfoot"> <!--Подвал статьи-->
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
                                    <a href="#">pendants</a>
                                </div>
                                <div>
                                    <i class="fa fa-comment"></i>
                                    <a href="#" title="Comment on Mauris posuere">No comments</a> 
                                </div>
                            </div>
                            <hr>
                            <div title="Количество просмотров">
                                <i class="fa fa-eye"></i>
                                <span>10</span>
                            </div>
                            <hr>
                             <!--Выводятся списком комментарии к статье-->
                            <div title="Комментарии">
                                <span>Комментарии</span>
                            </div>
                            <div>
                                <button type="brooches">
                                    <span>Показать комментарии</span>
                                </button>
                                <ul>
                                    <li>
                                        <img src="#" alt="Avatar admin">
                                        <div>
                                            <div>
                                                <span>Admin</span>
                                                <time datetime="2021-01-26T20:28:57">January 26, 2021</time>
                                            </div>
                                            <p>
                                                Текст комментария
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </footer> 
                    </figure>    
            </article>

                
        </main>

    <footer> <!--Подвал страницы-->
        <span>Frion & Jane studio (Куклы и украшения ручной работы) 2021 © </span>
    </footer>
<!--заготовка формы комментария-->
    <div class="modal">
        <form action="#" method="POST" ="multipart/form-data" name="form-comment">
        <fieldset> <!--Оборачивает в рамку, группирует элементы в форме-->
            <legend>Форма комментария</legend>
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
                    <textarea name="content" id="content" cols="30" rows="10" placeholder="Добавьте комментарий"></textarea>
                </label>
            </p>
            <p>   
                <button class="main_btn" type="button">Submit Comment</button>
            </p> 
        </fieldset>
        </form>
    </div>

        <link rel="stylesheet" href="css/MyStyle.css" type = "text/css"> <!--Подключение стилей-->
</body>
</html>