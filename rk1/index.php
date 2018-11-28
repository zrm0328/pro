<?php

$res = index('Have you ever gone shopping and');
echo $res;
function index($str){
	$res = '';
	$arr = [];
	for ($i=0,$len = strlen($str);$i<$len; $i++) { 
		if (isset($arr[$str[$i]])) 
		{
			$arr[$str[$i]] ++;
		}
		else
		{
			$arr[$str[$i]]=1;
		}
		if ($arr[$str[$i]] == 3) 
		{
			$res = $str[$i];
			break;
		}
	}

	return $res;
	// $res = str_split($res);
	// var_dump(array_count_values($res));
}


?>