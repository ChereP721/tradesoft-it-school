
<h2 class="section__article__h2"><a href="post.php?id=<?=$this->post['id']; ?>" class="section__article__h2__link"><?=$this->post['title']; ?></a></h2>
		<article class="section__article">
			<div class="section__article__author">
				<i class="far fa-calendar-alt"></i> 
				<time datetime="<?=$this->post['post_date']; ?>"><?=$this->post['post_date']; ?></time> опубликовал: 
				<i class="fas fa-user-circle"></i> <a href="" class="section__article__author__link"> <?=$this->post['author']; ?></a>
			</div>
			<figure class="section__article__figure">
				<a href=""><img src="<?=$this->post['image']; ?>" width="200" alt="Картинка"></a>
				<figcaption><?=$this->post['title']; ?></figcaption>
			</figure>
			<div class="section__article__post">
				<p><?=$this->post['intro']; ?></p>			
			</div>
			<a href="post.php?id=<?=$this->post['id']; ?>" class="section__article__nextlink">Читать далее  →</a>
				<footer class="section__article__footer">			
					<ul>
						<li><i class="fas fa-eye"></i> <?=$this->post['view']; ?></li>
						<li><i class="fas fa-folder-open"></i> <a href="">Категории</a></li>
						<li><i class="fas fa-comments"></i> <a href="">10 комментариев</a></li>
					</ul>
				</footer>
		</article>