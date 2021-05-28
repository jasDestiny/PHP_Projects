<?php
$a=$_POST['john'];
$b=$_COOKIE['regno'];
$c=$_COOKIE['qno'];
$d=$_COOKIE['cob'];
$c=$c;

$con=new mysqli("remotemysql.com","q6KGHxdLX6","I6PkWNdKHp","q6KGHxdLX6");

$com=mysqli_query($con,"use q6KGHxdLX6;");

$com=mysqli_query($con,"update questions".$d." set qno".$c."='$a' where regno= '$b';");

if($c<=5)
	setcookie("qno",($c+1),time()+(86400*30),"/");
		
else
	echo "<script>window.location.href='quizover.html';</script>";


if($c<5)
	echo "<script>window.location.href='qno1.php'</script>";

else
	echo "<script>window.location.href='quizover.html'</script>";
	


?>