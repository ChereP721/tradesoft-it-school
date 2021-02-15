<?php

// функция даты
function timeComment() {
    date_default_timezone_set('UTC');
    $time = date('l jS \of F Y h:i:s A');
    echo $time;
}

// функция имени

$user = $_POST["name"];

function nameUserGeneri() {
    $nameUser = "Afthor";
    if ($nameUser) {
        echo "Afthor";
    } else {
        echo "Admin";
    }
}



?>