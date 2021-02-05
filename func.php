<?php

function ed(array $ar){
    echo "<pre>";
    print_r($ar);
    echo "</pre>";
}


$commentAr=[
    'test 1',
    'test 2',
    'test 3',
    'X##!'
];

$commentAr=array_filter($commentAr,
    static function (string $comment):bool{
        return $comment !== 'X##!';
});

ed($commentAr);

function checkComments (array &$commentAr) : void{
    ed(func_get_args());
    $commentAr=array_diff($commentAr, ['X##!']);

}



checkComments($commentAr,1,2);
ed($commentAr);