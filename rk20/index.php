<?php
function CountSteps($x,$y)
{
	$arr = [];
	for ($i=0; $i<$x;$i++) 
	{ 
		$arr[$i][0]=1;
		for ($j=0; $j <$y;$j++) 
		{ 
			$arr[0][$j]=1;
			$arr[$i][$j] = $arr[$i-1][$j] +$arr[$i][$j-1];
		}
	}
	return $arr;
}
$arr = array(1,2);
var_dump( CountSteps(2,3));

?>