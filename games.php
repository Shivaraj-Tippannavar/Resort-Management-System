<!DOCTYPE HTML>
<html>
<head>
  <title>GAMES</title>
  <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body background="game.jpeg">
<center>

<section class="form">
<form action="insert_game.php" name="insert" method="post" onclick=""> 

<p>
<h1><br><br>
	<label for="Games"> GAMES  </label></h1><br>
	<p>
    <label for="Custid">Enter the Custid</label> 
    <input type="number" name="Custid" required>
    </p> 
	<select name="Game"  id="Game" required>
	<option value=""> Select  </option>
    <option value="Table Tennis"> TABLE TENNIS  </option>
	<option value="Badminton"> BADMINTON </option>
	<option value="Chess"> CHESS  </option>
    <option value="Carrom"> CARROM </option>
	
	</select><br>
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
