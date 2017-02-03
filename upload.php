<?php 
if(isset($_FILES['image']))
{
	echo "<pre>";
	var_dump($_FILES);
	echo "</pre>";

	echo $_FILES['image']['tmp_name'];
	echo $_FILES['image']['name'];

	move_uploaded_file($_FILES['image']['tmp_name'], "./upload/".$_FILES['image']['name']);

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		File Upload
	</title>
</head>
<body>


	<form method="POST" action="upload.php" enctype="multipart/form-data" >
			
			Select File<input type="file" name="image" id="image">
			<br>
			<br> 
			<input type="submit" value="SUBMIT">

	</form>

</body>
</html>