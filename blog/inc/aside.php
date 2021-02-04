<aside class="aside aside_mob">
    <div class="aside__blockwrap">
        <div class="aside__block__title">Авторизация:</div>
        <div class="aside__block__content">
            <?php
                $auth = new SiteAuth();
                $auth->checkAuth();
                $auth->formDisplay();
            ?>
        </div>
    </div>
	<div class="aside__blockwrap">
		<div class="aside__block__title">Топ просмотров</div>
		<div class="aside__block__content"><a href="/"><img src="upload/jpg/3.png" width="300" alt="Картинка"></a></div>
	</div>
	<div class="aside__blockwrap">
		<div class="aside__block__title">Скидка дня %</div>
		<div class="aside__block__content"><a href="/"><img src="upload/jpg/4.jpg" width="300" alt="Картинка1"></a></div>
	</div>
	<div class="aside__blockwrap">
		<div class="aside__block__title">Категории</div>
		<div class="aside__block__content"></div>
	</div>
</aside>