<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fourth exercise</title>
</head>
<body>
<div>
	<h2>Задание 4 (advanced)</h2>
	<p style="width: 50%"><b>Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).</b><br>
	Написать функцию транслитерации строк.
	</p>
	<hr>
</div>
	<?php

		function transliter($input_str) {
			$translit = ['а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shch', 'ъ' => '\'', 'ы' => 'y', 'ь' => '\'', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya'];

			$i = 0;
			$result = '';
			$input_str = mb_strtolower($input_str);

			while ( $i <= strlen($input_str) ) {
				$ok = 0;
				$word = substr($input_str, $i, 2 );
				foreach ($translit as $rus => $eng) {
					if ( $word === $rus ) {
						$result .= $eng;
						$ok = 1;
					}
					if ( $ok === 1 ) {
						break;
					}
				}
				if ( $ok === 1 ) {
					$i += 2;
				} else {
					$result .= substr($input_str, $i, 1 );
					$i += 1;
				}
			}
			return $result;
		}

		$input_string = 'Привет! Как дела?';

		echo transliter($input_string);

	?>
</body>
</html>