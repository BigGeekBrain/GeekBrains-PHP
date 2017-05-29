<?php
// *С помощью рекурсии организовать функцию возведения числа в степень.
// Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
echo 'Задание №6' . "<br><br>";
//--------Функция возведения в степень-------//
function power( $val, $pow ){

    if ($pow >= 2){
        return $val * power( $val, ($pow -1) );
    }else if ( $pow = 1 ){
        return $val;
    }else if ( $pow = 0 ){
    		return 1;
    }

}
echo power( 2, 10). "<br><br>";

//*Написать функцию, которая вычисляет текущее время и возвращает его в
//формате с правильными склонениями, например:
//22 часа 15 минут или 21 час 43 минуты
echo 'Задание №7' . "<br><br>";


$age = 1496016000 + 21*3600 + 1*360;

function times($age){

    //date_default_timezone_set("Europe/Kaliningrad");
//--------Проверяем работу ф-ии, вводя собственные данные-------//
    if (empty($age)){
    $hours = date("H");
    $minutes = date("i");
    } else{
    $hours = date("H", $age);
    $minutes = date("i", $age);
    }
//--------Конец блока проверки-------//

//--------Условие для корректного отображения склонения часов-------//
    if (($hours == 1 || $hours == 21)
        ) {
            $hoursNow = $hours. " час ";
    } elseif ( ($hours > 1 && $hours < 5) ||
             ($hours > 21 && $hours < 25) ){
        $hoursNow = $hours. " часа " ;
    } elseif ( $hours >= 5 && $hours < 21 || $hours == 0){
        $hoursNow = $hours. " часов ";
    }
    //echo $hoursNow;
//--------Конец условия для часов-------//

//--------Условие для корректного отображения склонения минут-------//
//попробовать через остаток заменить кучу условий
    if ($minutes == 1 ||
        $minutes == 21 ||
        $minutes == 31 ||
        $minutes == 41 ||
        $minutes == 51 ) {
        $minutesNow = $minutes . "минута";
    } elseif ( ($minutes > 1 && $minutes < 5) ||
               ($minutes > 21 && $minutes < 25) ||
               ($minutes > 31 && $minutes < 35) ||
               ($minutes > 41 && $minutes < 45) ||
               ($minutes > 51 && $minutes < 55)){
        $minutesNow = $minutes . " минуты ";
    } elseif ( ($minutes > 4 && $minutes < 21) ||
               ($minutes > 24 && $minutes < 31) ||
               ($minutes > 34 && $minutes < 41) ||
               ($minutes > 44 && $minutes < 51) ||
               ($minutes > 54 && $minutes < 61) ||
               $minutes == 00){
        $minutesNow = $minutes . " минут ";
    }
    //echo $minutesNow;
//--------Конец условия для минут-------//

//--------Склеиваем всё вместе-------//
    echo "Сегодня в Калининграде " . $hoursNow . $minutesNow;
}
//--------Конец склеивания-------//

echo times() . "<br><br>";//выводим ф-ию от timestamp

//--------Проверяем циклом, что все склонения отрабатывают корректно-------//
for($j = 0; $j < 24; $j++){
    for ($i = 0; $i < 60; $i++)
    {
    $age = 1496016000 + $j*3600 +$i*60;
    echo times($age) . "<br>";
    }
}
//--------Конец проверки-------//
