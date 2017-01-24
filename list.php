<?php 

	$fruits = [];


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>List Demo</title>
</head>
<body>

<ul>
	<?php foreach($fruits as $fruit) 
		{ ?>
		<li>
			<?php	echo $fruit; ?>
		</li>		
	<?php
		}
	?>		
</ul>

<?php 

	echo "<ul>"	;	
	foreach ($fruits as  $fruit) {
		echo "<li>";
		echo $fruit;
		echo "</li>";
	}
	echo "</ul>"

 ?>

<?php if(count($fruits)>0):  ?>
 <ul>
 	<?php foreach($fruits as $fruit) : ?>	
 		<li><?=$fruit ?></li>
 	<?php endforeach ?>
 </ul>
<?php endif ?>

<?php 
	// while():

	// endwhile;


	// for():

	// endfor;
		
 ?>




</body>
</html>




