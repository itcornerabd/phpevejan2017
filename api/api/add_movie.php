<?php 
include ('../include/constr.php');
	
$name = input('name');
$cast=input('cast');
$release_date= input('release_date');
$plot= input('plot');
$category_id= input('category_id');
$errormsg=[];

if(empty($name))
	$errormsg[] ='Please Enter Movie Name';


if(count($errormsg)>0)
	{
		echo json_encode( ['status'=>'error' , 'errormsg'=>$errormsg[0] ] );
		exit();
	} 

$statement  = $pdo->prepare('insert into movies (name,cast,release_date,category_id,plot) values(?,?,?,?,?) ');

$result =$statement->execute([$name,$cast,$release_date,$category_id,$plot]);

if(!$result)
{
	echo json_encode( ['status'=>'error' , 'errormsg'=>'can not insert now please try again ']);
		exit();
}

echo json_encode( ['status'=>'success' , 'data'=>'Insert sucessfully']);




 ?>