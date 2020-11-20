<?php

/* обработчик формы:
   1. мультизагрузка файлов происходит из формы
   2. при загрузке проверяются на существование директории
   3. директории формируются по расширению имени, 
      т.е. файл с именем readme.txt будет загружен в:
      "uploads\txt\readme.txt"
   4. при наличии в директории файла с таким же именем 
      рекурсивно формируется новое имя: 
	  "uploads\txt\readme(1-100).txt","uploads\txt\readme(1)(1-100).txt" и т.д.
*/

function renameDublicate(string $old):string
{
	$ar_new = pathinfo($old);	
	
	if (! file_exists($old)) {		
		return $old;		
	} else {
		$old = $ar_new['dirname'].'\\'.$ar_new['filename'].'('.rand(1,100).').'.$ar_new['extension'];
		return renameDublicate($old);		
	}
};

function formAdd ():void
{
	$form_tmpl ='
	<form method="POST" name="u_add" action="" enctype="multipart/form-data">
	<div class="f_item">
		<label for="f_author">Автор</label>
		<input type="text" id="f_author" name="u_name" required>
	</div>
	<div class="f_item">
		<label for="f_mail">E-mail</label>
		<input type="text" id="f_mail" name="u_mail">
	</div>
	<div class="f_item">
		<label for="f_pic">Иллюстрация</label>
		<input multiple="multiple" type="file" id="f_pic" name="u_pic[]">
	</div>
	<div class="f_item">
		<label for="f_text">Текст публикации</label>
		<textarea name="u_txt" id="f_text"></textarea>
	</div>
	<div class="f_item">
		<input name="f_send" type="submit" value="Добавить публикацию">
	</div>
	</form>';
	
if (isset($_POST['u_name'])) 
{
	if (isset($_FILES['u_pic'])) 
	{
		$files = $_FILES['u_pic'];
		$countPic = count ($files['name']);
		$tmp_name = '';
		$new_name = '';
		$new_dir = 'upload\\';
		if (! file_exists($new_dir)) { mkdir($new_dir); };
		
		for ($i=0; $i<$countPic; $i++)
			{
				foreach ($files as $j => $value)
					{	
						switch ($j){
							case 'name':
								$new_dir .= pathinfo($value[$i], PATHINFO_EXTENSION);
								if (! file_exists($new_dir)) { mkdir($new_dir); };
								$new_name .= $new_dir.'\\'.$value[$i];								
							case 'tmp_name':
								$tmp_name = $value[$i];				
						}
					};
				if (file_exists($new_name)) { $new_name = renameDublicate($new_name); /* echo 'генерим новое имя:'.$new_name.' <br>'; */};
				move_uploaded_file($tmp_name, $new_name);
				$new_dir = 'upload\\';	
				$new_name = '';				
			};
	echo '<div class="f_item">Ваши файлы загружены!</div>';
	} 
} else echo $form_tmpl;
};

?>