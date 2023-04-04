<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link href="layout.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<body>
	<div class="line">
	</div>
<!---->
		<div class="top">
			<div class="left">
			<h3><a href="home.html">eat-it.com</a></h3>
		</div>
	<div class="right">
		<ul>
          <li><a href="aboutus.html">About Us</a></li>
          <li><a href="contactus.html">Contact Us</a></li>
        </ul>
</div>


<div class="pane">

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
	</div>


</body>
</html>