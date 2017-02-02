<!DOCTYPE html>
<html>
<head>
	<title>
		Action Page
	</title>
	<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>

<?php 
	


	$name  =input('name');
	$address=input('address');

	 //var_dump($_GET);	

	if(isset($_GET['id']))
	 echo  "id is ". $_GET['id'];
	
	if(isset($_GET['name']))
	 echo  "<br> name is ". $_GET['name']; 


	//var_dump($_POST);

	if(isset($_POST['name']))
		{		
			$name = $_POST['name'];
			echo "<br> name is  ".$_POST['name'];
		}
	if(isset($_POST['password']))
		echo "<br> password is ".$_POST['password'];

	if(isset($_POST['address']))
		echo "<br> address is ".$_POST['address'];

	if(isset($_POST['city']))
	{
				echo "<br> city is ".$_POST['city'];
				$city = $_POST['city'];
				echo $city;
		}	

	if(isset($_POST['gender']))
		echo "<br> gender is ".$_POST['gender'];
	
	if(isset($_POST['SPORT']))
		echo "<br> selected hobby is  ".$_POST['SPORT'];

	if(isset($_POST['DANCE']))
		echo "<br> selected hobby is  ".$_POST['DANCE'];
	
	if(isset($_POST['SING']))
		echo "<br> selected hobby is  ".$_POST['SING'];			

	if(isset($_POST['hobby']))
	{
		$hobbies =$_POST['hobby'];
		echo "selected hobby is ";
		foreach ($hobbies as $key => $hobby) 
		{
			echo "$hobby ";
		}

	}


 ?>
 	<table width="500px" align="center">
 		<tr>
 			<td>Name</td>
 			<td><?=$name?></td>
 		</tr>
 		<tr>
 			<td>address</td>
 			<td><?=$address?></td>
 		</tr>
 	</table>



</body>
</html>