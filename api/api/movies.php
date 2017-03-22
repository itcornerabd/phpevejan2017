<?php 
	include ('../include/constr.php');

	$category_id  = input('category_id');

	if(empty($category_id)  || ($category_id==0))
	{
		echo json_encode( ['status'=>'error' , 'errormsg'=>'Invalid Category']);
		exit();
	}

	$statement = $pdo->prepare('select * from movies where category_id = ? ');

	$statement->execute([$category_id]);


	$movies = $statement->fetchall(PDO::FETCH_ASSOC);

	if(count($movies)==0)
	{
		echo json_encode( ['status'=>'error' , 'errormsg'=>'No movies Found']);
		exit();	
	}


	echo json_encode( ['status'=>'success' , 'data'=>$movies]);
		

 ?>