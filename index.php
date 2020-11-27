<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="<?= VIEWPORT ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/post.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>My blog</title>
</head>
<body>
<header class="header">
    <nav class="header_nav">
        <a href="/"><img src="img/logo.png" alt="logo" class="header_nav_logo"></a>
        <a href="/" class="header_link">BLOG</a>
        <a href="/" class="header_link">CATEGORIES</a>
    </nav>
    <div class="header_sign_in">
        <form action="php/form_login.php" class="login_main">
            <div class="header_login">
                <label for="Name:">
                    <input type="text" name="user" class="header_input" placeholder=" Name">
                </label>
                <label for="Password:">
                    <input type="password" name="pass" class="header_input header_input_2" placeholder=" password">
                </label>
            </div>
            <div>
                <button type="submit" value="login" name="head_login" class="login_button">Login</button>
            </div>
        </form>
    </div>
</header>
<main class="contanier main">
    <h1 class="main_heading main_heading_level_1">Blog</h1>
    <article class="post">
        <div class="post_wraper">
            <header class="post_header">
                <h2 title="first-theme">First theme</h2>
            </header>
            <div class="post_content">
                <figure class="post_img">
                    <img src="img/first_theme.png" alt="blog-photo" width="200" height="200">
                </figure>
                <div class="post_group">
                    <p class="post_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, adipisci dolorum,
                        fugit, itaque iure minus nobis odit perspiciatis quaerat quam recusandae sed sunt voluptates.
                        Fugiat nisi officiis omnis similique temporibus. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Amet, assumenda eaque facere nesciunt pariatur reiciendis totam velit.
                        Architecto, culpa, cum ea expedita id ipsam magnam officia officiis quae reprehenderit
                        voluptatem.</p>
                    <button type="button" class="post_link">Read more</button>
                </div>
            </div>
        </div>
    </article>
</main>
<footer class="post_footer">
    <div class="post_info-line">
        <div class="post_item">
            <i class="post_icon fa fa-calendar"></i>
            <time datetime="2020-11-15T20:20:30" class="post_text_date">November 15, 2020</time>
        </div>
        <div>
            <i class="post_footer_user fa fa-user"></i>
            <a href="/" class="post_text link" title="Post by Autor"><?= require_once 'data.php'; ?><?= ($author === $youName ? 'This is you' : $author) ?></a>
        </div>
    </div>
    <div>
        <i class="post_footer_eye fa fa-eye"></i>
        <?= $viewCount ?><?= $popularPostCommentNight ?>
    </div>
    <div class="">
        <i class="post_footer_comment fa fa-comment"></i>
        <a href="/" class="comment_link link">Comment</a>
        <ul class="footer_comment_list">
            <?= require_once 'test.php' ?>
        </ul>
    </div>
    <hr>
</footer>

<form action="/" method="post" class="form_comment" name="form-comment">
    <p>
        <label for="name">Name</label><br>
        <input type="text" id="name" placeholder="Your name"><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" placeholder="Your email"><br>
        <label for="message">Your message</label><br>
        <textarea name="message" id="message" cols="50" rows="8" placeholder="Write your message here"></textarea><br>
        <button type="button">Submit</button>
    </p>
</form>
</body>
</html>
