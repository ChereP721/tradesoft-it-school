<?php

// загрузка картинки

var_dump($_FILES);

if (isset($_FILES) && !empty($_FILES)) {
    $target = "images/image1.jpg";
    move_uploaded_file($_FILES["image"]["tmp_name"], $target);
}




?>