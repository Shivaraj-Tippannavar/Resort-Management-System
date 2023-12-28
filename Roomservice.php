<!DOCTYPE html>
<html lang="en">
<head>
  <title>food Form</title>
  <link rel="stylesheet" type="text/css" href="home.css">
</head>

<body background="food.jpeg">
<center>
<p>
<h2> Menu card </h2>
<h3> select all the dishes at one time </h3>

<section class="form">
<form action="insert_food.php" name="insert" method="post" onclick="">
<p>
    <label for="Custid">Enter the Custid</label> 
    <input type="number" name="Custid">
</p>

<p>
<h3>
	<label for="Break_fast"> Break Fast </label></h3>
	<select name="Breakfast"  id="Breakfast">
	<option value=""> Select  </option>
    <option value="Idli"> Idli  </option>
	<option value="Vada"> Vada </option>
	<option value="Dosa"> Dosa  </option>
    <option value="Puri"> Puri </option>
	
	</select><br>
</p>

<p>
<h3>
	<label for="Lunch_"> Lunch </label></h3>
	<select name="Lunch"  id="Lunch">
	<option value=""> Select  </option>
    <option value="Veg Biriyany"> Veg Biriyany  </option>
	<option value="Chicken Biriyany"> Chicken Biriyany </option>
	<option value="Veg meal"> Veg meal  </option>
    <option value=" Non-veg Meal"> Non-veg Meal </option>
	
</select><br>
</p>

<p>	
<h3>
	<label for="Evening_snack"> Evening snacks </label></h3>
	<select name="Eveningsnack"  id="Eveningsnack">
	<option value=""> Select  </option>
    <option value="Tea"> Tea  </option>
	<option value="Coffe"> Coffe </option>
	<option value="Badam milk"> Badam milk  </option>
    <option value="cookies"> cookies </option>
	
</select><br>
</p>

<p>	
<h3>
	<label for="Dinner_"> Dinner </label></h3>
	<select name="Dinner"  id="Dinner">
	<option value=""> Select  </option>
    <option value="Veg meal (rooti,rice sambar)"> Veg meal (rooti,rice sambar)  </option>
	<option value="Non-veg meal (tandor,chicken biryani"> Non-veg meal(tandor,chicken biryani)</option>
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