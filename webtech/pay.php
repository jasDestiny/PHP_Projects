<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="puppycom";
$conn = new mysqli($servername, $username, $password, $database);

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$a=$_POST["c1"];
	$b=$_POST["c2"];
	$c=$_POST["c3"];
	
	$sql_command= "insert into orders values ('".$_COOKIE['email']."' , '".$_POST["c1"]."' , '".$_POST["c2"]."' , '".$_POST["c3"]."');";
	$result=$conn->query($sql_command);
	echo "<script>alert('Your order was successfully placed'); window.location.href='main.php';</script>";
}

?>