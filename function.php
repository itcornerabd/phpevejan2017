<?php 
	
	// include 'inc.php'; // warning - continue execution 

	include_once 'inc.php'; // warning - continue execution 


	include_once 'inc.php';


	//require 'inc.php';	// fatal error - stop execution 
	// require_once 
	
	$p=1000;
	$r=2;
	$t=2;

	echo "<br>".simple_interest($p,$r,$t);
	echo "<br>".simple_interest(2000);
	echo "<br>".simple_interest(3000,2);
	echo "<br>".simple_interest(2000,3);
	echo "<br>".simple_interest(2000,2,3);
	


	



 ?>