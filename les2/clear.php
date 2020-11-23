<?php


/* рекурсивный обход директории  и удаление устаревших файлов */

function goDirectory ($dir,$cl_day,$today) 

{
	// echo $dir.'<br>';
	if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
			$p = $dir.$file.'\\';
			if ((is_dir($p)) && ($file !== '.') && ($file !== '..')) { 				
				goDirectory($p,$cl_day,$today);
			};
			if (is_file($dir.$file)) {
				$dAfter = floor((($today - filemtime($dir.$file)) / 60 / 60 / 24 )); // вычисляем сколько дней назад изменен файл
				if ($dAfter >= $cl_day) { 
					unlink($dir.$file); 					
				};
				// echo $file.' - '.$dAfter.' <br>';
			};
        }		
        closedir($dh);
    }
}
};	

function clearUploads ():void
{	
	if (isset($_GET['clear_day']) && ((int) $_GET['clear_day'] >= 0))
	{
		$cl_day = (int) $_GET['clear_day'];		
		$d = "upload\\";
		$today = time();
		goDirectory($d,$cl_day,$today);
	};
};
?>