<?php

//авторизация
/*
function checkAuth(?string $login, ?string $pass): bool
{
    if ($login === null || empty($login)) {
       return false;
   }

   static $userArr = [
       'admin' => 'admin',
       'user' => 'qwerty',
   ];
   if (!isset($userArr[$login])) {
       return null;
   }

   return $userArr[$login] === $pass;
}

$isAuth = false; 
if (isset($_POST['login'])) {
   $isAuth = checkAuth($_POST['login'], $_POST['Password']);
   if ($isAuth) {
       $_SESSION['user'] = $_POST['login'];
   }
} elseif (isset($_SESSION['user'])) {
   $isAuth = true;
   //проверка на то что 
   if ($isAuth = !isset($_GET['out'])) {
       $isAuth = false;
       unset ({$_SESSION['user']);}
   }

}
ed($_POST);
ed($_SESSION);
var_dump($isAuth);
*/







function getAuth (?string $login, string $pass)
{
    if($login === null || empty ($login))
    return false;
}

static $userArr = ['asdasd','asdasd','afsafas'];

$login = getAuth();

if (!isset ($userArr['login'])) {
    return null;
}

return $userArr[$login] === $pass;


// Генерация комментария
function genCom()//:array

static $songArr [];
    if (empty($songArr)) {
        $songArr = include "song.php";
        //не дописано
    }

    $textAr = [];
    for ($i= $i; $i,5 ; $i++) {
        $keyWord = array 
    }

    return{
        'text' => implode (glue ' ',$textAr ),
        'date' => date (format: 'H m Y', $time )
        'author' => $songArr ['author'] [array_rand($songArr['author'])]
    }

$commentCont = rand(5,10);
for ($i = 0; $i< $commentCont; $i++) {
    $commentAr[] =generateComment();
}

ed ($commentAr);
$commentAr = array_filter ($commentAr, static function(array $elem) {
    static $boobleArr = [];
    $key = md5 ($elem['text']);
    if () // Недописано
}
)






// Общие моменты
#Навигация
$goods = 'Изделия';
$categories = 'Категории';
#Титульник страницы
$titleListGoods = 'Изделия ручной работы';

// генерация комментария (в пизду блядь, рпзберусь с этим грёбанным массивом позже)

$comments = ['Боже что это?', 'Сколько стоит?', 'Можно мне такую?', 'Возьму за любые деньги.', 'O my god!!!'];
$i = array_rand($comments);
//echo "$comments[$i]<br>";

// Случайный пользователь

$users = ['Admin', 'Сергей', 'Ульяна', 'Иван', 'Алексей', 'Дарья'];
$i = array_rand ($users);
//echo "$users[$i]<br>";

//случайная дата

$DateTime = date('d.m.Y H:i:s', strtotime('-'.rand(0,5000).' day'));
//echo "$DateTime<br>";


   

/*
$word1 = array("Здравствуйте. ", "Привет! ", "Добрый день. ", "Шалом! ");
$rword = array_rand($word1,1);

$word2 = array("Прекрасная работа. ","Потрясающее изделие. ", "Милая вещичка.. ", "");
$rand_keys = array_rand($word2,1);

$word3 = array ("Подарите? :) ", "Сколько стоит?", "Можно мне такую? ", "Возьму за любые деньги. ", "");
$rand_keys = array_rand($word3,1);

$comments = array (array_rand($word1),array_rand($word2),array_rand($word3));
*/
//$comments = array ([$word1],[$word2],[$word3]);
//var_dump($comments);



/*
$word_1 = ["Здравствуйте. ","Привет! ","Добрый день. ","Шалом! "];
$max_mas_W1 = count($word_1, COUNT_RECURSIVE) - 1;
$random_word_1 = rand(0, $max_mas_W1);

$word_2 = ["Прекрасная работа. ","Потрясающее изделие. ", "Милая вещичка.. ", ""];
$max_mas_W2 = count($word_2, COUNT_RECURSIVE) - 1;
$random_word_2 = rand(0, $max_mas_W2);

$word_3 = ["Подарите? :) ", "Сколько стоит?", "Можно мне такую? ", "Возьму за любые деньги. ", ""];
$max_mas_W3 = count($word_3, COUNT_RECURSIVE) - 1;
$random_word_3 = rand(0, $max_mas_W3);

$comments = $word_1 [$random_word_1] . $word_2 [$random_word_2] . $word_3 [$random_word_3];
*/


/*
$word1 = ["Здравствуйте. ", "Привет! ", "Добрый день. ", "Шалом! "];
$word2 = ["Прекрасная работа. ","Потрясающее изделие. ", "Милая вещичка.. ", ""];
$word3 = ["Подарите?  ", "Сколько стоит?", "Можно мне такую? ", "Возьму за любые деньги. ", ""];


$comments = [($word1), ($word2), ($word3)];

foreach ($comments as $k => $v){
    echo "$k = $v<br>";
        foreach ($v as $kk => $vv){
          echo "$kk =$vv <br>";
        }
}
*/





//случайная дата
/*
function DateTime() 
{
    $year = 2018 + rand(0,3);
    $month = rand(1,12);
    $day = rand(1,31);
   return "{$year}-{$month}-{$day}";
}

echo date('d-m-y H:i:s');

*/

//$DateTime = date('d.m.Y H:i:s', strtotime('-'.rand(0,5000).' day'));
//    echo $DateTime;

/*
    function genDate()
{
    $timestamp = rand(strtotime("Jan 01 2020"), strtotime("Feb 04 2021"));
    return date("d M Y", $timestamp);
}

*/