<?php 

$a=5;

if($a>=10)
{
	$b=20;
}	
	
if (isset($b))  // to check given var is defined or not 
	echo $b;	
else
	{
		echo "b is not defined";
		//exit(1);
		die("error occured please try again");
	}

if(is_int($b))
	echo "<br> b is integer";
else
	echo "<br> b is not integer";

if(is_numeric($b))
	echo "<br> b is numeric ";
else
	echo "<br> b is not numeric"; 

// is_string is_float is_bool  is_array













 ?>