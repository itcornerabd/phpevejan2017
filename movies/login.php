<?php session_start();

require("./include/constr.php"); 	
$submit = input('submit');
$username = input('username');
$password=input('password');


if($submit=="Login")
{
	$query = "select * from users where username ='$username' and password ='$password' ";
	//echo $query;
	$rows = mysqli_query($con,$query);
	if(!$rows)
		die("error in select");

	$users = mysqli_fetch_all($rows,MYSQL_ASSOC);

	if(count($users)>0)
		{
			$_SESSION['username'] =$username;
			$_SESSION['userid'] = $users[0]['id'];
			header("location:movies.php");
		}
	else
		echo "username or password is invalid";



}



?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="./css/table.css">
	</head>
	<body>
	<center>	
	<form method="POST" >
	<table width="500px">
		<tr>
			<td>Username</td>
			<td>
				<input type="text" name="username">
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>
				<input type="text" name="password">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
					<input type="submit" name="submit" value="Login">
			</td>
		</tr>

	</table>
	</form>
	</center>
	</body>
	</html>	

<?php require("./include/closestr.php"); ?>	