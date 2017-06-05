<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Third exercise</title>
</head>
<body>
<div>
	<h2>Задание 2 (методичка)</h2>
	<p>Сделать небольшую веб-страницу, в которой заголовок задаётся из заранее объявленной переменной, а пользователю, в зависимости от времени суток, отображается приветствие: добрый день, доброе утро, добрый вечер, доброй ночи.</p>
</div>
	<?php
		echo date('l jS \of F Y h:i:s A') . '<br><br>';
		if (date('A') === 'AM') {
			if (date('h') < 3) {
				echo ('Доброй ночи!');
			} else if (date('h') < 9) {
				echo ('Доброе утро!');
			} else {
				echo ('Добрый день!');
			}
		} else if (date('A') === 'PM') {
			if (date('h') < 3) {
				echo ('Добрый день!');
			} else if (date('h') < 9) {
				echo ('Добрый вечер!');
			} else {
				echo ('Доброй ночи!');
			}
		} else {
			echo ('Где-то ошибка((');
		}
	?>
</body>
</html>