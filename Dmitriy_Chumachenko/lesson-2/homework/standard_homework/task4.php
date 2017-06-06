/*
4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
*/
<?php
function mathOperation($a, $b, $operation) {
    switch ($operation) {
        case '+':
            return $a + $b;
            break;

        case '-':
            return $a - $b;
            break;

        case '*':
            return $a * $b;
            break;

        case '/':
            return $a / $b;
            break;

        default:
            echo 'Введена неверная команда';
            break;
    }
}

echo mathOperation(3, 6, '+') . "<br>";
echo mathOperation(3, 6, '-') . "<br>";
echo mathOperation(3, 6, '*') . "<br>";
echo mathOperation(3, 6, '/');

?>