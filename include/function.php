<?php 
	
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


	//input('name' ,true  ) // ""
	//input('hobby',false)  //. blank [] array()

 ?>	
