<?php

ini_set("display_errors", "1");

/*
4.
Объявить массив, индексами которого являются буквы русского языка,
а значениями – соответствующие латинские буквосочетания
(‘а’ => ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’) .

Написать функцию транслитерации строк.
 */

$arr = [
    'а' => 'a',
    'А' => 'A',
    'б' => 'b',
    'Б' => 'B',
    'в' => 'v',
    'В' => 'V',
    'г' => 'g',
    'Г' => 'G',
    'д' => 'd',
    'Д' => 'D',
    'е' => 'e',
    'Е' => 'E',
    'ё' => 'io',
    'Ё' => 'Io',
    'ж' => 'zh',
    'Ж' => 'Zh',
    'з' => 'z',
    'З' => 'Z',
    'и' => 'i',
    'И' => 'I',
    'й' => 'iy',
    'Й' => 'Iy',
    'к' => 'k',
    'К' => 'K',
    'л' => 'l',
    'Л' => 'L',
    'м' => 'm',
    'М' => 'M',
    'н' => 'n',
    'Н' => 'N',
    'о' => 'o',
    'О' => 'O',
    'п' => 'p',
    'П' => 'P',
    'р' => 'r',
    'Р' => 'R',
    'с' => 's',
    'С' => 'S',
    'т' => 't',
    'Т' => 'T',
    'у' => 'u',
    'У' => 'U',
    'ф' => 'f',
    'Ф' => 'F',
    'х' => 'kh',
    'Х' => 'Kh',
    'ц' => 'ts',
    'Ц' => 'Ts',
    'ч' => 'ch',
    'Ч' => 'Ch',
    'ш' => 'sh',
    'Ш' => 'Sh',
    'щ' => 'shi',
    'Щ' => 'Shi',
    'ъ' => '',
    'ы' => 'i',
    'Ы' => 'Iy',
    'ь' => '',
    'э' => 'ie',
    'Э' => 'Ie',
    'ю' => 'yu',
    'Ю' => 'Yu',
    'я' => 'ia',
    'Я' => 'Ia',
    ' ' => ' ',
];

function translate($text)
{
    global $arr;
    foreach ($arr as $key => $value) {
        $newText = str_replace($key, $value, $text);
        $text    = $newText;
    }
    echo $text . "<br>";
}

translate('Это длинный текст, но я его перевёл в транслит.');
