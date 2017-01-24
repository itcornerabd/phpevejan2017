<?php 
	$amount = 100.54;

	echo "<br>" . ceil($amount);
	echo "<br>" . floor($amount);
	echo "<br>" . round($amount);	

	echo "<br>";
	
	date_default_timezone_set("Asia/Kolkata");	

	echo date('Y-m-d h:i:s A ');	

 ?>