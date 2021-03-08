<?php
// Случайный пользователь
$users = ['Admin', 'Сергей', 'Ульяна', 'Иван', 'Алексей', 'Дарья'];
$i = array_rand ($users);
echo "<b>Имя пользователя:</b> $users[$i]<br>";

//случайная дата
$DateTime = date('d.m.Y H:i:s', strtotime('-'.rand(0,5000).' day'));
echo "<b>Дата коментария:</b> $DateTime<br>";

// Случайный комментарий из песни
$text = 'Я     вижу , как закат  стёкла оконные плавит,
День прожит, а     ночь оставит тени снов в углах.
Мне не вернуть назад серую       птицу печали,
Всё в       прошлом, так быстро тают замки в облаках.

Там    все живы, кто любил меня,
Где восход  как праздник бесконечной    жизни,
Там     нет    счёта    рекам и морям,
Но по ним нельзя доплыть домой.

Вновь        примирит     всё тьма, даже алмазы и пепел,
Друг     равен врагу в итоге, а итог один.
Два солнца у       меня на этом     и прошлом свете,
Их вместе собой      укроет горько сладкий дым.

Там все живы, кто любил меня,
Где восход как праздник        бесконечной жизни,
Там нет счёта рекам и морям,
Но по     ним нельзя доплыть домой.

Возьми     меня с собой, пурпурная река,
Прочь унеси меня с собой, закат.
Тоска о том,     что было, рвётся через край,
Под     крики серых птичьих стай.

Я вижу, как закат стёкла оконные плавит,
День       прожит, а ночь оставит тени    снов в углах.';

#Удаление лишние символы из строки
$simvols =  ['.' , ','];
$text = str_replace($simvols, '', $text);
#Удаление лишних пробелов и табуляции
$text = preg_replace('/\s+/', ' ', $text);
#Все буквы в нажний регистр  
$text = mb_strtolower($text);
#Прелобразование строки в массив
$arrayWord = explode(" ", $text);
#Удаление из массива повторяющихся значений
$arrayWord = array_unique($arrayWord);

$index = rand(5,15);
for ($j = 0; $j < $index; $j++){
    $comment .= $arrayWord[rand(0, count($arrayWord))];
        if($j!=$index-1){
            $comment .= ' ';
        }
}

#Первая буква заглавной
if (!function_exists('mb_ucfirst') && extension_loaded('mbstring'))
{
	function mb_ucfirst($comment, $encoding='UTF-8')
	{
		$comment = mb_ereg_replace('^[\ ]+', '', $comment);
		$comment = mb_strtoupper(mb_substr($comment, 0, 1, $encoding), $encoding).
			   mb_substr($comment, 1, mb_strlen($comment), $encoding);
		return $comment;
	}
}
echo "<b>Коментарий:</b><br>". mb_ucfirst($comment); 
