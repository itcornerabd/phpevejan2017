<?php 
require ('./include/constr.php');




$submit = input('submit');
$name = input('name');
$cast = input('cast');
$release_date=input('release_date');
$plot=input('plot');
$category_id=input('category_id');

$erromsg = [];

if($submit=="SAVE")
{
	if(empty($name))
		$erromsg[]= "please enter name";

	if(empty($cast))
		$erromsg[]= "please enter cast";
	

	if(count($erromsg)==0)
	{
		$query = "insert into movies (name,cast,release_date,plot,category_id) values ('$name','$cast','$release_date','$plot',$category_id )  ";

		$result = mysqli_query($con,$query);

		if(!$result)
			die("error in insert ");
		else
			header("location:movies.php");
	}

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
	<form action="addmovie.php" method="POST"> 
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
				</td>
			</tr>
		</table>	


	</form>
</center>

</body>
</html>

<?php require ('./include/closestr.php'); ?>