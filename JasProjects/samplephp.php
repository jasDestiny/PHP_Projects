<?php

$a=$_POST["fn"];
$b=$_POST["sn"];
$c=$_POST["tn"];

$username="root";
$password="admin";
$port="127.0.0.1";

$con=new mysqli("127.0.0.1","root","","john");

if(!$con)
{
	echo "connection to mysql failed<br>";
}
else
{
	echo "connection successful<br>";
}

$d="use john;";
$e=mysqli_query($con,$d);

$d="insert into names values('$a','$b','$c');";
$e=mysqli_query($con,$d);

echo "<br> <table border='1'> <tr> <td> ".$a."</td><td>".$b."</td><td>".$c."</td></tr></table>";

?>