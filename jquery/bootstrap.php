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

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

      </button>
      <a class="navbar-brand" href="#">Movies</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Caetgory <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">		
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


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

<div class="progress">
  <div class="progress-bar" id="progressbar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
    30%
  </div>
</div>

<button id="btnclick" class="btn btn-info">Btn </button>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>
<button class="btn btn-primary" id="btnmodal">open modal</button>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
        <input type="text" name="" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="savebtn">Save changes</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>



<script type="text/javascript" src="jquery.js" ></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<script >
	$("#btnclick").click(function() {

			$("#progressbar").attr('style','width:80%');
			$("#progressbar").html('80%');
	})

	$("#btnmodal").click(function() {

			$("#myModal").modal('show');

	})

	$("#savebtn").click(function() {
		$("#myModal").modal('hide');
	})	

</script>

