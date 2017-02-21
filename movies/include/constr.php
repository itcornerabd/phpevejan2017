	<?php 
	$con = @mysqli_connect("localhost","root","","movies_db");
	
	if(!$con)
		die("Error in connection 123");

	

	$pathinfo = pathinfo($_SERVER['SCRIPT_FILENAME']);

	if($pathinfo['filename']!="login")
	{
		if(!isset($_SESSION['username']))
			header("location:login.php");
	}

	if($pathinfo['filename']=="login")
	{
		if(isset($_SESSION['username']))
			header("location:movies.php");
	}
		

		
	function input($control , $is_array=true )
	{
		global $con;
		if(isset($_REQUEST[$control]))
			{
				if($is_array) 
					return mysqli_escape_string($con,$_REQUEST[$control]);
				// else
				// 	['apple','ornage'] task
			}
		else
			{	
				if($is_array)
					return "";
				else 
					return [];
			}
	}



	 ?>
