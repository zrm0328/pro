<?php
function Add($num1, $num2)
{
	while ($num2!=0) 
	{
		$tmp = $num1^$num2;
		$num2 = ($num1&$num2)<<1;
		$num1 = $tmp;
	}
	return $num1;
}
echo Add(23,23);


?>