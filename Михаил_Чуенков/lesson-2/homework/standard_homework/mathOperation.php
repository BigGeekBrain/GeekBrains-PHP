<?php
/*4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).*/
$arg1 = 9;
$arg2 = 4;
function mathOperation ($arg1, $arg2, $operation) {
    if ($operation == 'сумма'){
    return $arg1 + $arg2;
    }
    if ($operation == 'вычитание'){
    return $arg1 - $arg2;
    }
    if ($operation == 'умножение'){
    return $arg1 * $arg2;
    }
    if ($operation == 'разделить'){
    return $arg1 / $arg2;
    }
}
echo ("Сумма "), mathOperation ($arg1, $arg2, 'сумма'), ("<br>");
echo ("Вычитание "), mathOperation ($arg1, $arg2, 'вычитание'), ("<br>");
echo ("Умножение "), mathOperation ($arg1, $arg2, 'умножение'), ("<br>");
echo ("Разделить "), mathOperation ($arg1, $arg2, 'разделить'), ("<br>");

?>