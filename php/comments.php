<?php
session_start();

$maxSize = 5000000;
$uploadPath = $_SERVER['DOCUMENT_ROOT'].'/tradesoft-it-school/upload/';

if (isset($_POST['btnAddComment'])) {
    if ($_FILES['image']['error']==0){
        if ($_FILES['image']['size'] <= $maxSize){ 
            if (
                $_FILES['image']['type'] == "image/jpg"  ||
                $_FILES['image']['type'] == "image/jpeg" ||
                $_FILES['image']['type'] == "image/png"  ||
                $_FILES['image']['type'] == "image/bmp"  ||
                $_FILES['image']['type'] == "image/gif"
                ) 
                   {
                    $fileName = $_FILES['image']['name'];
                    $type = substr($fileName,strpos($fileName,'.'),strlen($fileName)-1);
                    $newName = md5(uniqid()).$type;
                    $uploadPath.= $typeDir=substr($type,1)."/".date("Y")."/".date("m")."/".date("d")."/";
                        if (!is_dir($uploadPath)) {
                            mkdir($uploadPath, 0777, true);
                        }
                        move_uploaded_file($_FILES['image']['tmp_name'],$uploadPath . $newName);

                  } else {echo "Файл не является изображением";}

        } else { echo "Допустимый размер файла превышен";}
    }        
}
session_destroy(); 
header('Location: /tradesoft-it-school/');
exit;


