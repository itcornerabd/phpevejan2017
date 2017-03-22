<?php 
$uploadfolder = "./upload/";

if(isset($_FILES['image']))
{
	
	$filename = $_FILES['image']['name'];
	 $tmp_name =   $_FILES['image']['tmp_name'];
	 $path =$uploadfolder.$filename;  // upload/desert.jpg

	 $i=0;
	while(file_exists($path ))
	{	
		$i++;
		//echo "file exists";
		$pathinfo = pathinfo($filename);

		$newfilename = $pathinfo['filename']  . "$i." . $pathinfo['extension'];

		$path = $uploadfolder.$newfilename;
		//die($path);

	}
	
		move_uploaded_file($tmp_name,$path );
		echo "file uploaded";
	
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