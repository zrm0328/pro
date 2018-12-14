<?php
function FirstNotRepeatingChar($str)
{
	for ($i=0,$len=strlen($str);0<=$i && $i<=10000; $i++) 
	{ 
		$num = strpos($str,'a',1);
	}
	return $num;
}
echo FirstNotRepeatingChar("fa");


?>