<?php header("Content-Type:text/css") ?>
<?php 
	$bgcolor = "red";

 ?>
span  /* element wise apply to all span element*/
		{
			background-color: <?php echo $bgcolor ?>;
		}	
		.cls /* class wise applly to element who have cls as a class*/
		{
			font-size: 24px;
		}
		#div1 /*id wise apply to element who hae div1 as a ID */
		{
			color: blue;
		}
		/*	
			inline 
			ID 
			inpage /class
			elemnt wise

		*/

	div
	{
		color: red !important;
	}
