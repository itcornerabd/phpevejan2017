	<?php 
	$con = @mysqli_connect("localhost","root","","movies_db");
	
	if(!$con)
		die("Error in connection 123");


		
	function input($control , $is_array=true )
	{
		if(isset($_REQUEST[$control]))
			return $_REQUEST[$control];
		else
			{	
				if($is_array)
					return "";
				else 
					return [];
			}
	}



	 ?>
