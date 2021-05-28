<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="puppycom";
$conn = new mysqli($servername, $username, $password, $database);

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $sql_command= "insert into user values ('".$_POST["name"]."' , '".$_POST["email"]."' , '".$_POST["phno"]."' , '".$_POST["psw"]."');";
	$result=$conn->query($sql_command);
	echo "<script>alert('Account created successfully'); window.location.href='main.php';</script>";
}

?>