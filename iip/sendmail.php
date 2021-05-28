<?php

$a=$_POST["email"];
$b=$_POST["content"];
$c=$_POST["fullname"];
$d=$_POST["number"];


$con=new mysqli("localhost","id13983954_root","4_OJL+6v(vla]7([","id13983954_iip");

$com=mysqli_query($con,"use id13983954_iip;");

$sql = "select * from userdb where Email='$a'";
$result = $con->query($sql);

$row = $result->fetch_assoc();

$mail=$row['mail']."<br><br>"." Mail from:".$c." Phone number: ".$d." Mail contents: ".$b;


$con=new mysqli("localhost","id13983954_root","4_OJL+6v(vla]7([","id13983954_iip");

$com=mysqli_query($con,"use id13983954_iip;");

$com=mysqli_query($con,"UPDATE userdb SET Mail = '$mail' WHERE Email='$a';");

echo "<script>alert('Mail sent successfully'); </script>";
echo "<script>window.location.href='2npageJAS2.html';</script>";

?>