<?php 

	$a=10;

	foo1($a);

	echo $a;

	function foo(&$x)
	{
		$x=20;
		echo $x;
	}


	function foo1()
	{	
		global $a;
		$a=20;
		echo $a;
	}




 ?>