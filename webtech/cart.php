<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	if(!isset($_COOKIE["userV"])) {
	  echo "<script> alert('Sign in to view cart'); window.location.replace('signin.php')</script>";
	} 

	$a=$_POST["c1"];
	$b=$_POST["c2"];
	$c=$_POST["c3"];
	echo "<br>Chihuahua: $a";
	echo "<br>Labrador: $b";
	echo "<br>Mastiff: $c";
	
	$amount=5000*$a + 7000*$b + 15000*$c;
	echo "<br>Total= Rs.$amount";
}

else{
	echo "Cart is empty. Purchase dogs to view cart";
}
?>

<form action="pay.php" method="post">
	<input type="hidden" name="c1" value=<?php echo "'".$_POST["c1"]."'";?> >
	<input type="hidden" name="c2" value=<?php echo "'".$_POST["c2"]."'";?> >
	<input type="hidden" name="c3" value=<?php echo "'".$_POST["c3"]."'";?> >
	<button type="submit">Confirm order</button>
</form>