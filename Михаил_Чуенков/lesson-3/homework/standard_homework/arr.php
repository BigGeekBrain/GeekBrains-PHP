<?php
/*3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:*/
$val = [
    'Московская область' => [
        'Москва',
        'Зеленоград',
        'Клин',
        ],
    'Ленинградская область' => [
        'Санкт-Петербург',
        'Пушкин',
        'Всеволожск',
        'Кронштадт',
        ],
    ];
    $keys = array_keys ($val);
    $nM = count ($val ['Московская область']);
    $i = 0;
    echo ($keys[0]), (': <br>');
    while ($i < $nM) {
    echo ($val['Московская область'] [$i]), (', ');
    $i++;
};
echo ('<br>');
    $nSPb = count ($val ['Ленинградская область']);
    $i = 0;
    echo ($keys[1]), (': <br>');
    while ($i < $nSPb) {
    echo ($val['Ленинградская область'] [$i]), (', ');
    $i++;
};
?>