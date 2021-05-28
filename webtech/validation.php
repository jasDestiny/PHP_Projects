<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="puppycom";
$conn = new mysqli($servername, $username, $password, $database);

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{   
    if(isset($_POST["email"]))
    {
        $sql_command="select * from user where email='".$_POST["email"]."' and password='".$_POST["psw"]."';";
        $result=$conn->query($sql_command);
		echo $sql_command;
        if($result->num_rows>0)
        {
            $cookie_name = "userV";
            $cookie_value = $_POST["name"];
            setcookie($cookie_name, $cookie_value, time()+(86400*30), "/");
			$cookie_name = "email";
            $cookie_value = $_POST["email"];
            setcookie($cookie_name, $cookie_value, time()+(86400*30), "/");
            echo "<script>alert('Logged in as ".$_POST["name"]."'); window.location.href='main.php';</script>";
        }

        else
        {
            echo "<script>alert('Invalid user data');</script>";
			
        }
    }
}

?>