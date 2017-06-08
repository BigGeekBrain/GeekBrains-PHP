<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fiveth exercise</title>
</head>
<body>
<div>
	<h2>Задание 5 (advanced)</h2>
	<p style="width: 50%"><b>Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.</b><br>
	</p>
	<hr>
</div>
	<?php

	// Готовое решение 
		function replace_space($input_str) {
			return str_replace ( ' ', '_', $input_str);
		}

		function replace_space_hand($input_str) {

			$i = 0;
			$result = '';

			while ( $i <= strlen($input_str) ) {
				$word = substr($input_str, $i, 1 );
				if ( $word !== ' ' ) {
					$result .= $word;
				} else {
					$result .= '_';
				}
				$i++;
			}

			return $result;
		}

		$input_string = 'Привет! Как дела?';

		echo replace_space($input_string);

		echo '<br>';

		echo replace_space_hand($input_string);

	?>
</body>
</html>