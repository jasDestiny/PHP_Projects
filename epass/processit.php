<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="epass";
$conn = new mysqli($servername, $username, $password, $database);
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $sql_command= "insert into user values ('".$_POST["name"]."' , '".$_POST["age"]."' , '".$_POST["sex"]."' , '".$_POST["from"]."' , '".$_POST["to"]."' , '".$_POST["purpose"]."' , '".$_POST["date"]."' , '".$_POST["file"]."' , '".$_POST["members"]."' , 'Pending');";
	$result=$conn->query($sql_command);
	echo "<script>Aler</script></script>";
}

?>