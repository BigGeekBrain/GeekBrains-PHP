<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
function stringChange($stroka){
$characterTable = [
    '_' => ' '
];

$inputStroka = preg_split('//u',mb_strtolower($stroka),-1,PREG_SPLIT_NO_EMPTY);

foreach ($inputStroka as $key => $value) {
    $find = array_search($value, $characterTable);
    if (empty($find)) {
            echo $value;
        } else {
            echo $find;
        }
}
}
stringChange('Жили-были дед с бабой и была у них курочка Ряба.');
echo "<br>";
stringChange('Трави бобров по всей земли, трави бобров другим во благо.');
