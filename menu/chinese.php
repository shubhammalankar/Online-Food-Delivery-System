<html>
<head>
<title>
Chinese Cuisine
</title>
<meta charset="utf-8">
<link href="cat.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="line">
	</div>
<!---->
	<div class="top">
		<div class="left">
			<h3><a href="">eat-it.com</a></h3>
		</div>	
		<div class="right">
		<ul>
          			<li><a href="#">About Us</a></li>
          			<li><a href="#">Contact</a></li>
        		</ul>
		</div>
	</div>
	

<div class="sidenav">	
<ul >
  <li><a href="menu\chinese.php">Chinese</a></li>
  <li><a href="menu\north.php">North Indian</a></li>
  <li><a href="menu\south.php">South Indian</a></li>
  <li><a href="menu\italian.php">Italian</a></li>
  <li><a href="menu\snacks.php">Snacks</a></li>
  <li><a href="menu\desserts.php">Desserts</a></li>
</ul>
</div>

<div class="menu">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fds";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM menu WHERE category='Chinese' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " " . $row["itemno"]. "......." . $row["iname"]. "....... " . $row["cost"]."          "."<button class='btn' type='submit'>ADD TO CART</button>". "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</div>
<!--
<div class="menu">
<h2>Chinese</h2>
<br>
<form action="">
<input type="checkbox" name="vehicle" value="Bike">Hakka Noodles.............................................Rs.150<br>
<input type="checkbox" name="vehicle" value="Car">Manchow Soup.............................................Rs.120<br> 
<input type="checkbox" name="vehicle" value="Bike">Schezwan Rice..............................................Rs.180<br>
<input type="checkbox" name="vehicle" value="Car">Triple Rice....................................................Rs.200<br>
</form>
</div>
-->
</body>
</html>