<?php

$sever="localhost";
$username="rooot";
$pw="";

$FirstName=$_POST["FirstName"];
$LastName=$_POST["LastName"];
$username=$_POST["username"];
$password=$_POST["password"];
$address=$_POST["address"];
$gender=$_POST["Gender"];
$email=$_POST["email"];

//connection

$con= mysqli_connect($sever,$username,$pw);

if($con)
{
	echo"Succefully connect to the database";	
}
else
{
	echo"Error!connection failed";	
}
$usedb="USE cwhospital";
mysqli_query($con,$usedb);


$sql ="INSERT INTO patient_register VALUES('$FirstName','$LastName','$username','$password','$address','$gender','$email');";



if(mysql_query($con,$sql))
{
	echo"Succefully!data inserted";
}
else
{
	echo("Something went wrong");
}

mysqli_close($con);

?>