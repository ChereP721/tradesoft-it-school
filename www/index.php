<?php 
$h2Title = 'Some title';

define('MY_DOC_TITLE', 'title from const');

$h3title='3 title';

$viewcount=0;
$viewcount++;

$viewcount--;
$viewcount +=  rand(10,100);


/*if ($viewcount < 50) {
    echo 'мало!!!!!!!!!!!!!!!!';
    $viewcount *= 2;
}*/
//some comment
# 1 more comment
/*
* long comment
*/
?>

<!DOCTYPE html>
<html lang="ru">
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
				<h2 class="post_title"><? echo $h2Title ?> / <?=$h2Title?> / <?=MY_DOC_TITLE?> / Mauris posuere</h2>
			</header>
			<figure>
				<img src="https://livedemo00.template-help.com/wordpress_50742/wp-content/uploads/2014/07/Depositphotos_12240275_original-200x150.jpg" alt="Mauris posuere">
			</figure>
			<div>Some text
                <div>
                    <p>Some more text</p>
                    <a href="">read more</a>
                </div>
            </div>
            <hr>
			<footer class="main__footer>">
                <div> 
                    <div>
					    <i class="fa fa-calendar"></i>
					    <time datetime="2021-01-01">2021-01-01</time>
				    </div>
				    <div>
                        <i class="fa fa-user"></i>
					    <a href="" title="">Admin</a>
                    </div>
                </div>
                <hr>
                <div>
                    <i class="fa fa-bookmark"></i>
                    Uncategorized
                </div>
                <div>
                    <i class="fa fa-tag"></i>No tags
                </div>
                <hr>
                <div>
                    <i class="fa fa-comment"></i>
					<a href="" title=""></a>Comments</a>
                </div>

                <div>
                    <i class="fa fa-eye"></i><?=$viewcount?>
                </div>
                
                <div>
                    <button>
                        <span>Show Comments</span>
                    </button>

                </div>
                <div>
                <p>Comments</p>
                    <ul>
                        <li>
                            <img src="" alt="No IMG">
                            <div>
                                <span>Admin</span>
                                <time>2021-01-02</time>
                            </div>
                            <p>good</p>
                        </li>
                        <li>
                            <img src="" alt="No IMG">
                            <div>
                                <span>NotAdmin</span>
                                <time>2021-01-03</time>
                            </div>
                            <p>no good</p>
                        </li>
                        <li></li>
                    </ul>
                </div>
            </footer>
            </div>    
		</article>
	</main>
	<footer>
        <div>
            <span>MyCo © 2021</span> 
		</div>
    </footer>

    <div class="modal">
        <form action="/" method="post" name="form-comment" enctype="multipart/form-data">
            <fieldset>
                <legend>Leave a comment</legend>
                <div>
                    <div>
                        <label for="name">
                            <span>  Name</span>
                            <input type="text" id="name" placeholder="input name">
                        </label>
                    </div>
                    <div>
                        <label for="email">
                            <span>email</span>
                            <input type="email" id="email" placeholder="input email">
                        </label>
                    </div>
                    <div>
                        <label for="file">
                            <span>Add a file</span>
                            <input type="file" id="file" accept="image/*">
                        </label>
                    </div>
                    <div>
                        <label for="textarea">
                            <span>Your text</span>
                            <textarea name="textarea" id="textarea" cols="30" rows="2"></textarea>
                        </label>
                    </div>
                    <button class="modal_btn" type="button">Send comment</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>