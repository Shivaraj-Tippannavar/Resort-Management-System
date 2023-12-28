<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="home.css">
    <title>View Records</title>
    <style>
table.view{
    border-collapse: collapse;
    width: 100%;
    
    text-align: left;
    margin-top: 20px;
    
}

td{
    color: black;
}
.homepage{
    margin-top: 25px;
    font-size: 1.2em;
    text-align: center;
}

</style>
</head>
<body>
<center>
    <header>Employee Mangagement System</header>
    <table class="view" border="2px">
    <tr>
        <th>Customer ID</th>
        <th>Name</th>
        <th>Phone No</th>
        <th>Address</th>
        <th>Check In</th>
        <th>Check Out</th>
        <th>Room Type</th>
		<th>Amount</th>
    </tr>
    <?php
    
include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";

    $sql = "SELECT * FROM booking";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0)
    {
    // output data of each row
        
        while($row = mysqli_fetch_array($result))
        {
            //$row['index'] the index here is a field name
            echo "<td>" . $row["Custid"]."</td>";
            echo "<td> " . $row["Name"]."</td>";
            echo "<td> " . $row["Phno"]."</td>";
            print "<td> " . $row["Address"]."</td>";
            print "<td> " . $row["Checkin"]."</td>";
            print "<td> " . $row["Checkout"]."</td>";
            print "<td> " . $row["Roomtype"]."</td>";
			echo "<td> " . $row["amount"]."</td></tr>";
            
        
        }
        echo "</table>";
    }

    else
    {
        echo "0 results";
    }

    mysqli_close($conn);
    ?>
    	
<a href="admin.php">
<button>Back</button>
</a>
  
</center>
</body>
</html>