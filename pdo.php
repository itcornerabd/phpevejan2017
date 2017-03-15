<?php 
	
	$pdo = new PDO('mysql:host=localhost;dbname=movies_db','root',''); 
	
	// $statement = $pdo->prepare('select * from movies');

	// $statement->execute();

	// $movies = $statement->fetchall(PDO::FETCH_ASSOC);

	// echo json_encode($movies); 


	$statement = $pdo->prepare('insert into categories (name) values (?)');

	$result =  $statement->execute(["first"]);
	  $statement->execute(["second "]);
	    $statement->execute(["third "]);

	var_dump($result);



 ?>