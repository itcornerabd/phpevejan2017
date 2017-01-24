<?php 
	
	$a=5;

	if($a>=10)
	{
		$b="asdasd";
	}
	
    //isset - given defined or not true/false

	if(isset($b)) 
		echo $b;
	else
		{
			// echo "b is not defined";
			// exit(1);

			die("b is not defined");
		}

	if(is_int($b)) // true/false - check integer or not
		echo "<br> b is integer";
	else
		echo "<br> b is not integer";	

	if(is_numeric($b)) // true/false - check numeric or not 
		echo "<br> b is numeric";
	else
		echo "<br> b is not numeric";

	//is_string is_float is_bool is_array

 ?>