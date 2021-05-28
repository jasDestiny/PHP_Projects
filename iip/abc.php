<?php

$a=$_POST["email"];
$b=$_POST["fname"];
$c=$_POST["psw"];
$d=$_POST["age"];
$e=$_POST["address"];
$f="";

$con=new mysqli("localhost","id13983954_root","4_OJL+6v(vla]7([","id13983954_iip");

$com=mysqli_query($con,"use id13983954_iip;");



$com=mysqli_query($con,"insert into userdb values('$a','$b','$c','$d','$e','$f');");

echo "<script>
alert('Account created successfully!!!');
window.location.href='2npageJAS2.html';
</script>";


?>


