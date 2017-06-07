<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>First exercise</title>
</head>
<body>
<div>
	<h2>Задание 1 (advanced)</h2>
	<p style="width: 50%">С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.</p>
</div>
	<?php
	
		$start = 1;
		$finish = 100;

		while ($start <= $finish) {
			$result = ($start % 3 === 0) ? "$start<br>" : '';
			echo $result;
			$start++;
		}
	?>
</body>
</html>