<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link href="layout.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="line">
	</div>
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
		<h2>Register</h2>
	</div>
	
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Contact Number</label>
			<input type="tel" name="number" value="<?php echo $number; ?>">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="addr" value="<?php echo $addr; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
	</div>
</body>
</html>