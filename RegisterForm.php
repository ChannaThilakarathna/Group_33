<?php

$sever="localhost";
$username="root";
$pw="";


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

$FirstName=$_POST["FirstName"];
$LastName=$_POST["LastName"];
$username=$_POST["username"];
$password=$_POST["password"];
$address=$_POST["address"];
$gender=$_POST["Gender"];
$email=$_POST["email"];





$usedb="USE cwhospital";
mysqli_query($con,$usedb);


$sql ="INSERT INTO patient_register VALUES('$FirstName','$LastName','$username','$password','$address','$gender','$email');";



if(mysqli_query($con,$sql))
{
	echo("Welcome! <a href='login.html'></a>");
	header("location:login.html");
	exit;//page close
}
else
{
	echo("Something went wrong");
}

mysqli_close($con);

?>