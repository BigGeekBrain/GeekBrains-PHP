<?php           // Страница: http://www.vibecity.ru/l2ex6.php

$res = 1;
$a = $_GET['a'];
$b = $_GET['b'];

function power( $vol, $pow ) {
	if ( $pow ) {
		global $res;
		$res *= $vol;
		power ( $vol, $pow-1);
	}
	return $res;
}

?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Рекурсия</title>
	</head>
	<body>
		<p>С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.</p>
		<form action="l2ex6.php">
			<input type="text" name="a" placeholder="Введите первое число">
			<input type="text" name="b" placeholder="Введите второе число">
			<button>Результат</button>
		</form>
		<div>
			 <?php print_r ( $a. " в степени ". $b. " равно: ". power ($a, $b) ) ?>
		</div>
	</body>
	</html>	