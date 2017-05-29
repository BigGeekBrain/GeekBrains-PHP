<?php
// Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
//
// если $a и $b положительные, вывести их разность;
// если $а и $b отрицательные, вывести их произведение;
// если $а и $b разных знаков, вывести их сумму;
echo 'Задание №1' . "<br>";
$a = 8;
$b = 5;
$sum1;
$sum2;
$sum3;

if ($a >= 0 && $b >= 0) {
    echo $sum1 = $a - $b . "<br><br>";
} elseif ($a < 0 && $b < 0) {
    echo $sum2 = $a * $b . "<br><br>";
} elseif ( ($a < 0 && $b > 0) || ($a > 0 && $b < 0)){
    echo $sum3 = $a + $b . "<br><br>";
}


//Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.

echo 'Задание №2' . "<br><br>";
$a = 10;

switch ( $a ) {
    case 0:
      echo 0 . "<br>";

    case 1:
      echo 1 . "<br>";

    case 2:
      echo 2 . "<br>";

    case 3:
      echo 3 . "<br>";

    case 4:
      echo 4 . "<br>";

    case 5:
      echo 5 . "<br>";

    case 6:
      echo 6 . "<br>";

    case 7:
      echo 7 . "<br>";

    case 8:
      echo 8 . "<br>";

    case 9:
      echo 9 . "<br>";

    case 10:
      echo 10 . "<br>";

    case 11:
      echo 11 . "<br>";

    case 12:
      echo 12 . "<br>";

    case 13:
      echo 13 . "<br>";

    case 14:
      echo 14 . "<br>";

    case 15:
      echo 15 . "<br><br>";
      break;
    default:
      echo('Please enter correct value');
      break;
}


// Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
echo 'Задание №3' . "<br><br>";

function addit($a,$b){
    $sum1 = $a + $b;
    return $sum1;
}
function subtract($a,$b){
    $sum2 = $a - $b;
    return $sum2;
}
function multip($a,$b){
    $sum3 = $a * $b;
    return $sum3;
}
function division($a,$b){
    $sum4 = $a / $b;
    return $sum4;
}

echo addit(4, 5) . "<br>";
echo subtract( 4, 5) . "<br>";
echo multip(4, 5) . "<br>";
echo division(4, 5) . "<br><br>";


// Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
// где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от
// переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3)
// и вернуть полученное значение (использовать switch).
echo 'Задание №4' . "<br><br>";
function mathOperation($arg1, $arg2, $operation){
    switch ($operation) {
        case '+':
          return ( $arg1 + $arg2 );
        break;
        case '-':
          return ( $arg1 - $arg2 );
        break;
        case '*':
          return ( $arg1 * $arg2 );
        break;
        case '/':
          return ( $arg1 / $arg2 );
        break;
        default:
        echo 'Please fill in correct value!';
    }
}
echo mathOperation( 2, 10, '/');
