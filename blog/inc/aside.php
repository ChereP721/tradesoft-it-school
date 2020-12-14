<aside class="aside aside_mob">
    <div class="aside__blockwrap">
        <div class="aside__block__title">Корзина:</div>
        <div class="aside__block__content">

        </div>
    </div>

    <div class="aside__blockwrap">
        <div class="aside__block__title">Авторизация:</div>
        <div class="aside__block__content">
            <?php
                $auth = new SiteAuth();
                $auth->processAuth();
                $auth->formDisplay();
            ?>
        </div>
    </div>
	<div class="aside__blockwrap">
		<div class="aside__block__title">Топ просмотров</div>
        <?php
            $postOut = new WorkDB($dbHost, $dbUser, $dbPass, $dbName);
            $postOut->postQuery(2);
            $out->outRenderedTemplate($postOut->data, 'once_post');
        ?>
	</div>
	<div class="aside__blockwrap">
		<div class="aside__block__title">Скидка дня %</div>
        <?php
            $postOut->postQuery(1);
            $out->outRenderedTemplate($postOut->data, 'once_post');
        ?>
	</div>
	<div class="aside__blockwrap">
		<div class="aside__block__title">Категории</div>
		<div class="aside__block__content"></div>
	</div>
</aside>