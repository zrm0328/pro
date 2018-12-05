<?php
header("content-type:text/html;charset=utf8");
function GetUglyNumber_Solution($index)
{
	while ($index%2==0) 
	{
		$index = $index/2;
	}
	while ($index%3==0) 
	{
		$index = $index/3;
	}
	while ($index%5==0) 
	{
		$index = $index/5;
	}
	if ($index == 1) 
	{
		echo "丑数";
	}
	else
	{
		echo "非丑数";
	}
}
$num = GetUglyNumber_Solution(26);
echo $num;


?>