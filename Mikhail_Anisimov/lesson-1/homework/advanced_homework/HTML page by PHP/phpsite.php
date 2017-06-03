 <!DOCTYPE html>
<?php 


$pages = [ [ 'title' => 'Первая страница', 'body' => 'Первый тест' ], 
           [ 'title' => 'Вторая страница', 'body' => 'Второй тест' ] ];  // массив, содержащий количество  страниц и их содержание


$page_id = isset( $_REQUEST['id'] ) ? (int) $_REQUEST['id'] : 0;         // Проверка, есть ли значение id, если да, то сохраняем его в переменной $page_id, если нет, то сохраняем 0.
if (!isset ( $pages [$page_id]) ) $pages_id = 0;   // Проверка, что есть такая страница    
$page = $pages[$page_id];    // Заносим массив с данными требуемой страницы


 ?>

 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title><?= $page['title'] // Выводим заголовок ?></title>   
 </head>
 <body>
 	<a href="?id=0">Главная</a>
 	<a href="?id=1">Вторая</a>
 	<?= $page['body']; // Выводим тело ?>
 </body>
 </html>