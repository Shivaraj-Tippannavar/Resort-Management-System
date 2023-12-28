<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Register Form</title>
  <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body background="singleroom.jpeg">
<center>
<br><br>
<h2>Room Bookings </h2>
<br><br>

<section class="form">
<form action="insert_records.php" name="insert" method="post" onclick="">
<p>
    <label for="Name">Name:</label> 
    <input type="text" name="name" required>
</p>
  
<p>
    <label for="Phno">Phno:</label> 
    <input type="number" name="phno" data-maxlength="10" oninput="this.value=this.value.slice(0,this.dataset.maxlength)" required />
</p>

<p>
    <label for="Address">Address:</label> 
    <input type="text" name="address" required>
</p>

<p>
    <label for="check_In">Check In:</label> 
    <input type="date" name="check_in" min='2022-01-13' required>
</p>

<p>
    <label for="check_Out">Check Out:</label> 
    <input type="date" min='2022-01-13' name="check_out" required >
</p>

<p>
	<label for="room_Type"> Room Type </label>
	<select name="roomtype"  id="roomtype" required>
	<option value=""> Select  </option>
    <option value="Standard_Ac"> Standard Ac  </option>
    <option value="Standard_Non_Ac"> Standard Non-Ac </option>
	</select>
</p>

<p>
	<input type="submit" id="submit" name="submit" value="Submit">
</p>

</form>

</section>
<a href="customer.php">
<button>Back</button>
</a>
</center>
</body>
</html>
