<?php
session_start();
if (!isset($_POST['name']) || empty($_POST['name']) ) {
	$error = "Please fill out all required fields.";
}


elseif (!isset($_POST['email']) || empty($_POST['email']) ) {
	$error = "Please fill out all required fields.";
}

elseif (!isset($_POST['vemail']) || empty($_POST['vemail']) ) {
	$error = "Please fill out all required fields.";
}

elseif (!isset($_POST['password']) || empty($_POST['password']) ) {
	$error = "Please fill out all required fields.";
} 

elseif (!isset($_POST['vpassword']) || empty($_POST['vpassword']) ) {
	$error = "Please fill out all required fields.";
} 

elseif (($_POST['password'] !== $_POST['vpassword']) || ($_POST['email'] !== $_POST['vemail']) ) {
		$error = "Password or email does not match.";
}

elseif (!isset($_POST['phone_number']) || empty($_POST['phone_number']) ) {
	$error = "Please fill out all required fields.";
}

else {
	$host = "460.itpwebdev.com";
	$user = "alpha_admin";
	$pass = "alpha2019";
	$db = "alpha_vendas_db";

	$mysqli = new mysqli($host, $user, $pass, $db);
	if ( $mysqli->errno ) {
		echo $mysqli->error;
		exit();
	}

	$password = hash('sha256', $_POST['password']);


		$sql = "INSERT INTO user (user_name, email, password, phone_number)
						VALUES ( '"
						. $_POST['name']
						. "', '"
						. $_POST['email']
						. "', '"
						. $password
						. "', "
						. $_POST['phone_number']
						. ");";

		// echo "<hr>" . $sql . "<hr>";

		$results = $mysqli->query($sql);
		if ( !$results ) {
			echo $mysqli->error;
			exit();
		}

		$mysqli->close();

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
        <link rel="stylesheet" href="../css/register.css">
	<title>Register</title>
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
				Register
			</div>

			<div id="register">
				<h3>Create a new account</h3>
					<?php if ( isset($error) && !empty($error) ) : ?>
						<?php echo $error; ?>
						<?php echo $_POST['email']; ?>
					<?php else : ?>
						<p>Welcome, <?php echo $_POST['name']; ?>, to vendas!</p>
						<a href="login_page.php" id="login_redirect">Please click here to login to your new account.</a>
					</div>
					<?php endif; ?>

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

    document.querySelector("#login_redirect").onmouseenter = function() {
    	document.querySelector("#login_redirect").style.textDecoration = "underline";
    }

 	document.querySelector("#login_redirect").onmouseleave = function() {
    	document.querySelector("#login_redirect").style.textDecoration = "none";
    }

</script>

</html>
