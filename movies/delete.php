<?php require './include/constr.php'; ?>

<?php 
	$id = input('id');
	$ACTION = input('ACTION');
	
	if(empty($id))
		die("Invalid request");

	//$query = "delete from movies where id =$id";

	$active = 1;
	if($ACTION=="DELETE") 
		$active= 0;

	$query = "update movies set active =$active where id =$id";
		
	$result =  mysqli_query($con,$query);

	if(!$result)
		die("Error in deletion");
	else
		header("location:movies.php");

 ?>


<?php require './include/closestr.php'; ?>