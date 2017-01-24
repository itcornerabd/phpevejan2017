<?php 

	$str = "Hello World";

	//echo $str;

	printf("String is %s " ,$str );

	echo "<br> length is " . strlen($str);

	echo "<br>" . strpos($str, "w"); // case sensative
	// rerturn position of string if present otherwise false 

	echo "<br>" . stripos($str, "w"); // case insensative

	echo "<br>" . strrpos($str, "o"); //search from last  case sensative

	echo "<br>" . strripos($str, "O");	//search from last case insensative

	echo "<br>".str_replace("World", "PHP", $str); //case sensative

	echo "<br>".str_ireplace("world", "PHP", $str); //case insensative

	echo "<br>". substr($str,6,5);	

	echo "<br>". strrev($str);

	echo "<br>".strtolower($str);

	$name="neha Sawaleabc";

	$space_pos = strpos($name," ");
	$strlen = strlen($name);
	echo "<br> first name is " . substr($name,0,$space_pos) ;
	echo "<br> last name is " . substr($name,$space_pos+1,$strlen-$space_pos) ;		

	$str2 = "hello world";

	echo strcasecmp($str, $str2);
	if(strcasecmp($str, $str2)==0) // return 0 if equal 
		echo "<br>strings are equal";
	else
		echo "<br>strings are not equal";



 ?>