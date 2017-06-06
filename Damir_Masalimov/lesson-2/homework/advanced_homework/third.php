<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Third exercise</title>
</head>
<body>
<div>
	<h2>Задание 3 (advanced)</h2>
	<p style="width: 50%">Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.</p>
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

		echo 'Операнд 1: ' . $operandA . '<br>';
		echo 'Операнд 2: ' . $operandB . '<br><br>';

		$resultSumm=summ($operandA, $operandB);
		$resultDiff=diff($operandA, $operandB);
		$resultMult=mult($operandA, $operandB);
		$resultDiv=div($operandA, $operandB);
		echo 'Сумма: ' . $resultSumm . '<br>';
		echo 'Разность: ' . $resultDiff . '<br>';
		echo 'Умножение: ' . $resultMult . '<br>';
		echo 'Деление: ' . $resultDiv . '<br>';
	?>
</body>
</html>