<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Eightth exercise</title>
</head>
<body>
<div>
	<h2>Задание 8 (advanced)</h2>
	<p style="width: 50%"><b>*Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».</b><br>
	</p>
	<hr>
</div>
	<?php
	
		$region = [];

		$region['Московская область'] = ['Москва', 'Королев', 'Мытищи', 'Зеленоград'];
		$region['Ленинградская область'] = ['Санкт-Петербург', 'Пушкин', 'Кронштадт', 'Всеволожск', 'Павловск'];
		$region['Рязанская область'] = ['Рязань', 'Касимов', 'Ряжск'];
		$region['Ярославская область'] = ['Ярославль', 'Переславль-Залесский', 'Рыбинск'];
		$region['Калужская область'] = ['Калуга', 'Обнинск'];

		foreach ($region as $name_region => $cities) {
			echo '<br><br>' . $name_region . ':<br>';
			foreach ($region[$name_region] as $key => $city) {
				if (substr($city, 0 , 2) === 'К') {
					echo $city . ' ';
				}
			}
		}

	?>
</body>
</html>