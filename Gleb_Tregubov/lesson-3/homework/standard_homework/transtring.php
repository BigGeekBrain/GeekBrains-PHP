<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
function transString($word){
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

$inputWord = preg_split('//u',$word,-1,PREG_SPLIT_NO_EMPTY);
//--------Working peace-------//
foreach ($inputWord as $key => $value) {
    $find = array_search($value,array_flip($translitTable));
    if (empty($find)) {
        echo $value;
    } else {
        echo $find;
    }

}
//--------End of Working peace-------//

}
transString('Жили-были дед с бабой и была у них курочка Ряба.');
echo "<br>";
