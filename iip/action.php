<?php

$z=$_POST["email"];
$a=$_POST["ue"];
$b=$_POST["fullname"];
$c=$_POST["password"];
$d=$_POST["age"];
$e=$_POST["address"];
$f="";

$con=new mysqli("localhost","id13983954_root","4_OJL+6v(vla]7([","id13983954_iip");

$com=mysqli_query($con,"use id13983954_iip;");

$com=mysqli_query($con,"UPDATE userdb SET Email='$a', Full_Name ='$b', Password='$c', Age='$d', Address='$e' where Email='$z' ;");

echo "<script>
alert('Updated successfully!!!');
window.location.href='2npageJAS2.html';
</script>";




?>