<?php
    $title = 'html-php';
    $h1 = 'Тирлим-бом-бом';


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
    <p>Copyright &copy; 2010-<?php date_default_timezone_set('Europe/Kaliningrad');echo date("Y");?></p>

</body>
</html>
