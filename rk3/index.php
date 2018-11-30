<?php
class Index{
	public static function index_do($n){
		if ($n<=0) 
		{
			return 0;
		}
		elseif ($n==1) 
		{
			return 1;
		}
		else
		{
			return self::index_do($n-1)+self::index_do($n-2);
		}
	}

}
echo Index::index_do(11);
echo "<br>";
for ($i=0; $i<=40; $i++) { 
	echo Index::index_do($i);
	echo "&nbsp;&nbsp";
}


?>