<html>
<head>
 <title>Урок №1</title>
 <style>
   h1 {
    font-size: 250%; 
   } 
   span {
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    font-size: 13pt; 
   }
   #top, #main {
	   border: solid grey 1px;
	   margin: 10px 20px;
	   padding: 5px 20px;
   }
   
   #main {
	   border: solid purple 2px;
   }
   
   #main span {
	   margin: 10px 0;
	   display:block;
   }
   
  </style>

</head> 
<body>
<?php

function ny_day() {
	$result = round((strtotime("2020:12:31 23:59:59") - time()) / 60 / 60 / 24);
    return $result; 	
};

function rus_day() {
	$today = "";
	$date_today[] = explode(" ",date("d w m yy"));
	switch ($date_today[0][1]) {
    case "0":
        $today = "Сегодня воскресенье - ".$date_today[0][0].".".$date_today[0][2].".".$date_today[0][3];
        break;
    case "1":
        $today = "Сегодня понедельник - ".$date_today[0][0].".".$date_today[0][2].".".$date_today[0][3];
        break;
    case "2":
        $today = "Сегодня вторник - ".$date_today[0][0].".".$date_today[0][2].".".$date_today[0][3];
        break;
	case "3":
        $today = "Сегодня среда - ".$date_today[0][0].".".$date_today[0][2].".".$date_today[0][3];
        break;
	case "4":
        $today = "Сегодня четверг - ".$date_today[0][0].".".$date_today[0][2].".".$date_today[0][3];
        break;
	case "5":
        $today = "Сегодня пятница - ".$date_today[0][0].".".$date_today[0][2].".".$date_today[0][3];
        break;
	case "6":
        $today = "Сегодня суббота - ".$date_today[0][0].".".$date_today[0][2].".".$date_today[0][3];
        break;
}

	return $today;
};
?>
<div id="wrapper">
<div id="top">
<div id="today">
<?php echo rus_day(); ?>
</div>
<div id="today">
 <h2>До нового года осталось <?php echo ny_day(); ?> суток </h2>
</div>
 <?php 
	$a = "Hello world";
	echo "<h1>".$a."</h1> \n";
	$arr_a = str_split($a);
	//var_dump($arr_a);
	//print_r($arr_a);
	
	foreach ($arr_a as $i => $value) {
		echo '<span id="i_'.$i.'" style="font-size:'.(($i+7)*3) .'pt; color:#'.str_pad(dechex(rand($i, 255)),6, "0", STR_PAD_RIGHT).'">'.$value.'</span>';
	}	

 ?>
 </div>
 <div id="main">
 <span>Форма для теста DOM на JS:</span>
	<form id="m_form" name="main_form">
		<input type="text" name="numb" value="3">
		<input type="button" onclick="btnClick();" value="Жми" name="bt">
	</form>
	<script>
	function btnClick()
        {
            var up1 = "";
			up1 = "i_" + document.main_form.numb.value;
            document.getElementById(up1).style="font-size: 55pt";
			console.log(up1);
        }
</script>
<div id="ex1">
 <?php
  $ab = 5;
  $ab++;
  echo $ab
 ?>
</div>
 </div>
 </div>
 </body>
</html>