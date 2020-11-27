<?php
require_once 'randName.php';
$viewCount = 100 + rand(10, 100);
define('VIEWPORT', 'width-device-width, initial-scale=1.0');
$author = getName($n);
$youName = getName($n);

/*function isYou (string $autor) {
    global $autor;
    func_get_args();
    return $autor === $youName;
}*/



$popularPostCommentNight = '';
if ($viewCount > 150 && (date('H') >= 15 || date('H') < 6)) {
    $popularPostCommentNight = ' Good night! Its you popular post!';
} else $popularPostCommentNight = ' Good day today!'
?>