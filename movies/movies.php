<?php
session_start();

if(!isset($_SESSION['username']))
	header("location:login.php");


 require ('./include/constr.php'); ?>
<?php 

	$query = "Select m.*, c.name as category_name From   movies as m , categories as c Where m.category_id = c.id  ";

		$rows = mysqli_query($con,$query);

	$movies = mysqli_fetch_all($rows, MYSQL_ASSOC);





 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/table.css">
</head>
<body>

Welcome <?=$_SESSION['username'];?>
<a href="logout.php">Logout</a>

<a href="addmovie.php">Add New</a>	

<center>
	<table width="600px">
		<tr>
			<td>id</td>
			<td>name</td>
			<td>Release Date</td>
			<td>Cast</td>
			<td>Category</td>
			<td> Details</td>
			<td>Delete</td>
			<td>Edit</td>
		</tr>
	<?php 
		foreach ($movies as $key => $movie) :
	 ?>	

		<tr>
			<td><?=$movie['id']?></td>
			<td><?=$movie['name']?></td>
			<td><?=$movie['release_date']?></td>
			<td><?=$movie['cast']?></td>
			<td><?=$movie['category_name']?></td>
			<td>
				<a href="detail.php?id=<?=$movie['id']?>">	Details</a>
			</td>
			<td>
				<?php if($movie['active']): ?>
				<a href="delete.php?id=<?=$movie['id']?>&ACTION=DELETE">	Delete</a>
				<?php else: ?>
				<a href="delete.php?id=<?=$movie['id']?>&ACTION=REVERT">	Revert</a>	
				<?php endif ?>	
			</td>
			<td>
				<a href="editmovie.php?id=<?=$movie['id']?>">	Edit</a>
			</td>
		</tr>
	<?php endforeach ?>	
	</table>	

</center>


</body>
</html>
<?php require('./include/closestr.php'); ?>


