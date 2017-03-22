<?php 
		$pdo = new PDO('mysql:host=localhost;dbname=movies_db','root',''); 


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