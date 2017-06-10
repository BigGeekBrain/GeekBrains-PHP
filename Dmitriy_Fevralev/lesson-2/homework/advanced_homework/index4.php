<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form action="index4.php" method="POST">
	<input type="text" name="num1">
	<input type="text" name="num2">
	<select name="select">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>
	<input type="submit" name="submit">
</form>


	<?php 

	if( isset($_POST['submit']) && !empty( $_POST['num1'] && $_POST['num2'] ) )
	{
		$num1 = strip_tags(trim($_POST['num1']) );
		$num2 = strip_tags(trim($_POST['num2']) );
		$operation = $_POST['select'];

		function calc($num1, $num2, $operation)
		{
			switch ($operation) {
				case '+':
					$result = $num1 + $num2;
					break;
				case '-':
					$result = $num1 - $num2;
					break;
				case '*':
					$result = $num1 * $num2;
					break;
				case '/':
					$result = $num1 / $num2;
					break;
				default:
					echo "Что-то пошло не так!";
			}

			echo $result;

		}

calc($num1, $num2, $operation);
	

	}



	 ?>
</body>
</html>