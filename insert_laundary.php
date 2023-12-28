<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Insert a record</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <style>
      .homepage{
        margin-top: 25px;
        font-size: 1.2em;
        text-align: center;
      }
    </style>
  </head>
    <body>
	<center>
    <header>Resort Mangagement System</header>

  <?php

include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";


    if(isset($_POST['submit'])){
		$Custid = $_POST['Custid'];
        $Menswear = $_POST['Menswear'];
        $Ladieswear = $_POST['Ladieswear'];
       
        $sql = "INSERT INTO laundary (Custid, Menswear, Ladieswear, amount) VALUES ('$Custid','$Menswear','$Ladieswear','100') ";
        if (mysqli_query($conn, $sql)) {
            echo "<p style='margin-top: 25px;font-size: 1.2em;text-align: center'>New Record inserted successfully ! </p>";   
        } 
        else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
		
        mysqli_close($conn);
    }
    else{
      echo "Error";
    }

    ?>

<br>
<br>
	
<a href="customer.php">
<button>Back</button>
</a>

</center>
</body>
</html>