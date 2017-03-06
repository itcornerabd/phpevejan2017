<!DOCTYPE html>
<html>
<head>
	<title>Jquery Demo</title>

<style type="text/css">
	.yellow
	{
		background-color: yellow;

	}
	.red
	{
		background-color: red;
		color: white;
	}
	.blue
	{
		background-color: blue;
	}		



</style>
<link rel="stylesheet" type="text/css" href="../table.css">

</head>
<body onload="foo()">

<div>div 1</div>
<div class="cls"> div2 </div>

<span> span 1</span>
<span>span 2</span> 	

<p class="cls"> asd</p>
<p id="p2">asdas</p>

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

	<hr>
<button id="btnred" class="btn" data-class="red"  >Apply Red Class</button>	
<button id="btnyellow"  class="btn" data-class="yellow">yellow</button>
<button id="btnblue"  class="btn" data-class="blue">Blue</button>

</body>
</html>

<script type="text/javascript" src="jquery.js" ></script>

<script type="text/javascript">	
//$(document).ready(function() {


	// $("div").addClass('blue');
	// $("span").addClass('yellow');

	// $(".cls").addClass('yellow');

	// $("#p2").addClass('red');

	 // $("tr:eq(5)").addClass('yellow');

	 //$("tr:contains(Comedy)").addClass('yellow');

	 // $("tr:odd").addClass('yellow');
	 // $("tr:even").addClass('red');
	 // // index start 0 irresoctive of parent 

	 // $("tr:nth-child(odd)").addClass('yellow');
	 // $("tr:nth-child(even)").addClass('red');	

	 //strats from 1 respective to parent



//})
// $("#btnred").click(function() {

// 	$("table").removeClass()
// 	$("table").addClass('red');

// })

// $("#btnyellow").click(function() {
// 	$("table").removeClass()
// 	$("table").addClass('yellow');
// })


$("tr").mouseover(function() {
	$(this).addClass('yellow');
})

$("tr").mouseout(function() {
	$(this).removeClass('yellow');
})

$(".btn").click(function() {

	var clsname = $(this).attr('data-class')   // $(this).html();
	$("table").removeClass()
	$("table").addClass(clsname);

})














</script>
