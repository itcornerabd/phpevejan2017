<?php 
	
	$fruits = [9=>'orange',7=>'apple',2=>'mango',4=>'banana'];


	var_dump(in_array("asd", $fruits)); // true/false
	var_dump( array_search("Orange", $fruits)); // if exists then index otheriwse false

	$pos = array_search("asd", $fruits);

	if($pos>-1)
		echo "found at $pos";
	else
		echo "not found";

	dd($fruits);

	// sort($fruits); // sort in asc order index will rearrange
	// dd($fruits);

	// rsort($fruits); // sort in desc order , index rearrange
	// dd($fruits);

	// asort($fruits); // sort in asc order , index will preserved
	// dd($fruits);

	// arsort($fruits); // sort in desc order , index will preserved
	// dd($fruits);
	
	ksort($fruits); // sort in asc order key/index wise , index will preserved
	dd($fruits);

	function dd($value)
	{
		echo "<pre>";
		var_dump($value);
		echo "</pre>";
	}
 ?>