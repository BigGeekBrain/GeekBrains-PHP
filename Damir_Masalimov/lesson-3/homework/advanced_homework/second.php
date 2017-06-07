<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Second exercise</title>
</head>
<body>
<div>
	<h2>Задание 2 (advanced)</h2>
	<p style="width: 50%"><b>С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:</b><br>0 – это ноль.<br>1 – нечетное число.<br>2 – четное число.<br>
	3 – нечетное число.<br>…<br>10 – четное число.<br></p><hr>
</div>
	<?php
	
		$start = 0;
		$finish = 10;

		do {
			if ($start === 0) {
				echo $start . ' - это ноль<br>';
				continue;
			}
			$result = $start % 2 ? "$start - нечетное число<br>" : "$start - четное число<br>";
			echo $result;
		} while ($start++ < $finish)
	?>
</body>
</html>