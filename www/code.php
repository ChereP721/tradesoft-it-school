<?php 
$h2Title = 'Some title';

define('MY_DOC_TITLE', 'title from const');

$h3title='3 title';

$viewcount=0;
$viewcount +=  rand(10,100);

$arrayNames = ["Petya", "Vasya", "Siroja", "Maniasha", "ZlojAdmin"];

function genComment(): string
{
    $string = "";
    $randStringLength = rand(10,300);
    for ($i = 0; $i <= $randStringLength; $i++) {
        $randomCharId = rand(32,122);
        $commentString .= chr($randomCharId);
    }
    return $commentString;
}

function genName(array &$arrayNames): string
{
    $string = $arrayNames[array_rand($arrayNames)];
    if ($string === "ZlojAdmin") { 
        $string .= " (me)";
        } 
    return $string;
}

function genTime(): string
{
    // format 2021-01-02
    $randDate = rand(946674000,time());
    return date("Y-m-d", $randDate);
}