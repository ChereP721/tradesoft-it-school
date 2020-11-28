<?php

// Added rand autor
function addRandomAutor($you): string
{
	$autorName = array(
		'Буратино',
		'Чиполлино',
		'Чебурашка',
		'Рик',
	);
	$autor = $autorName[rand(0, count($autorName) - 1)];
	if ($autor === $you) {
		$autor .= ' (This is you)';
	}
	return $autor;
};

// проверка существования имени файла
// function getUniqName($path, $fileName)
// {
// 	$num = 1;
// 	if (file_exists($path . $fileName)) {
// 		while (file_exists($path . $fileName . '_' . $num)) {
// 			$num++;
// 		}
// 		return $fileName . '_' . $num;
// 	} else {
// 		return $fileName;
// 	}
// };

// Upload files
if (isset($_FILES['image'])) {
	$fileName = $_FILES['image']['name'];
	$fileTmp = $_FILES['image']['tmp_name'];

	$fileName = mt_rand(0, 10000) . $fileName;
	move_uploaded_file($fileTmp, "uploads/" . $fileName);
	echo "Файл загружен";
};


// 