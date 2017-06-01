<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
function transString($word){
//наша БД
$translitTable = [
    'а'=> 'a',
    'б'=> 'b',
    'в'=> 'v',
    'г'=> 'g',
    'д'=> 'd',
    'е'=> 'e',
    'ё'=> 'yo',
    'ж'=> 'gy',
    'з'=> 'z',
    'и'=> 'i',
    'й'=> 'y',
    'к'=> 'k',
    'л'=> 'l',
    'м'=> 'm',
    'н'=> 'n',
    'о'=> 'o',
    'п'=> 'p',
    'р'=> 'r',
    'с'=> 's',
    'т'=> 't',
    'у'=> 'u',
    'ф'=> 'f',
    'х'=> 'h',
    'ц'=> 'c',
    'ч'=> 'ch',
    'ш'=> 'sh',
    'щ'=> 'shj',
    'ъ'=> '\'\'',
    'ы'=> 'ji',
    'ь'=> '\'',
    'э'=> 'ee',
    'ю'=> 'yu',
    'я'=> 'ya',
    ' ' => '_'

];

//$inputWord принимает строку из $word, преобразует символы строки в нижний регистр - mb_strtolower(),
//разбивает на эл-ты массива - preg_split(...,-1,PREG_SPLIT_NO_EMPTY), всё это в utf-8 - '//u'
$inputWord = preg_split('//u',mb_strtolower($word),-1,PREG_SPLIT_NO_EMPTY);

//из массива $inputWord получаем ключи и значения
foreach ($inputWord as $key => $value) {
    //array_search() по входящим значениям возвращает ключи значений,
    //соответственно, меняем местами ключи и значения в массиве $translitTable - array_flip()
    $find = array_search($value,array_flip($translitTable));
    if (empty($find)) {//если в результате преобразования - в $find - ничего  нет, то оставляем тот
                        //символ из строки, к-ого нет в нашей библиотеке
        echo $value;
    } else {
        echo $find;
    }

}
//--------End of Working peace-------//

}
transString('Жили-были дед с бабой и была у них курочка Ряба.');
echo "<br>";
transString('А у реки, а у реки, а у реки гуляют девки и гуляют мужики.');
echo "<br>";
