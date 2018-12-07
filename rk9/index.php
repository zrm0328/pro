<?php
	function PrintMinNumber($numbers)
	{
		for ($i=0;$i<count($numbers);$i++) 
		{ 
			for ($j=$i+1;$j<count($numbers);$j++) 
			{ 
				if (intval($numbers[$i].''.$numbers[$j])>intval($numbers[$j]).''.$numbers[$i]) 
				{
					$tmp = $numbers[$i];
					$numbers[$i]=$numbers[$j];
					$numbers[$j]=$tmp;
				}
			}
		}
		return $numbers;
	}
	$num =  array(3,32,321);
	$num = PrintMinNumber($num);
	echo implode($num);



?>