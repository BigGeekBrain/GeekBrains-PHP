<?php $regions = [
    'Московская область:' => [
        'Москва',
        'Зеленоград',
        'Клин'
                    ],
    'Ленинградская область:' => [
        'Санкт-Петербург',
        'Всеволожск',
        'Павловск',
        'Кронштадт'
                    ],
    'Рязанская область:' => [
        'Рязань',
        'Рыбное',
        'Захарово'
                          ],

]; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Регионы России</title>
</head>

<body>
    <h1>Названия городов-регионов.</h1>
    <ul>
        <?php foreach ($regions as $area => $area2):?>
        <li><?php echo $area ; ?>
            <ul>
            <?php foreach ($area2 as $city):?>
                <li ><?php echo $city ; ?>
                </li>
                <?php endforeach; ?>
            </ul>


        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>
