<?php 
		
	$fruits =['Mango','Apple','Orange'];

	$str = implode("@", $fruits);

	echo $str;

	$new = explode("@", $str);

	print_r($new);

	$name = "Sachin Ramesh Tendulkar";

	$namearr = explode(" ", $name);
	echo "<br>";

	print_r($namearr);

	echo $namearr[2];

	



 ?>