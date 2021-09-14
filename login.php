<?php

$host="localhost";
$user="root";
$pass="";


$username=$_POST["username"];
$password=$_POST["password"];

$con=mysqli_connect($host,$user,$pass);

if($con){
	echo "database connect";
}
else{
	echo "error";
}

$db = "USE acc_detial";

mysqli_query($con,$db);

$inset = "INSERT INTO users VALUES ('$username','$password');";

if($con,$inset){
	echo("Welcome! <a href='home.html'></a>");
	header("location: home.html");
	exit;

}
else
{
	echo("Wrong username and password entered!");
}

?>