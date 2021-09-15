<?php

$host="sql308.epizy.com";
$user="epiz_28147165";
$pass="MiX72XqXwIa8eL";
$db="epiz_28147165_login_account";


$username=$_POST["username"];
$password=$_POST["password"];
$address=$_POST["address"];
$gender=$_POST["Gender"];
$email=$_POST["email"];

//Insert data

$con= mysqli_connect($host,$user,$pass,$db);
mysqli_select_db($con,"login_account");

$sql ="INSERT INTO users VALUES('$username','$password','$address','$gender','$email')";
$ret= mysqli_query($con,$sql);

mysqli_close($con);


if (mysqli_num_rows($result)==1)
{
	echo("Welcome! <a href='home.html'></a>");
	header("location: home.html");
	exit;

}
else
{
	echo("Something went wrong");
}
}

exit;