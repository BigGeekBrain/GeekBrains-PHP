<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fourth exercise</title>
</head>
<body>
<div>
	<h2>Задание 4 (advanced)</h2>
	<p style="width: 50%">Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).</p>
</div>
	<?php
	$operandA=5;
	$operandB=10;

		function summ($operand1, $operand2)
		{
			return $operand1 + $operand2;
		}
		function diff($operand1, $operand2)
		{
			return $operand1 - $operand2;
		}
		function mult($operand1, $operand2)
		{
			return $operand1 * $operand2;
		}
		function div($operand1, $operand2)
		{
			return $operand1 / $operand2;
		}
		function mathOperation($arg1, $arg2, $operation)
		{
			switch ( $operation ) {
				case '+':
					return summ($arg1, $arg2);
					break;
				case '-':
					return diff($arg1, $arg2);
					break;
				case '*':
					return mult($arg1, $arg2);
					break;
				case '/':
					return div($arg1, $arg2);
					break;
			}
		}

		echo 'Операнд 1: ' . $operandA . '<br>';
		echo 'Операнд 2: ' . $operandB . '<br><br>';

		$resultSumm=mathOperation($operandA, $operandB, '+');
		$resultDiff=mathOperation($operandA, $operandB, '-');
		$resultMult=mathOperation($operandA, $operandB, '*');
		$resultDiv=mathOperation($operandA, $operandB, '/');
		echo 'Сумма: ' . $resultSumm . '<br>';
		echo 'Разность: ' . $resultDiff . '<br>';
		echo 'Умножение: ' . $resultMult . '<br>';
		echo 'Деление: ' . $resultDiv . '<br>';
	?>
</body>
</html>