<?php
//функции для работы с отладкой кода
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

    $title = 'WD';
    $h1 = 'Очень Жесткие диски';
    $pages = [
   0 => ['title' => 'WD', 'h1' => 'Добро пожаловать в городок'],
   1 => ['title' => 'Жесткие диски', 'h1' => 'Подходи, не скупись, выбирай живопись.']
 ];
 $page_id = isset($_REQUEST['id']) ? (int) $_REQUEST['id'] : 0; //Если существует запрос по id, то
 //привести его к целому числу, в противном случае - 0
 if (!isset($pages[$page_id])){//если не существует переменная $page_id в массиве $pages, тогда $page_id = 0
     $page_id = 0;
  }
 //проверим что такая страница есть - если нет - 0 по умолчанию
 $page  = $pages[$page_id];
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta lang="en">
    <meta charset="utf-8">
    <title><?= $page['title']?></title>
</head>
<body>
    <h1><?= $h1?></h1>
    <a href="?id=0">Главная</a>
    <a href="?id=1">Вторая</a>

    <p>
        <?= $page['h1'];?>
    </p>
     <p>Copyright &copy; 2010-<?php date_default_timezone_set('Europe/Kaliningrad');echo date("Y");?></p>
</body>
</html>
