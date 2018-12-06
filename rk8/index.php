<?php
function LastRemaining_Solution($n, $m)
{
	$arr = range(0,$n-1);
	while (count($arr)>1) 
	{
		for ($i=0;$i<$m;$i++) 
		{ 
			array_push($arr,array_shift($arr));
		}
		array_pop($arr);

	}
	return $arr[0];
}
echo LastRemaining_Solution(10, 10);



?>