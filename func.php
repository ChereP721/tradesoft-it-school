<?php

function ed (array $a) : void {
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}

function clearDir(string $dir, $listDir=array(), callable $debugFunction): array{
    if(!$resDir=opendir($dir)){
        return null;
    }

    while( false !== ($file = readdir($resDir))) {
        if($file ==='.' || $file === '..') {
            continue;
        }
        $fileName = $dir . DIRECTORY_SEPARATOR . $file;

        if (is_dir($fileName)) {
           $listDir=clearDir($fileName, $listDir, $debugFunction);
        }
        else {
            $listDir[]=$fileName;
        }

        $debugFunction($fileName);
    }

    return $listDir;
}

/*
 * input: Дата в формате для strtotime
 * По умолчанию: -1 неделя.
 */
function delOldFile(string $dir, string $oldDate='') : void {
    $oldDate = $oldDate==='' ? '-1 week' : $oldDate;

    if (($timestamp = strtotime($oldDate)) !== false) {
        //echo $timestamp."<Br>";
        clearDir($dir, [],function ($fileName) use ($timestamp) {
            if(is_file($fileName)) {

                $fp = fopen($fileName, "r");
                $fstat = fstat($fp);
                fclose($fp);
                if ($fstat['mtime'] <= $timestamp) {
                    // unlink($fileName); // Для отладки
                    echo "del - ";
                }
                echo $fileName . "<Br>";
            }
        });
    }
}

// Для отладки
//delOldFile(__DIR__.DIRECTORY_SEPARATOR.'images');
//exit;
