<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">		



	<title>API Demo</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap-theme.min.css">

	<style type="text/css">
		body
		{
			margin-top: 50px;
		}	
		.btncategory
		{
			margin-bottom: 10px;
		}
	</style>

</head>
<body>
<div class="container">
	
	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Add New Movie
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add New </h4>
      </div>
      <div class="modal-body">
			<form name="movieform" id="movieform" >
				<div class="form-group">
					 <label>Name </label> 
					<input type="text" name="name" id="name" placeholder="Enter Movie Name" class="form-control">
				</div>	
				<div class="form-group">
					 <label>Cast </label> 
					<input type="text" name="cast" id="cast" placeholder="Enter Movie Cast" class="form-control">
				</div>	
				<div class="form-group">
					 <label>Relase Date </label> 
					<input type="date" name="release_date" id="release_date" placeholder="Enter Movie Relase Date" class="form-control">
				</div>	
				<div class="form-group">
					 <label>Plot </label> 
						<textarea name="plot" id="plot" class="form-control" placeholder="Enter Movie Plot"></textarea>
				</div>	
				<div class="form-group">
					 <label>Category </label> 
						<select class="form-control" id="category_id" name="category_id">
								<option value="">select Category</option>	
						</select>
				</div>	
			</form>	

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnsave">Save changes</button>
      </div>
    </div>
  </div>
</div>

<hr>


<div class="row" >
		<div class="col-md-3">
			<div class="row" id="categories">

 			</div>
		</div>	
		<div class="col-md-9" id="movies">
			
		</div>
</div>



</div>
</body>
</html>
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript" src="./js/bootstrap.min.js"></script>

<script type="text/javascript">
	var html = '';
	$.getJSON('./api/categories.php', function(response) {

		if(response.status!='success')
		{
			alert('Some Error Occured');
			return false;
		}
		html='';
		var options= ''

		$.each(response.data , function(index,category) {

			html+='	<div class="col-md-12">';
	 		html+= '<button class="btn btn-primary btncategory" data-id="'+category.id+'"  >'+category.name+'</button>';
	 		html+='</div>'	
	 		options+= '<option value="'+category.id+'" > '+category.name+' </option>'

		})
		$("#categories").html(html);
		$("#category_id").append(options);
		$(".btncategory:eq(0)").click();


	})


	// $(".btncategory").click(function() {
	// 	alert('asd');
	// })

	$("body").on('click', '.btncategory' ,function() {
			
		var category_id = $(this).attr('data-id');		
		//console.log(category_id);
		getdata= {'category_id':category_id}
		$.getJSON('./api/movies.php' ,getdata ,function(response) {
			if(response.status!='success')
			{
				$("#movies").html('<h1> '+ response.errormsg +' </h1>')
				return false;
			}

			html=''
			$.each(response.data ,function(index,movie) {
				//console.log(movie.name);

				html+='<div class="panel panel-default">'
				html+='<div class="panel-heading">'
			    html+='<h3 class="panel-title">'+movie.name+'</h3>'
			    html+='</div>'
			    html+='<div class="panel-body">'
			    html+= '<div>'+ movie.cast + '</div>'; 
			    html+= movie.release_date;
			    html+='</div>'
			    html+='</div>'
			} )

			$("#movies").html(html);

		})

	})

$("#btnsave").click(function() {

	var postdata = $("#movieform").serialize();

	$.post('./api/add_movie.php',postdata,function(response) {

		response = $.parseJSON(response);

		if(response.status=='success')
		{
			alert('Movie successfully added');
			$("#myModal").modal('hide');
			$(".btncategory[data-id="+$("#category_id").val()+"]").click()	
		}
		else
		{
			alert("Some error Occured");
		}

	})
})

</script>








