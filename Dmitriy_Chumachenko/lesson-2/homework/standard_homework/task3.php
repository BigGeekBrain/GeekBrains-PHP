/*
3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
*/

<?php
function add($a, $b) {
    return $a + $b;
}
function sub($a, $b) {
    return $a - $b;
}
function mult($a, $b) {
    return $a * $b;
}
function div($a, $b) {
    return $a / $b;
}

echo "a + b = " . add(2, 5) . "<br>";
echo "a - b = " . sub(2, 5) . "<br>";
echo "a * b = " . mult(2, 5) . "<br>";
echo "a / b = " . div(2, 5) . "<br>";

?>