<?php
//функции для работы с отладкой кода
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

    $title = 'html-php';
    $h1 = 'Новые штучки-дрючки';
    $a=1;
    $b=2;
    if( $a = 1 && $b = 2 ){
        $a = 2;
        $b = 1;
    }
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta lang="en">
    <meta charset="utf-8">
    <title><?= $title?></title>
</head>
<body>
    <h1><?= $h1?></h1>
    <p>
        <?= 'Переменная $а: ' . $a . "<br>" . ' Переменная $b: ' . $b;?>
    </p>
     <p>Copyright &copy; 2010-<?php date_default_timezone_set('Europe/Kaliningrad');echo date("Y");?></p>
</body>
</html>
