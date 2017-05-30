<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>2.1</title>
</head>
<body>
	<?php

	$a = 4;
	$b = -10;

	if ( $a >= 0 && $b >= 0 ) {
		$c = $a - $b;
		echo 'Оба числа положительные, и их разность равна: ' . $c;
	} elseif ( $a <= 0 && $b <= 0 ) {
		$c = $a * $b;
		echo 'Оба числа отрицательные, и их произведение равно: ' . $c;
	} else {
		$c = $a + $b;
		echo 'Числа разных знаков, и их сумма равна: ' . $c;
	}

	?>
</body>
</html>