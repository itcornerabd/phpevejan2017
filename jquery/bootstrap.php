<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">		

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<style type="text/css">
	.row div 
	{
		background-color: yellow;
	}
	

</style>

</head>
<body>

<h1>Hello world <small> sub heding</small> </h1>

<kbd>ctrl+p</kbd>

<code>
	$x=$y+$z;	
</code>

<button class="btn btn-info"> button </button>
<a href="#" class="btn btn-warning"> <span class="glyphicon glyphicon-search"></span> link</a>

<table class="table table-bordered table-striped">
		<tr class="success">
			<td>id</td>
			<td>name</td>
			<td>Release Date</td>
			<td>Cast</td>
			<td>Category</td>
			<td> Details</td>
			<td>Delete</td>
			<td>Edit</td>
		</tr>
		

		<tr>
			<td>1</td>
			<td>Dangal</td>
			<td>2017-02-08</td>
			<td>Amir    </td>
			<td>Action</td>
			<td>
				<a href="detail.php?id=1">	Details</a>
			</td>
			<td>
								<a href="delete.php?id=1&ACTION=DELETE">	Delete</a>
					
			</td>
			<td>
				<a href="editmovie.php?id=1">	Edit</a>
			</td>
		</tr>
		

		<tr>
			<td>2</td>
			<td>Raees</td>
			<td>2016-02-10</td>
			<td>Shahrukhasd</td>
			<td>Action</td>
			<td>
				<a href="detail.php?id=2">	Details</a>
			</td>
			<td>
								<a href="delete.php?id=2&ACTION=REVERT">	Revert</a>	
					
			</td>
			<td>
				<a href="editmovie.php?id=2">	Edit</a>
			</td>
		</tr>
		

		<tr>
			<td>3</td>
			<td>Herapheri1</td>
			<td>2017-02-28</td>
			<td>Akshay </td>
			<td>Comedy</td>
			<td>
				<a href="detail.php?id=3">	Details</a>
			</td>
			<td>
								<a href="delete.php?id=3&ACTION=REVERT">	Revert</a>	
					
			</td>
			<td>
				<a href="editmovie.php?id=3">	Edit</a>
			</td>
		</tr>
		

		<tr>
			<td>4</td>
			<td>asd</td>
			<td>2017-01-31</td>
			<td>a</td>
			<td>Action</td>
			<td>
				<a href="detail.php?id=4">	Details</a>
			</td>
			<td>
								<a href="delete.php?id=4&ACTION=DELETE">	Delete</a>
					
			</td>
			<td>
				<a href="editmovie.php?id=4">	Edit</a>
			</td>
		</tr>
		

		<tr>
			<td>5</td>
			<td>new movie </td>
			<td>2015-12-31</td>
			<td>asdasd</td>
			<td>Comedy</td>
			<td>
				<a href="detail.php?id=5">	Details</a>
			</td>
			<td>
								<a href="delete.php?id=5&ACTION=DELETE">	Delete</a>
					
			</td>
			<td>
				<a href="editmovie.php?id=5">	Edit</a>
			</td>
		</tr>
		

		<tr>
			<td>6</td>
			<td>Raees</td>
			<td>2017-02-09</td>
			<td>Shahrukh</td>
			<td>Action</td>
			<td>
				<a href="detail.php?id=6">	Details</a>
			</td>
			<td>
								<a href="delete.php?id=6&ACTION=DELETE">	Delete</a>
					
			</td>
			<td>
				<a href="editmovie.php?id=6">	Edit</a>
			</td>
		</tr>
		
	</table>	


<div class="container">

	<div class="row">
		<?php for($i=1;$i<=10;$i++): ?>		
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"> div <?=$i ?> </div>
		<?php endfor ?>	
	</div>

		<div class="row">
		<?php for($i=1;$i<=10;$i++): ?>		
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"> div <?=$i ?> </div>
		<?php endfor ?>	
	</div>

		
</div>




</body>
</html>



<script type="text/javascript" src="jquery.js" ></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

