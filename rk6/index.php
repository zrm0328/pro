<?php
function calFn($n,$m)
{
	$num = 0;
	for ($i=0;$i>=$n && $i<=$m;$i++) 
	{ 
		$sum = $i;
		while ($sum!=0) 
		{
			if ($sum%10==1) 
			{
				$num++;
			}
			$sum/=10;
		}
	}
	return $num;
}
$num = calFn(0,10);
echo $num;


?>