/*
6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
*/

<?php
function power( $val, $pow ){

    if ($pow >= 2){
        return $val * power( $val, ($pow -1) );
    }else if ( $pow = 1 ){
        return $val;
    }else if ( $pow = 0 ){
    		return 1;
    }

}
echo power( 3, 3). "<br><br>";

?>