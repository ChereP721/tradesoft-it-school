<?php

/* обработчик формы

*/

function formAdd ():void
{
	$form_tmpl ='
	<form method="POST" name="u_add" action="" enctype="multipart/form-data">
	<div class="f_item">
		<label for="f_author">Автор</label>
		<input type="text" id="f_author" name="u_name">
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
	
if (isset($_POST['u_mail'])) {
	
	if (isset($_FILES['u_pic'])) {
    $files = $_FILES['u_pic'];
	$countPic = count ($files['name']);
	
	$tmp_name = '';
	$new_name = 'upload\\';
	
	for ($i=0; $i<$countPic; $i++)
		{
			foreach ($files as $j => $value)
			{	
				switch ($j){
					case 'name':
						$new_name .= $value[$i];
					case 'tmp_name':
						$tmp_name = $value[$i];				
				}
			};
			move_uploaded_file($tmp_name, $new_name);

			$new_name = 'upload\\';			
		};
	
    echo '<div class="f_item">Ваши файлы загружены!</div>';
} 
}else echo $form_tmpl;
};

?>