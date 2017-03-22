<?php 
	
	include '../include/constr.php';
	$statement = $pdo->prepare('select * from categories ');

	$statement->execute();

	$categories = $statement->fetchall(PDO::FETCH_ASSOC);


	//echo json_encode($categories);
	if(count($categories)==0)
	{
		echo json_encode( ['status'=>'error' , 'errormsg'=>'no categories found']  );
		exit();

	}

	echo json_encode( ['status'=>'success' , 'data'=>$categories]  );

	

 ?>