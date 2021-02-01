<?php
define('MY_DOCUMENT_TITLE','Document title for this project');
$chars='abcdefghijklmnopqrstuvwxyz';
$countChars=strlen($chars);
$adminName='Admin';
$viewCount=10;
$h2Title = 'My best second title';
$randomDateComment='';
$randomDateISO='';


function generateWord($wordLength, $firstUp=true): string{
    $word='';
    global $chars;
    global $countChars;
    for($i=0;$i<$wordLength;$i++){
        $randChar=$chars[mt_rand(0,$countChars)];
        $word.= ($firstUp==true && $i==0) ? strtoupper($randChar) : $randChar;
    }

    return $word;
}

function generatePhraze($countWord) : string{
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
    return ($i==0) ? $adminName.'(Админ)' : generateWord(mt_rand(3,7));

}

//datetime="2013-03-14T20:28:57">March 14, 2013<
$timestamp = mt_rand( strtotime("Jan 01 1990"), time());
$randomDateISO = date("c", $timestamp );
$randomDateComment = date("F d, Y", $timestamp );




//echo generateWord(mt_rand(3,9));

//echo generatePhraze(mt_rand(5,10));

//exit;
