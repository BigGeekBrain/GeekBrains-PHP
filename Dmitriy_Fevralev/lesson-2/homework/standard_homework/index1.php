<!DOCTYPE html>
<html lang="en">
<?php 

	function hello() {
		
		$times = Date("G");
	

		if( ($times >= 5) && ($times <= 10) )
			{
				$now = 'Доброе утро, сейчас '.$times.' утра!';
			}
		elseif( ($times >= 11) && ($times <= 19) )
			{
				$now = 'Добрый день, сейчас '.$times.' дня!';
			}
		elseif( ($times >= 20) && ($times < 5) )
			{
				$now = 'Доброй вечер, сейчас '.$times.' ночи!';
			}

		echo $now;		
	}	

hello();

 ?>
<head>
	<meta charset="UTF-8">
	<title><?=hello();?></title>
</head>
<body>
	
<?php 
	
	function echoNum( $num )
	{
		while( $num >= 0 )
		{
			if( $num !== 0 )
			{
				echo $num."-";
			}
			else {
				echo $num;
			}
			$num--;
		}
	}

	echoNum(250);
?>

</body>
</html>