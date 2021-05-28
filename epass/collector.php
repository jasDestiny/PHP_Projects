<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Collector's page</title>
</head>
<body>
<h3>D.Vishal 18MIS0218</h3>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database="epass";
        $conn = new mysqli($servername, $username, $password, $database);
        
        $sql = "SELECT * from user";
        $result = $conn->query($sql);
    
        while($row = mysqli_fetch_assoc($result)) {
            $button="
            <form action='approve.php' method='post'>
                <input type='hidden' name='name' value='".$row["name"]."
                <button type='submit'>Click here to approve</button>
            </form>
            ";
        echo "name: " . $row["name"]. " | age: " . $row["age"]. " | sex: " . $row["sex"]. " | From Place: " . $row["fromPlace"]. " | To Place: " . $row["toPlace"]." | Purpose: " . $row["purpose"]. "| Date: " . $row["date"]. "| File: " . $row["file"]." |Members number: " . $row["members"]." | Permission status: " . $row["permission"].$button."<br> ";
        }
       
        $conn->close();
    ?>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>