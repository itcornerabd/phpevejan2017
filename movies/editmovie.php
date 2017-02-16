<?php 
require ('./include/constr.php');
echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";


$submit = input('submit');
$name = input('name');
$cast = input('cast');
$release_date=input('release_date');
$plot=input('plot');
$category_id=input('category_id');
$id = input('id');

$erromsg = [];

if($submit=="SAVE")
{
	if(empty($name))
		$erromsg[]= "please enter name";

	if(empty($cast))
		$erromsg[]= "please enter cast";
	
	if(count($erromsg)==0)
	 {
		$query = "update movies set name='$name' ,cast = '$cast' , release_date='$release_date' , plot ='$plot' , category_id =$category_id where id=$id ";

		$result = mysqli_query($con,$query);

		if(!$result)
			die("error in update ");
		else
			header("location:movies.php");
	}

}




	$query = "select * from movies where id =$id";
	$rows= mysqli_query($con,$query);
	if(!$rows)
		die("Error in fetching data");

	if($rs = mysqli_fetch_array($rows))
	{
		$name = $rs['name'];
		$cast=$rs['cast'];
		$plot= $rs['plot'];
		$release_date=$rs['release_date'];
		$category_id=$rs['category_id'];
	}




 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New Movie</title>
	<link rel="stylesheet" type="text/css" href="./css/table.css">
</head>
<body>

<ul>
	<?php foreach ($erromsg as $key => $msg) : ?>
		<li> <?=$msg?> </li>
	<?php endforeach ?>	


</ul>



<center>
	<form action="editmovie.php" method="POST"> 
		<table width="500px">
			<tr>
				<td>
					Name
				</td>
				<td>
					<input type="text" name="name" value="<?=$name?>">
				</td>
			</tr>
			<tr>
				<td>
					Cast
				</td>
				<td>
					<input type="text" name="cast"  value="<?=$cast?>">
				</td>
			</tr>
			<tr>
				<td>
					Release Date
				</td>
				<td>
					<input type="date" name="release_date"  value="<?=$release_date?>">
				</td>
			</tr>
			<tr>
				<td>
					Plot 
				</td>
				<td>
					<textarea name="plot"><?=$plot?></textarea>
				</td>
			</tr>
			<tr>
				<td>
					Category
				</td>
				<td>
					<select name='category_id'>
						<option value="">--select category--</option>	
						<?php 
							$query = "select * from categories ";
							$rows= mysqli_query($con,$query);
							if(!$rows)
								die("select error");

							
							while($rs=mysqli_fetch_array($rows)):

								$selected = "";
								if($category_id==$rs['id'])
									$selected = "selected";


							?>	
							<option value="<?=$rs['id']?>" <?=$selected?> ><?=$rs['name']?></option>
							<?php	endwhile ?>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit" value="SAVE">
					<input type="hidden" name="id" value="<?=$id?>">
				</td>
			</tr>
		</table>	


	</form>
</center>

</body>
</html>

<?php require ('./include/closestr.php'); ?>