<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

		function recursion($num, $pow)
		{			
			if($pow == 0)
			{
				return 1;
			}
			return $num * recursion($num, $pow - 1);

		}

$result = recursion(3,3);
echo $result;



	 ?>
</body>
</html>