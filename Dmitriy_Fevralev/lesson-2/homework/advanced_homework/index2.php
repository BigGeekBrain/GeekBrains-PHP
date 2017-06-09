<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 

	function calc( $num1, $num2 )
	{
		if($num1 > 0 && $num2 > 0 )
		{
			echo $num1 - $num2;
		}
		elseif($num1 < 0 && $num2 < 0 )
		{
			echo $num1 * $num2;
		}
		else
		{
			echo $num1 + $num2;
		}
	}

calc(0, 10);
 ?>
</body>
</html>