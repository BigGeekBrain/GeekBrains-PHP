<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
function stringChange($stroka){
//наша БД
$characterTable = [
    '_' => ' '
];

//$inputWord принимает строку из $stroka, преобразует символы строки в нижний регистр - mb_strtolower(),
//разбивает на эл-ты массива - preg_split(...,-1,PREG_SPLIT_NO_EMPTY), всё это в utf-8 - '//u'
$inputStroka = preg_split('//u',mb_strtolower($stroka),-1,PREG_SPLIT_NO_EMPTY);

//из массива $inputStroka получаем ключи и значения
foreach ($inputStroka as $key => $value) {
    //array_search() по входящим значениям возвращает ключи значений,
    $find = array_search($value, $characterTable);
    if (empty($find)) {//если в результате преобразования - в $find - ничего  нет, то оставляем тот
                        //символ из строки, к-ого нет в нашей библиотеке
            echo $value;
        } else {
            echo $find;
        }
}
}
stringChange('Жили-были дед с бабой и была у них курочка Ряба.');
echo "<br>";
stringChange('Трави бобров по всей земли, трави бобров другим во благо.');
