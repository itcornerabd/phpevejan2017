<?php 

	$fruits = [  "Mango" , "Orange","Apple" , "Pinapple" ];

	echo "size of array is ".count($fruits); 

	var_dump($fruits);
	print_r($fruits);

	var_dump(in_array( "strawberry",$fruits ));  //returns true /false
	var_dump(array_search( "strawberry",$fruits )); 
	//if found then return index otherwise false

	if(in_array( "Apple" , $fruits ))
		echo "<br>found at position" .  array_search("Apple", $fruits) ;
	else
		echo "<br>not found";

	// sort($fruits); // sort in asc order index wil rearrange

    // asort($fruits);// sort in asc order index will preserved

	// rsort($fruits); // reverse of sort 

	// arsort($fruits); //reverse of asort 

	ksort($fruits); //sort index wise

	var_dump($fruits);

	 
	$str = implode("-", $fruits);

	echo $str;

	$newfruits = explode("-", $str);

	var_dump($newfruits);

	$date = '2017-01-18'; // 18/01/2017 

	$datearr= explode("-", $date);

	var_dump($datearr);

	echo $datearr[2] . "/" .$datearr[1] . "/". $datearr[0];

	$name = "Sachin Ramesh Tendulkar";

	$namearr = explode(" ", $name);

	var_dump($namearr);  

	echo "<br>First name".$namearr[0];
	echo "<br>Middle name".$namearr[1];
	echo "<br>Last name".$namearr[2];

 ?>	
