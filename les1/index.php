<html>
<head>
 <title>Урок №1</title>
 <style>
   h1 {
    font-size: 250%; /* Размер шрифта в процентах */ 
   } 
   span {
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    font-size: 21pt; /* Размер шрифта в пунктах */ 
   }
  </style>
</head> 
<body>

 <?php
	$a = "Hello world";
	echo "<h1>".$a."</h1> \n";
	$arr_a = str_split($a);
	//var_dump($arr_a);
	//print_r($arr_a);
	
foreach ($arr_a as $i => $value) {
    echo '<span style="font-size:'.$i*6 .'pt; color:#'.str_pad(dechex($i*19),6, "0", STR_PAD_RIGHT).'">'.$i.' - '.$value.'</span> <br>';
}

 ?>
 
 </body>
</html>