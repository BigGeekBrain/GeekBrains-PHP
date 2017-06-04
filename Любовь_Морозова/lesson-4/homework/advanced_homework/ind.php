<?php
$dir = 'img/';
$cols = 3;
$files = scandir($dir);
echo '<table>';
$k = 0;
for ($i = 0; $i < count($files); $i++) {
    if (($files[$i] != ".") && ($files[$i] != "..")) {
        if ($k % $cols == 0) echo "<tr>";
        echo "<td>";
        $path = $dir.$files[$i];
        echo "<a href='$path'>";
        echo "<img src='$path' alt='' width='100' />";
        echo "</a>";
        echo "</td>";
        if ((($k + 1) % $cols == 0) || (($i + 1) == count($files))) echo "</tr>";
        $k++;
    }
}
echo "</table>";
