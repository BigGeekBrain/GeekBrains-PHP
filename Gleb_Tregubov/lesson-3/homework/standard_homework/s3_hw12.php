<?php

echo 'Задание №1' . "<br><br>";
//--------Выведем числа от 0 до 100, делящиеся на 3 без остатка.-------//
 while($i < 100) {
     $i++;
     if ($i % 3 === 0){
         echo $i . "<br>";
     }
  }
  echo "<br><br>";
//--------Конец вывода-------//

echo 'Задание №2' . "<br><br>";
//--------Выведем числа от 0 до 10-------//
$i = 0;
echo $i . ' - Это ноль' . "<br>";
do {
    $i++;
    if ($i % 2 == 0){
        echo $i . ' - Четное' . "<br>";
    } else {
        echo $i . ' - Нечетное' . "<br>";
    }
} while ($i < 10);
echo "<br><br>";
//--------Конец вывода-------//

echo 'Задание №3' . "<br><br>";
//--------Выведем числа от 0 до 10-------//