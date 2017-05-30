<?php
/*
Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
где $arg1, $arg2 – значения аргументов,
$operation – строка с названием операции.
В зависимости от переданного значения операции выполнить одну из арифметических операций
(использовать функции из пункта 3)
и вернуть полученное значение (использовать switch).
 */

function mathOperation($a, $b, $operation)
{
    switch ($operation) {
        case 'add':
            return $a + $b;
            break;

        case 'subs':
            return $a - $b;
            break;

        case 'mult':
            return $a * $b;
            break;

        case 'dev':
            return $a / $b;
            break;

        default:
            echo 'Введена неверная команда';
            break;
    }
}

echo mathOperation(3, 4, 'add') . "<br>";
echo mathOperation(3, 4, 'subs') . "<br>";
echo mathOperation(3, 4, 'mult') . "<br>";
echo mathOperation(3, 4, 'dev');
