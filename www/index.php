<?php 
include 'code.php'; 
?>

<!DOCTYPE html>
<html lang="ru" class="font">
<head>
	<meta charset="utf-8">
	<title>Blog</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<header class="header">
		<nav class="header__nav">
			<a href="" class="header__link header__link_active">Link 1</a>
			<a href="" class="header__link">Link 2</a>
		</nav>
	</header>
	<main class="main container">
		<h1 class="main__heading main__heading_level_1">Blog</h1>
		<article class="post">
            <div class="post__wrapper">
                <header class="post__header">
				    <h2 class="post__title">Mauris posuere</h2>
			    </header>
                <div class="main__post__content"> 
                    <figure class="main__post__figure">
                        <img class="main__post__figure__image" src="https://livedemo00.template-help.com/wordpress_50742/wp-content/uploads/2014/07/Depositphotos_12240275_original-200x150.jpg" alt="Mauris posuere">
			        </figure>
                    <div>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel mauris sollicitudin dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim. Phasellus fringilla hendrerit lectus nec vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In faucibus, risus eu volutpat pellentesque, massa felis feugiat velit, nec...
                    </div>
                    
                </div>
                <div>
                <div><a href="">Read more</a></div>
                <hr>
            </div>
            <footer class="main__footer>">
                <div> 
                    <div class="main__footer__div">
					    <i class="fa fa-calendar main__footer__icon"></i>
					    <time datetime="2021-01-01">2021-01-01</time>
				    </div>
				    <div class="main__footer__div">
                        <i class="fa fa-user main__footer__icon"></i>
					    <a href="" title="">Admin</a>
                    </div>
                </div>
                <hr>
                <div class="main__footer__div">
                    <i class="fa fa-bookmark main__footer__icon"></i>
                    Uncategorized
                </div>
                <div class="main__footer__div">
                    <i class="fa fa-tag main__footer__icon"></i>No tags
                </div>
                <hr>
                <div class="main__footer__div">
                    <i class="fa fa-comment main__footer__icon"></i>
					<a href="" title=""></a>Comments</a>
                </div>
                <div class="main__footer__div">
                    <i class="fa fa-eye main__footer__icon"></i><?=$viewcount?>
                </div>
                
                <div>
                    <button>
                        <span>Show Comments</span>
                    </button>

                </div>
                <div>
                    <button id='add-comment'>
                        <span>Add comments</span>
                    </button>

                </div>
                <div>
                <p>Comments</p>
                    <ul>
                        <li>
                            <img src="" alt="No IMG">
                            <div>
                                <span><?=genName($arrayNames);?></span>
                                <time><?=genTime();?></time>
                            </div>
                            <p>
                            <?=genComment(); ?>
                            </p>
                        </li>
                        <li>
                            <img src="" alt="No IMG">
                            <div>
                                <span><?=genName($arrayNames); ?></span>
                                <time><?=genTime();?></time>
                            </div>
                            <p>
                            <?=GenComment(); ?>
                            </p>
                        </li>
                        <li>
                            <img src="" alt="No IMG">
                            <div>
                                <span><?=genName($arrayNames); ?></span>
                                <time><?=genTime();?></time>
                            </div>
                            <p>
                            <?=genComment(); ?>
                            </p>
                        </li>
                    </ul>
                </div>
            </footer>
		</article>
	</main>
	<footer>
        <div>
            <span>MyCo © 2021</span> 
		</div>
    </footer>

    <div class="modal">
        <form action="/" method="post" name="form-comment" enctype="multipart/form-data">
            <button class="modal__btn-close">X</button>
            <fieldset>
                <legend>Leave a comment</legend>
                <div>
                    <div class="modal__form__field">
                        <label for="name">
                            <!-- <span>  Name</span> -->
                            <input type="text" id="name" placeholder="Input name">
                        </label>
                    </div>
                    <div>
                        <label for="email">
                            <!-- <span>email</span> -->
                            <input type="text" id="email" placeholder="Input email">
                        </label>
                    </div>
                    <div>
                        <label for="file">
                            <span>Add a file</span>
                            <input type="file" name="file" id="file" accept="image/*">
                        </label>
                    </div>
                    <div>
                        <label for="textarea">
                            <!-- <span>Your text</span> -->
                            <textarea name="textarea" id="textarea" cols="30" rows="2"></textarea>
                        </label>
                    </div>
                    <button class="modal__btn-submit modalBtnSubmit" type="button">Send comment</button>
                </div>
            </fieldset>
        </form>
    </div>
    <script src="index.js"></script>
</body>