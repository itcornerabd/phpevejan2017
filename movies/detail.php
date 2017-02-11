<?php 
require './include/constr.php';

$id = input('id');	

if(empty($id))
	die("invalid request");	

$query ="Select m.*, c.name as category_name From   movies as m , categories as c Where m.category_id = c.id and m.id =$id";

$rows = mysqli_query($con,$query);

if($rs=mysqli_fetch_array($rows))
{
	$name = $rs['name'];
	$cast =$rs['cast'];
	$release_date =$rs['release_date'];
	$plot = $rs['plot'];
	$category_name=$rs['category_name'];
}
else
{
	die("NO record found ");
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Details of <?=$name?></title>
	<link rel="stylesheet" type="text/css" href="./css/table.css">
</head>
<body>

<center>
<table width="500px">
	<tr>
		<td>Name</td>
		<td><?=$name?></td>
	</tr>
	<tr>
		<td>plot</td>
		<td><?=$plot?></td>
	</tr>
</table>
</center>

</body>
</html>
<?php require('./include/closestr.php'); ?>
