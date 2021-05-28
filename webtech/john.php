<?php

echo "<h1>registered successfully</h1>";
echo "<br>Redirecting to home page...";

sleep(3);

$a=$_POST["username"];
$b=$_POST["register"];
$c=$_POST["gmail"];
$d=$_POST["phno"];
$e=$_POST["password"];

$con=new mysqli("127.0.0.1","root","","additional");
$com=mysqli_query($con,"use additional;");
$com=mysqli_query($con,"insert into userdb values('$a','$b','$c','$d','$e');");
header('location: experiment.html');
?>