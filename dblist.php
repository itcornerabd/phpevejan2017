<?php 
	// connect to database
	// prepare sql query 
	// excute sql query 
	// process result
	
	//error_reporting(0);

	$con = @mysqli_connect("localhost","root","","movies_db");
	
	if(!$con)
		die("Error in connection 123");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		List from db
	</title>
	<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
<ul>
	<?php 
		$query = "select * from categories";

		$rows = mysqli_query($con,$query);
		if(!$rows)
			die("error in fetching data");


		while($rs = mysqli_fetch_array($rows))
		{
			echo  "<li>". $rs['name'] . "</li>";
		}

	 ?>
</ul>


<center>
<table width="500px">
		<tr>
			<th>Id</th>
			<th>name</th>
		</tr>	
		
<?php 
	$query = "select * from categories";

	$rows = mysqli_query($con,$query);
	if(!$rows)
		die("error in fetching data");

	
	while ($rs = mysqli_fetch_array($rows)) :
 ?>		
		<tr>
			<td><?=$rs['id']?></td>
			<td><?=$rs['name']?></td>
		</tr>
	<?php endwhile ?>
</table>	
</center>



</body>
</html>