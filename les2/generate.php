<?php

function gen_comment(int $count, int $len_comment) :string
{
	
	/* генерация комментариев gen_comment($count, $len_comment) (количество комментов, количество фраз) */
	
	$comment = '';
	$tmpl = '';
		
	$arr_author = array('Пушкин А.С.','Лермонтов М.Ю.','Крылов И.А.','Цицерон','Толстой Л.Н.');
	
	$arr_comment = array('Как говорится, сапер от лопатки недалеко падает.',
					'Как бы чего не вышло. ',
					'А судьи кто? ',
					'Бумага все терпит. ',
					'Быть или не быть - вот в чем вопрос. ',
					'Вернемся к нашим баранам. ',
					'Время - деньги. ',
					'Все свое ношу с собою. ',
					'Все течет, все изменяется. ',
					'Да был ли мальчик-то? ',
					'Двадцать два несчастья. ',
					'Что имеем, не храним, потерявши, плачем. ',
					'Что и требовалось доказать. ',
					'Человек человеку волк. ',
					'Цель оправдывает средства. ',
					'Хорошо смеется тот, кто смеется последним. ',
					'Счастливые часов не наблюдают. ',
					'Соединять приятное с полезным. ',
					'С чувством, с толком, с расстановкой. ',
					'С корабля на бал. ',
					'Рожденный ползать летать не может. '					
					);
	
	
	
	for ($j=1; $j<=$count; $j++) {
		for ($i=1; $i<=$len_comment; $i++) {
			$comment .= $arr_comment[rand(0,20)];
		};
		$tmpl.='<div class="section__article__comments">
					<div class="section__article__comments__author"><i class="fas fa-user-circle"></i> <a href="">'.$arr_author[rand(0,4)].'</a>
							 <time datetime="'.date('Y\-m\-d').'">('.date('d\.m\.Y').')</time>
					</div>
				<div class="section__article__comments__text">'.$comment.'</div></div>';
		$comment = '';
	};
	
	return $tmpl;
};

function create_parser_comment (int $count, int $len_comment):string
{
	
	/* генерация комментариев create_parser_comment($count, $len_comment) (количество комментов, количество фраз) */
	
	$str = file_get_contents('http://1q.su/aphorism/fraza/top.html');
	$str = mb_convert_encoding($str, 'utf-8', 'cp1251');
	preg_match_all('#<p align="left"><strong>(.+?)</strong><br>#su', $str, $res, PREG_PATTERN_ORDER);

	
	$comment = '';
	$tmpl = '';
		
	$arr_author = array('Пушкин А.С.','Лермонтов М.Ю.','Крылов И.А.','Цицерон','Толстой Л.Н.');
	
	for ($j=1; $j<=$count; $j++) {
		for ($i=1; $i<=$len_comment; $i++) {
			$comment .= $res[1][rand(0,count($res[1]))].'. '; 
		};
		$tmpl.='<div class="comments_wrap"><p class="c_author">
							<i class="fas fa-user-circle"></i> <a href="">'.$arr_author[rand(0,4)].'</a>
							 <time datetime="'.date('Y\-m\-d').'">('.date('d\.m\.Y').')</time>
						</p>
				<p class="">'.$comment.'</p></div>';
		$comment = '';
	};
	
	return $tmpl;
};

?>