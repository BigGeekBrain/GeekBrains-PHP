<?php
/*3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.*/

$a = 9;
$b = 4;
function sum ($a, $b) {
    return $a + $b;
}
function subtraction ($a, $b) {
    return $a - $b;
}
function multiplication ($a, $b) {
    return $a * $b;
}
function divide ($a, $b) {
    return $a / $b;
}

echo ("Сумма "), sum ($a, $b), ("<br>");
echo ("Вычитание "), subtraction ($a, $b), ("<br>");
echo ("Умножение "), multiplication ($a, $b), ("<br>");
echo ("Разделить "), divide ($a, $b), ("<br>");

?>