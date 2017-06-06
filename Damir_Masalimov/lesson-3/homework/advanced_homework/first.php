<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sixth exercise</title>
</head>
<body>
<div>
	<h2>Задание 6 (advanced)</h2>
	<p style="width: 50%">*Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:<br>22 часа 15 минут<br>21 час 43 минуты</p>
</div>
	<?php
	
		function time_now() {
			$hours=date('G');
			$minutes=date('i');
			$timeNow=$hours;

			if ($hours === 0 || ($hours >= 5 && $hours <= 20)) {
				$timeNow .= ' часов ';
			} else if ($hours % 10 >= 2 &&  $hours % 10 <= 4) {
				$timeNow .= ' часа ';
			} else {
				$timeNow .= ' час ';
			}

			$timeNow .= $minutes;

			if ($minutes >= 5 && $minutes <= 20) {
				$timeNow .= ' минут';
			} else if (($minutes % 10 >= 5 && $minutes % 10 <= 9) || $minutes % 10 === 0) {
				$timeNow .= ' минут';
			} else if ($minutes % 10 === 2 || $minutes % 10 === 3 || $minutes % 10 === 4) {
				$timeNow .= ' минуты';
			} else {
				$timeNow .= ' минутa';
			}

			return $timeNow;
		}

		echo '<h3 style="color: green">Сейчас ' . time_now() . '</h3>';
			
	?>
</body>
</html>