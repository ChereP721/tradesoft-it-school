<?php //Подключение PHP файлов
include 'php/data.php';
include 'php/connectBD.php';
//include 'addComments.php';
?>
<?php
$connectBD;
if(!isset($_COOKIE['user_id'])) {
	if(isset($_POST['authSubmit'])) {
		$authlogin = mysqli_real_escape_string($connectBD, trim($_POST['login']));
		$authPassword = mysqli_real_escape_string($connectBD, trim($_POST['password']));
		if(!empty($authlogin) && !empty($authPassword)) {
			$queryAuth = "SELECT `user_id` , `userLogin` FROM `users` WHERE userLogin = '$authlogin' AND userPassword = md5('$authPassword')";
			$authData = mysqli_query($connectBD, $queryAuth);
			if(mysqli_num_rows($authData) > 0 ) {
				$row = mysqli_fetch_assoc($authData);
				setcookie('user_id', $row['user_id'], time() + (11));
				setcookie('userLogin', $row['userLogin'], time() + (11));
                $home_url = 'http://' . $_SERVER['HTTP_HOST']. '/tradesoft-it-school/';
                header('Location: ' . $home_url);
			}
			else {
				$messAuth =  'Неверный логин или пароль';
			}
		}
		else {
			$messAuth =  'Введите логин и пароль';
		}
	}
}
?>

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
     
        <header class="header"><!--Шапка-->
            <div class="container">
            
                <?php
                    $connectBD;
                    if(isset($_POST['regSubmit'])){
                        $login = mysqli_real_escape_string($connectBD, trim($_POST['login']));
                        $password = mysqli_real_escape_string($connectBD, trim($_POST['password']));
                        if(!empty($login) && !empty($password)) {
                            $query = "SELECT * FROM `users` WHERE userLogin = '$login'";
                            $data = mysqli_query($connectBD, $query);
                            if(mysqli_num_rows($data) == 0) {
                                $query = "INSERT INTO `users` (userLogin, userPassword) VALUES ('$login', md5('$password'))";
                                mysqli_query($connectBD,$query);
                                $messAuth = 'Вы зарегистрированы';
                                mysqli_close($connectBD);
                                exit();
                            }
                            else {
                                $messAuth = 'Логин уже существует';
                            }
                        }
                    }
                ?>

                <?php
                    if(empty($_COOKIE['userLogin'])) {
                ?>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" class="auth__form shadow" method="post">
                            <input type="hidden" name="form-name" value="form-auth" >
                                <div class="auth__group">
                                    <label class="auth__label" for="login">Логин</label>
                                    <input class="auth__input" type="tel" id="login" name="login" placeholder="login">
                                </div>
                                <div class="auth__group">
                                    <label class="auth__label" for="password">Пароль</label>
                                    <input class="auth__input" type="password" id="password" name="password" placeholder="password">
                                </div>
                                <button class="btn" type="submit" name="authSubmit">Войти</button>                        
                                <button class="btn" type="submit" name="regSubmit">Зарегистрироваться</button>                                                       
                    </form>
                <?php
                }
                else {
                    ?>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" class="auth__form shadow" method="post">
                    <label> Пользователь (<?php echo  $_COOKIE['userLogin'];?>) </label>       
                    <button class="btn" type="submit" action="php/exitAuth.php" name="exitAuth">Выйти из (<?php echo $_COOKIE['userLogin'];?>)</button> 
                    </form>  
                <?php	
                }
                ?>
                <div class="messAuth"><?= $messAuth?></div>  
                
            
                <div class="header__logo">
                    <img src="img/Logo_FJS.jpg" alt="Logotip">
                </div>
                <nav class="header__nav shadow"><!--Навигация-->
                    <a href="#"><?=$goods;?></a>
                    <a href="#"><?=$categories;?></a>
                </nav>
                </div>
        </header>

            <main class="main"><!--Основной контент сайта-->
                <div class="container">
                    <h1 class="main__title__List shadow"><?=$titleListGoods;?></h1>
                    <article class="main__articl shadow"><!--Блок который можнобез проблем изъять из контента-->
                        <header class="main__articl__header">
                            <h2 title="first-theme">Подарочный Набор на День Всех Святых</h2>
                        </header>
                            <figure class="main__articl__figure"><!-- Блок в который оборачиваем контент, можно заменить дивом-->
                                <img src="img/dolls/doll.jpg" alt="doll">
                                <figcaption></figcaption>
                            </figure>                               
                                <div class="main__articl__description">  
                                        <p> Необычный, уникальный набор не оставит никого равнодушным!</p> 
                                        <p> В набор входит кукла ручной работы, свеча ручной работы, подарочная коробка из фанеры.</p> 
                                        <p> Куколки все индивидуальны, могут отличаться от фото. При заказе все нюансы и пожелания обсуждаются с мастером</p> 
                                        <p> Размер примерно 16см.</p> 
                                        <p> Сделана из мешковины с отделкой из натуральной кожи.</p> 
                                        <p> Свеча ручной работы "Сердце" от наших друзей.</p> 
                                        <p> Состав - ароматный, высококачественный воск, хлопковый фитиль. </p> 
                                    </p>    
                                    <button type="button" clas = "main__articl__description" button>Прочитать статью</button>             
                                </div>                 
                             <footer class="main__articl__footer"> <!--Подвал статьи-->

                                    <div class="main__articl__footer__items">                       
                                        <div>
                                            <i class="fa fa-calendar"></i>
                                            <time datetime="2021-01-26T20:20:30">Январь 26, 2021</time>
                                        </div>
                                        <div>
                                            <i class="fa fa-user"></i>
                                            <a href="#" title="Posts by Author"><?=$users[$i];?></a>
                                        </div>

                                        <div title="Показать все посты данной категории">
                                            <i class="fa fa-bookmark"></i>
                                            <a href="#">dolls</a>
                                        </div>
                                        <div>
                                            <i class="fa fa-comment"></i>
                                            <a href="#" title="Comment on Mauris posuere">No comments</a> 
                                        </div>
                                        <div title="Количество просмотров">
                                            <i class="fa fa-eye"></i>
                                        <span>2</span>
                                    </div>
                                    </div>

                                     <!--Выводятся списком комментарии к статье-->
                                    <div class="main__articl__footer__comments" title="Комментарии">
                                        <div class="main__articl__footer__comments__title">Комментарии к посту</div>
                                            <ul class="main__articl__footer__comments__container">
                                            <li>
                                                    <div class="main__articl__footer__comments__text">
                                                    <?= $comments[$i];?>
                                                        <div class="main__articl__footer__comments__text_footer">                                                        
                                                            <span><u>Автор комментария:</u> <?=$users[$i];?> </span>
                                                            <time><u>Дата создания:</u> <?=$DateTime?></time>                                                        
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="main__articl__footer__comments__text">
                                                    <?= $comments[$i];?>
                                                        <div class="main__articl__footer__comments__text_footer">                                                        
                                                            <span><u>Автор комментария:</u> <?=$users[$i];?> </span>
                                                            <time><u>Дата создания:</u> <?=$DateTime?></time>                                                        
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="main__articl__footer__comments__text">
                                                    <?= $comments[$i];?>
                                                        <div class="main__articl__footer__comments__text_footer">                                                        
                                                            <span><u>Автор комментария:</u> <?=$users[$i];?> </span>
                                                            <time><u>Дата создания:</u> <?=$DateTime?></time>                                                        
                                                        </div>
                                                    </div>
                                                </li>                                              
                                            </ul>
                                        <button class="comments_btn" type="button" id="add-comment">Добавить комментарии</button>    
                                    </div>
                            </footer> 
                    </article>
                </div>    
            </main>
            <div class="container">
                <footer class="footer shadow"> <!--Подвал страницы-->
                    <span>Frion & Jane studio (Куклы и украшения ручной работы) 2021 © </span>
                </footer>
            </div> 


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
                            <button class="modal__btn" type="button" id="btnAddComment" name="btnAddComment">Отправить комментарий</button>
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
   
    </div>
   
    <link rel="stylesheet" href="css/MyStyle.css" type = "text/css"> <!--Подключение стилей-->
    <script src="js/index.jsss"></script>
</body>
</html>
