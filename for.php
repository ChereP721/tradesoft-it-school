<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>конфликт</title>
</head>
<body>
<?php
$numbers = array( 10 , 20 , 30 ) ;
$i = 0;
<<<<<<< HEAD
for ($i=0; $i < 3; $i++)
{
  echo "<dd>$i = $numbers[$i]";
=======
$s = 0;
for ($i=0; $i < 3; $i++)
{
  echo "<dd>$i = $numbers[$i]";
  $s+=$numbers[$i];
  echo "<dt>сумма  = $s";
>>>>>>> d.v.sayakhova-feature/conflict
}
?>
</body>
</html>