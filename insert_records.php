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
        $Name = $_POST['name'];
        $Phno = $_POST['phno'];
        $Address = $_POST['address'];
        $Checkin = $_POST['check_in'];
        $Checkout = $_POST['check_out'];
        $Roomtype = $_POST['roomtype'];
        $sql = "INSERT INTO booking (Name, Phno, Address, Checkin, Checkout, Roomtype, amount) VALUES ('$Name','$Phno','$Address','$Checkin','$Checkout','$Roomtype','1000') ";
        if (mysqli_query($conn, $sql)) {
            echo "<p style='margin-top: 25px;font-size: 1.2em;text-align: center'>New Record inserted successfully ! </p>";   
        } 
        else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
		$sql = "SELECT Custid,Name,Phno FROM booking ORDER BY Custid DESC LIMIT 1";
		
        $result = $conn->query($sql);

       if ($result->num_rows > 0) {
        // output data of each row
       while($row = $result->fetch_assoc()) {
		    echo "<p style='margin-top: 25px;font-size: 1.2em;text-align: center'>Please remembr the custid for further reference </p>";
            echo "<br> custid: ". $row["Custid"]. " - Name: ". $row["Name"]. " Phone no: " . $row["Phno"] . "<br>";
        }
        } else {
             echo "0 results";
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