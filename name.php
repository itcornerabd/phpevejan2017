<?php 

	$filename = "desert.jpg";

	$pathinfo= pathinfo($filename);	

	echo "<pre>";
	var_dump($pathinfo);
	echo "<pre>";

	echo $pathinfo['filename'] . "1." . $pathinfo['extension'] ;

 ?>