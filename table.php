
<!DOCTYPE html>
<html>
<head>
	<title>
		Table Demo
	</title>
</head>
<body>
<?php 
	$fruits =[	
				 5=>[ 'name'=>'Mango','price'=>40,'quantity'=>10],
			   	 10=>[ 'name'=>'Orange','price'=>60,'quantity'=>20],
			  	 1=>[ 'name'=>'Apple','price'=>80,'quantity'=>40]	
			 ];

$i=1;

 ?>
<table width="400px" align="center" border="1">
		<tr>
			<th>Sr No</th>
			<th>Name</th>
			<th>Price</th>
			<th>Quantity</th>
		</tr>
	<?php foreach($fruits as $key=> $fruit): ?>	
		<tr>
			<td><?=$i++;?></td>
			<td><?=$fruit['name'];?></td>
			<td align="right"> Rs <?=$fruit['price'];?>/- </td>
			<td><?=$fruit['quantity'];?></td>
		</tr>
	<?php endforeach ?>
</table>


</body>
</html>

