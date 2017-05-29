<?php
/*
3.
Реализовать основные 4 арифметические операции
в виде функций с двумя параметрами.
Обязательно использовать оператор return.
 */

function add($a, $b)
{
    return $a + $b;
}

function subs($a, $b)
{
    return $a - $b;
}

function mult($a, $b)
{
    return $a * $b;
}

function dev($a, $b)
{
    return $a / $b;
}

echo add(3, 4) . "<br>";
echo subs(3, 4) . "<br>";
echo mult(3, 4) . "<br>";
echo dev(3, 4) . "<br>";
