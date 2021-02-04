<?php 
$h2Title = 'Some title';

define('MY_DOC_TITLE', 'title from const');

$h3title='3 title';

$viewcount=0;
$viewcount++;

$viewcount--;
$viewcount +=  rand(10,100);

$randStringLength = 0;
$randomCharId = 0;
$string = "";

$arraySize = 5;
$arrayNames = array("Petya", "Vasya", "Siroja", "Maniasha", "ZlojAdmin");


function GenComment() 
{
    $string = "";
    $randStringLength = rand(10,300);
    for ($i = 1; $i <= $randStringLength; $i++) {
        $randomCharId = rand(32,122);
        $commentString .= chr($randomCharId);
    }
    return $commentString;
}

function GenName() 
{
    global $arrayNames, $arraySize;
    $string = $arrayNames[rand(0,$arraySize-1)];
    if ($string === "ZlojAdmin") { $string .= " (me)";} 
    return $string;
}

function GenTime() 
{
    // format 2021-01-02
    $year = 2000 + rand(0,21);
    $month = rand(1,12);
    $monthString = $month < 10 ? "0" . $month :  $month;
    $day = rand(1,31);
    $dayString = $day < 10 ? "0" . $day :  $day;
    return "{$year}-{$monthString}-{$dayString}";
}