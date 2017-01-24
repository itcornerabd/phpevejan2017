<?php 
		
	$amount =100.20;


	echo "<br>". floor($amount);// lower value 
	echo "<br>". ceil($amount); //upper value
	echo "<br>". round($amount);// 0.5> upper otheriwse lower	

	date_default_timezone_set("Asia/Kolkata");

	echo "<br>" .date('Y-m-d h:i:s A');  //UTC+0  	



 ?>