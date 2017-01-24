<?php 

	$fruits =[	
			  8=> [ 'name'=>'Mango','price'=>40,'quantity'=>10],
			  12=>[ 'name'=>'Orange','price'=>60,'quantity'=>20],
			  14=>[ 'name'=>'Apple','price'=>80,'quantity'=>40]	
			 ];

	echo "<pre>";			 
	var_dump($fruits);		 
	echo "</pre>";

	echo $fruits[8]['name'];

	foreach ($fruits as $key => $fruit) 
	{
		foreach ($fruit as $property => $value) 
		{
			echo " $property is  $value"; 
		}
		echo "<br>";
	}
	echo "<br>";
	foreach ($fruits as $key => $fruit) 
	{
		echo " name is ".$fruit['name'];
		echo " price is Rs.".$fruit['price'] . "/-";
		echo " quantity is ".$fruit['quantity'] . " in numbers"  ;

		echo "<br>";
	}

 ?>