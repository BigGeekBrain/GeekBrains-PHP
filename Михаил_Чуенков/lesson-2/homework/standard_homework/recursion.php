<?php
/**С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.*/
$val = 8;
$pow = -3;
function recursion ($val, $pow) {
    if($pow == 0){
    return 1;
    }
    else if($pow < 0){
    return recursion( 1/$val, -$pow); 
  }
    else return $val * recursion ($val, $pow - 1); // Скажите, почему здесь $val умножается на $val, а не на $pow - 1 ?   
}
echo ("Возведение в степень "), recursion ($val, $pow);

?>