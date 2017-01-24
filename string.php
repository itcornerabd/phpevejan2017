<?php 

	$str = "Hello World";

	echo " length of string is ". strlen($str);

	echo "<br>".strripos($str,"O"); //case sensative if found then reurn position otheriwse false  

	$pos =stripos($str, "w");

	//stripos = ignore case //case insensative
	//strrpos  = search from end/reverse search 
	//strripos case insensative    

	if($pos>-1)
		echo "found";
	else
		echo "not found";

	echo "<br>". substr($str,6,10);


	echo "<br>". str_replace("World", "PHP", $str);
	echo "<br>". str_ireplace("world", "PHP", $str);

	$str2 = "hello World";

	//strcmp // match =0 other diffrence 

	if(strcasecmp($str, $str2)==0)
		echo " string are equal";
	else
		echo "string are not equal";

	$a=10;
	printf("string is %s %d",$str,$a);

	$name = "Neha asa";

	$spacepos = strpos( $name," " );


	echo "<br>first Name " . substr($name, 0,$spacepos); 
	echo "<br>last Name " . substr($name,$spacepos+1,  strlen($name)-$spacepos ); 


 ?>