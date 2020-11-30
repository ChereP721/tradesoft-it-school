<h1 class="section__h1"><?=$this->post['title']; ?></h1>
		<article class="section__article">
			<div class="section__article__author">
				<i class="far fa-calendar-alt"></i> 
				<time datetime="<?=$this->post['post_date']; ?>"><?=strftime('%e %B %G',strtotime($this->post['post_date'])); ?></time> опубликовал:
				<i class="fas fa-user-circle"></i> <a href="" class="section__article__author__link"> <?=$this->post['author']; ?></a>
			</div>
			<figure class="section__article__figure">
				<div class="section__article__figure__link"><img src="<?=$this->post['image']; ?>" width="200" alt="<?=$this->post['title']; ?>"></div>
				<figcaption><?=$this->post['title']; ?></figcaption>
			</figure>
			<div class="section__article__post">
				<?=$this->post['content']; ?>			
			</div>
				<footer class="section__article__footer">			
					<ul>
						<li><i class="fas fa-eye"></i> <?=$this->post['view']; ?></li>
						<li><i class="fas fa-folder-open"></i> <a href="category.php?id=<?=$this->post['cat_id']; ?>"><?=$this->post['cat_title']; ?></a></li>
						<li><i class="fas fa-comments"></i> <a href="">10 комментариев</a></li>
					</ul>
				</footer>
		</article>