<?php
function Sum_Solution($n)
{
	$res = $n;
	$n !==1 && $res=Sum_Solution($n-1)+$n;
	return $res;

}
echo Sum_Solution(100);


?>