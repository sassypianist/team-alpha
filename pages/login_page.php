<?php

session_start();

$host = "460.itpwebdev.com";
$username = "alpha_admin";
$pass = "alpha2019";
$db = "alpha_vendas_db";

$mysqli = new mysqli($host, $username, $pass, $db);


if ($mysqli->connect_errno) {
	echo $mysqli->connect_error;
	exit();
} 

if ( !isset($_SESSION['logged_in']) || !$_SESSION['logged_in'] ) {
	// User Not Logged In.

	if ( isset($_POST['email']) && isset($_POST['password']) ) {
		// Form was submitted

		$email = $_POST['email'];

		$password = hash('sha256', $_POST['password']);
		
		$sql = "SELECT password
  				FROM user
  				WHERE email = '" . $email . "';";


  		$results = $mysqli->query($sql);

		if ( $results == false) {
			echo $mysqli->error;
			exit();
		}

		$row = $results->fetch_assoc();


		if ( empty($_POST['email']) || empty($_POST['password']) ) {
			// Missing username or password.
			$error = "Please enter email and password.";
		} 

		elseif ( $row['password'] == $password ) {
			// Valid credentials. Log in the user.
			$_SESSION['logged_in'] = true;
			$_SESSION['email'] = $_POST['email'];
			header('Location: ../pages/userprofile.php');
		} 
		else {
			// Invalid credentials.
			$error = "Invalid email or password.";
		}
	}
}

else {

	header('Location: ../pages/search.php');
}


?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/discover.css">
        <link rel="stylesheet" href="../css/login.css">
	<title>Login</title>
</head>
<body>
	<div id="menu">
				<img src="../resources/images/close.png" id="close">
				<div id="menu-links">
					<a href="search.php">Search Vendors</a>
					<a href="discover_page.php">Discover</a>
					<a href="userprofile.php">Your Favorites</a>
					<?php include 'nav.php'; ?>
				</div>
	</div>
	<div id="container">
		<div id="panel">
			<div id="top">
				<img class="nav-bar toggle-button" src="../resources/images/hamburger-icon.png">
				<div id="top-logo">
					<img class="logo" src="../resources/images/logo.svg">
					<span>Vendas</span>
				</div>
			</div>

			<div id="discover-header">
				Login
			</div>

			<div id="login">
				<h3>Welcome</h3>
					<form action="login_page.php" method="POST">

						<label for="email" id="email-label">Email:</label>
						<input name="email" type="text" placeholder="email"> <br />

						<label for="password">Password:</label>
						<input name="password" type="password" placeholder="password"> <br />
						
						<button type="submit" id="submit" value="login">Login</button>
					</form>

					<a href="register_page.php" id="register_redirect">Don't have an account? Click here to register.</a>
					<?php
						if ( isset($error) && !empty($error) ) {
							echo $error;
						}
					?>
			</div>


</body>

<script>

    document.querySelector(".nav-bar").onclick = function() {
    	document.getElementById("menu").style.transform = "translate(290px, 0px)";
    	document.getElementById("container").style.transform = "translate(290px, 0px)";
    }

    document.querySelector("#close").onclick = function() {
    	document.getElementById("menu").style.transform = "translate(0px, 0px)";
    	document.getElementById("container").style.transform = "translate(0px, 0px)";
    }

    document.querySelector("#register_redirect").onmouseenter = function() {
    	document.querySelector("#register_redirect").style.textDecoration = "underline";
    }

 	document.querySelector("#register_redirect").onmouseleave = function() {
    	document.querySelector("#register_redirect").style.textDecoration = "none";
    }



</script>

</html>
