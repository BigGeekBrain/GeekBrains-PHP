/*
7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:

22 часа 15 минут
21 час 43 минуты
*/

<?php
echo date('h:i') . " UTC" . '<br>';
$hour = date('h');
$minutes = date('i');

//----hours-----//
if (($hour == 1 || $hour == 21)
        ) {
            $hourNow = $hour . " час ";
    } elseif ( ($hour > 1 && $hour < 5) ||
             ($hours > 21 && $hour < 25) ){
        $hourNow = $hour . " часа " ;
    } elseif ( $hour >= 5 && $hour < 21 || $hour == 0){
        $hourNow = $hour. " часов ";
    }
    echo $hourNow;
    
//----minutes----//
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
    echo $minutesNow;
?>