<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="pg3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <title>STC CCS</title>

 

</head>

<body>
  

<form id="msform" method="post" action="pqno1.php">
    
    <fieldset>
	
      <h2 class="fs-title">
	  
	  <?php
	  echo "Question ".$_COOKIE['qno'];
	  ?>
	  
	  </h2>
      <h3 class="fs-subtitle">
	  <?php
	  
		$d=$_COOKIE["cob"];
		$q=$_COOKIE["qno"];
		$e=$_COOKIE['qno'];
		
		$con=new mysqli("remotemysql.com","q6KGHxdLX6","I6PkWNdKHp","q6KGHxdLX6");

		$com=mysqli_query($con,"use q6KGHxdLX6;");

		$com=mysqli_query($con,"select * from alltable where name='$d';");
		
		$result=mysqli_fetch_array($com);
		
		echo $result["qno".$q];
		
	  ?>
	  </h3>
      <textarea rows="4" cols="50" name="john" >Enter your answer here</textarea>        
      <button type="submit" name="next" class="next action-button1" value="Next" >Done</button>
      
    </fieldset>
    
  </form>
  
 </body>
</html>
