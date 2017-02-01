<!DOCTYPE html>
<html>
<head>
	<title> Form Demo</title>

<style type="text/css">
	table ,tr,td
	{
		border :1px solid black;
		border-collapse: collapse;
	}
</style>

</head>


<body>

<a href="action.php?id=1&name=abc">link to action page</a>


<form name="form1" id="form1" action="action.php" method="POST"> 
	<center>
		<table width="400px">
			<tr>
				<td>
					 <label for="name"> Name</label>
				</td>
				<td>
					<input type="text" name="name" id="name" placeholder="Please enter your name"   >
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
					<textarea name="address" rows="3" cols="25"  ></textarea>
				 </td>
			</tr>
			<tr>
				<td>City</td>
				<td>
					<select name="city" >
						<option value="">--Select City--</option>
						<option value="1">A.bad </option>
						<option value="2"  >Pune</option>
						<option value="3" >Mumbai</option> 	
					</select>	
				</td>
			</tr>
			<tr>
				<td>
					Gender
				</td>
				<td>
					<input type="radio" name="gender"      value="MALE" > MALE
					<input type="radio" name="gender"  value="FEMALE" > FEMALE
				</td>
			</tr>
			<tr>
				<td>Hobby</td>
				<td>
					<input type="checkbox" name="SPORT"  value="SPORT" > SPORT
					<input type="checkbox" name="DANCE" value="DANCE"> DANCE
					<input type="checkbox" name="SING"  value="SING"> Sing
				</td>
			</tr>

			<tr>
				<td>Hobby 2</td>
				<td>
					<input type="checkbox" name="hobby[]"  value="SPORT" > SPORT
					<input type="checkbox" name="hobby[]" value="DANCE"> DANCE
					<input type="checkbox" name="hobby[]"  value="SING"> Sing
					<input type="checkbox" name="hobby[]"  value="Paint"> Paint


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