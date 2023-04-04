<?php 
	session_start();

	// variable declaration
	$number = "";
	$addr = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'fds');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$addr = mysqli_real_escape_string($db, $_POST['addr']);
		$number = mysqli_real_escape_string($db, $_POST['number']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($number)) { array_push($errors, "Contact Number is required"); }
		if (strlen($number)<10 || strlen($number)>10) { array_push($errors, "Contact Number is not valid"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($addr)) { array_push($errors, "Address is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO customer (email, number, addr, password) 
					  VALUES('$email', '$number', '$addr', '$password')";
			mysqli_query($db, $query);

			$_SESSION['email'] = $email;
			$_SESSION['success'] = "You are now logged in";
			header('location: home.html');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM customer WHERE email='$email' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "You are now logged in";
				header('location: home.html');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>