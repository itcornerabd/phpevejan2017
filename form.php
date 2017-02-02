<?php 
	require './include/function.php';


	$name = input('name');


 ?>

<!DOCTYPE html>
<html>
<head>
	<title> Form Demo</title>

<style type="text/css">
	
</style>
<link rel="stylesheet" type="text/css" href="table.css">

</head>


<body>

<a href="action.php?id=1&name=abc">link to action page</a>


<form name="form1" id="form1" action="form.php" method="POST"> 
	<center>
		<table width="400px">
			<tr>
				<td>
					 <label for="name"> Name</label>
				</td>
				<td>
					<input type="text" name="name" id="name" placeholder="Please enter your name" value="<?=$name?>"  >
				</td>	
			</tr>
			<tr>
				<td>
					password
				</td>
				<td>
					<input type="password" name="password" placeholder="password" >
				</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>	
					<textarea name="address" rows="3" cols="25"  ><?=input('address')?></textarea>
				 </td>
			</tr>
			<tr>
				<td>City</td>
				<td>
					<select name="city" >
						<option value="">--Select City--</option>
						<option value="1" <?php if (input('city')==1) {echo "selected";}  ?>>A.bad </option>
						<option value="2" <?php if (input('city')==2) {echo "selected";}  ?> >Pune</option>
						<option value="3" <?php if (input('city')==3) {echo "selected";}  ?>  >Mumbai</option> 	
					</select>	
				</td>
			</tr>
			<tr>
				<td>
					Gender
				</td>
				<td>
					<input type="radio" name="gender"  value="MALE" <?php if(input('gender')=="MALE") {echo "checked";} ?>  > MALE
					<input type="radio" name="gender"  value="FEMALE" <?php if(input('gender')=="FEMALE") {echo "checked";} ?>  > FEMALE
				</td>
			</tr>
			<tr>
				<td>Hobby</td>
				<td>
					<input type="checkbox" name="SPORT"  value="SPORT" > SPORT
					<input type="checkbox" name="DANCE" value="DANCE" > DANCE
					<input type="checkbox" name="SING"  value="SING"> Sing
				</td>
			</tr>

			<tr>
				<td>Hobby 2</td>
				<td>
					<input type="checkbox" name="hobby[]"  value="SPORT" <?php if(in_array("SPORT", input('hobby',false))) {echo "checked";} ?>  > SPORT
					<input type="checkbox" name="hobby[]" value="DANCE" <?php if(in_array("DANCE", input('hobby',false))) {echo "checked";} ?> > DANCE
					<input type="checkbox" name="hobby[]"  <?php if(in_array("SING", input('hobby',false))) {echo "checked";} ?>  value="SING"> Sing
					<input type="checkbox" name="hobby[]" <?php if(in_array("Paint", input('hobby',false))) {echo "checked";} ?>   value="Paint"> Paint


				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="reset" name="" value="RESET">
					<input type="submit" name="" value="SUBMIT">
					<input type="button" name="" value="BUTTON">	
				</td>
			</tr>
		</table>	

	</center>
</form>	
</body>
</html>