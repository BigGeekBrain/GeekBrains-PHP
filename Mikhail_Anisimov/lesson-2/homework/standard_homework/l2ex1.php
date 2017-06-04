<!DOCTYPE html>

<?php 

/*1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:

если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;*/

$a = $_GET['a'];
$b = $_GET['b'];


?>

<html>
<head>
	<title></title>
</head>
<body>

<form action="l2ex1.php">

	<input type="text" name="a" placeholder="Введите первое число">
	<input type="text" name="b" placeholder="Введите второе число">
	<button>Посчитать</button>
</form>

	<?php if ( ( $a >= 0 ) && ( $b >= 0 )): ?>
	<div> Результат: <?php $c = $a - $b; 
	echo "$a - $b = $c"  ?> </div>

	<?php elseif ( ($a < 0 ) && ( $b < 0 )): ?>
		<div> Результат: <?php $c = $a * $b; 
	echo "$a * $b = $c"  ?> </div>

	<?php else : ?>
		<div> Результат: <?php $c = $a + $b; 
	echo "$a + $b = $c"  ?> </div>

	<?php endif ?>

</body>
</html>

