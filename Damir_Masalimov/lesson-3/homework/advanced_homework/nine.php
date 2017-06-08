<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nineth exercise</title>
</head>
<body>
<div>
	<h2>Задание 9 (advanced)</h2>
	<p style="width: 50%"><b>*Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).</b><br>
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
				$letter = substr($input_str, $i, 2 );
				foreach ($translit as $rus => $eng) {
					if ( $letter === $rus ) {
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
					$letter = substr($input_str, $i, 1 );
					if ( $letter === ' ' ) {
						$result .= '_';
					} else {
						$result .= $letter;
					}

					$i += 1;

				}
			}
			return $result;
		}

		$input_string = 'Привет! Как дела? Как проходит занятие?';

		echo transliter($input_string);

	?>
</body>
</html>