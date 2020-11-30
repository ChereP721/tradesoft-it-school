<?php
function ed($value): void
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

function randomWord(int $size = 8): string
{
    $returnValue = '';

    for ($i = 0; $i < $size; $i++) {
        $genRandom = 48;
        switch (rand(0, 2)) {
            case 0:
                $genRandom = rand(48, 57);
                break;
            case 1:
                $genRandom = rand(65, 90);
                break;
            case 2:
                $genRandom = rand(97, 122);
                break;
        }

        $returnValue .= chr($genRandom);
    }

    return $returnValue;
}
//if (in_array($string, $existsSongStringAr, true)) {
//    return getRandomString($level + 1);
//}