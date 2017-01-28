<?php 
		$fruits =[	
			  8=> [ 'name'=>'Mango','price'=>40,'quantity'=>10],
			  12=>[ 'name'=>'Orange','price'=>60,'quantity'=>20],
			  14=>[ 'name'=>'Apple','price'=>80,'quantity'=>40]	
			 ];


 ?><!DOCTYPE html>
<html>
<head>
	<title>
		Fruit demo
	</title>
</head>

<ul>
<?php foreach ($fruits as $index =>  $fruit) : ?>
	<li><a href="fruit.php?fruitid=<?=$index?>">  <?=$fruit['name'];  ?></a> </li>
<?php endforeach ?>
</ul>


<body>	
<?php 


	if(isset($_GET['fruitid']))
		echo "fruit id is ". $_GET['fruitid'];
	else
		die("Fruit id is not requested");
	
	$fruitid = $_GET['fruitid'];


	if(isset($fruits[$fruitid]))
		echo "fruit found";
	else
		die("not found");




	echo $_GET['fruitid'];




	 

 ?>



<h1> <?=$fruits[$fruitid]['name'];  ?> </h1>
<h3>Rs<?=$fruits[$fruitid]['price'];  ?> </h3>
20 in number


</body>
</html>