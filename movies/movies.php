<?php require ('./include/constr.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/table.css">
</head>
<body>


<center>
	<table width="600px">
		<tr>
			<td>id</td>
			<td>name</td>
			<td>Release Date</td>
			<td>Cast</td>
			<td>Category</td>
			<td> Details</td>
		</tr>
	<?php 
		$query = "Select m.*, c.name as category_name From   movies as m , categories as c Where m.category_id = c.id";

		$rows = mysqli_query($con,$query);

		while($rs=mysqli_fetch_array($rows)):

	 ?>	

		<tr>
			<td><?=$rs['id']?></td>
			<td><?=$rs['name']?></td>
			<td><?=$rs['release_date']?></td>
			<td><?=$rs['cast']?></td>
			<td><?=$rs['category_name']?></td>
			<td>
				<a href="detail.php?id=<?=$rs['id']?>">	Details</a>
			</td>
		</tr>
	<?php endwhile ?>	
	</table>	

</center>


</body>
</html>
<?php require('./include/closestr.php'); ?>


