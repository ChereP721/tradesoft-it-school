<?php
session_start();

include_once 'func.php';

$commentAr = [];
$thisUrl = explode('?', $_SERVER['REQUEST_URI']);
$thisUrl = $thisUrl[0];


function generateComment() {
    static $songArr =[];  //чтобы подключился файл 1 раз
    if(empty($songArr)){
        $songArr= include('song.php');
    }

    $textAr=[];
    for($i=1;$i<5;$i++){
        $textAr[] = $songArr[$i][array_rand($songArr[$i])];
    }


    return [
        'text' => implode(' ',$textAr),
        'date_cmp' => $time = (time() - rand(0,7*24*3600)),
        'date' =>date ('d.m.Y H:i:s', $time),
        'author' =>$songArr['author'][array_rand($songArr['author'])],
    ];
}

$commentCount = rand(5,10);
for($i=0;$i<$commentCount;$i++){
    $commentAr[]=generateComment();
}

//ed($commentAr);
$commentAr = array_filter($commentAr, static function(array $elem) {
   static $boobleArr=[];

   if(in_array($elem['text'],$boobleArr,1)) {
       return false;
   }

   $boobleArr[] = $elem['text'];

   return true;

});



usort($commentAr, static function(array $a, array $b){
   return $b['date_cmp'] <=> $a['date_cmp'];
});

//ed($commentAr);
//die();



function getAuth(?string $login, string $pass): bool {
    if ($login === null || empty($login)) {
        return false;
    }
    static $userArr = [
        'admin' => 'admin',
        'user' => '123',
    ];

    if (!isset($userArr[$login])) {
        return false;
    }
    return $userArr[$login] === $pass;
}

$isAuth = false;
$userKey = [
    'admin' => md5('admin'),
    'user' => md5('user'),
];

if (isset($_POST['login'])) {
    $isAuth = getAuth($_POST['login'], $_POST['Password']);
    if ($isAuth) {
        $_SESSION['user'] = $_POST['login'];
        setcookie('user', $_POST['login'], time()+60*60*24*30);
        setcookie('key', $userKey[$_POST['login']], time()+60*60*24*30);
   }
} elseif (isset($_SESSION['user'])) {
    $isAuth = true;
    if (isset($_GET['out'])) {   //отправить дополнительных заголовок
        $isAuth = false;
        unset($_SESSION['user']);
        if(!empty($_COOKIE['user']) && !empty($_COOKIE['key'])) {
            setcookie('user', '');
            setcookie('key', '');
        }
    }
} elseif (!empty($_COOKIE['user']) && !empty($_COOKIE['key'])) {
    if ($_COOKIE['key'] === $userKey[$_COOKIE['user']]) {
        $isAuth = true;
        $_SESSION['user'] = $_COOKIE['user'];
    }
}


ed($_POST);
ed($_SESSION);
ed($_COOKIE);
var_dump($isAuth);



//echo json_encode($_REQUEST,true);
//return;

if ($_POST) {
    if (isset($_FILES['file']) && (int)$_FILES['file']['error'] === 0) {

        $filename = microtime() . '_' . $_FILES['file']['name'];
        $filename = explode('.', $_FILES['file']['name']);
        $ext = array_pop($filename);
        $filename = md5(implode('.', $filename)) . '.' . $ext;

        $uploadDir = __DIR__ . DIRECTORY_SEPARATOR . 'images';
        $countFiles=0;
        $thisDir=$uploadDir;

        /*
         * ещё подумаю как найти ближайшую папку, где файлов не больше 5 или создать новую подпапку
         */

        clearDir($uploadDir, [], function($fileName) use (&$countFiles, &$thisDir){
            static $thisDir='';
            static $countFiles=0;

            if(is_file($fileName)){
                $countFiles++;
            }
            if(is_dir($fileName) && $countFiles < 3) {
                $thisDir=$fileName;
                //echo $thisDir." - ".$countFiles."<br>";
                //$countFiles=0;
                return true;
            }
        });
//        echo json_encode($_REQUEST,true);
//        return;
        move_uploaded_file($_FILES['file']['tmp_name'], $thisDir . $filename);
    }
}


//print_r(json_encode($_POST));

define('MY_DOCUMENT_TITLE','Document title for this project');
$chars='abcdefghijklmnopqrstuvwxyz';
$countChars=strlen($chars);
$adminName='Admin';
$viewCount=10;
$h2Title = 'My best second title';
$randomDateComment='';
$randomDateISO='';
//define('LETOV',[0=>''])

function generateWord(int $wordLength, bool $firstUp=true, string $chars='abcdefghijklmnopqrstuvwxyz'): string{
    $word='';
    $countChars=strlen($chars);;
    for($i=0;$i<$wordLength;$i++){
        $randChar=$chars[mt_rand(0,$countChars)];
        $word.= ($firstUp==true && $i==0) ? strtoupper($randChar) : $randChar;
    }

    return $word;
}

function generatePhraze(int $countWord) : string{
    $phraze='';
    for($i=1;$i<=$countWord;$i++){
        $phraze.= ($i==1) ? generateWord(mt_rand(3,9)) : generateWord(mt_rand(3,9),false);
        $phraze.=($i==$countWord) ? '.' : ' ';

    }
    return $phraze;
}

function generateUser() : string{
    global $adminName;
    $i=mt_rand(0,5); // вероятность встретить админка 1:6
    return ($i===0) ? $adminName.'(Админ)' : generateWord(mt_rand(3,7));

}

//datetime="2013-03-14T20:28:57">March 14, 2013<
$timestamp = mt_rand( strtotime("Jan 01 1990"), time());
$randomDateISO = date("c", $timestamp );
$randomDateComment = date("F d, Y", $timestamp );



//для отладки, удалять не буду, чтобы не писать заново :)
//exit;
