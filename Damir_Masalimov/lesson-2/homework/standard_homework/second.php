<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>2.2</title>
</head>
<body>
	<h2>Второе задание к уроку №2</h2>
	<p>Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.</p>

	<?php

	$a = 5;
	echo '$a равно ' . "$a <br><br>";

	switch ( $a ) {
		case 0:
			echo "Сейчас a равно $a" . '<br>';
			$a++;
		case 1:
			echo "Сейчас a равно $a" . '<br>';
			$a++;
		case 2:
			echo "Сейчас a равно $a" . '<br>';
			$a++;
		case 3:
			echo "Сейчас a равно $a" . '<br>';
			$a++;
		case 4:
			echo "Сейчас a равно $a" . '<br>';
			$a++;
		case 5:
			echo "Сейчас a равно $a" . '<br>';
			$a++;
		case 6:
			echo "Сейчас a равно $a" . '<br>';
			$a++;
		case 7:
			echo "Сейчас a равно $a" . '<br>';
			$a++;
		case 8:
			echo "Сейчас a равно $a" . '<br>';
			$a++;
		case 9:
			echo "Сейчас a равно $a" . '<br>';
			$a++;
		case 10:
			echo "Сейчас a равно $a" . '<br>';
			$a++;
		case 11:
			echo "Сейчас a равно $a" . '<br>';
			$a++;
		case 12:
			echo "Сейчас a равно $a" . '<br>';
			$a++;
		case 13:
			echo "Сейчас a равно $a" . '<br>';
			$a++;
		case 14:
			echo "Сейчас a равно $a" . '<br>';
			$a++;
		case 15:
			echo "И в итоге \"a\" равно $a";
			break;
	}

	?>

</body>
</html>