<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/discover.css">
         <link rel="stylesheet" href="../css/main.css">
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
					<form action="register_page.php" method="POST">
						<label for="name" id="email-label">Name:</label>
						<input name="name" type="text" placeholder="name">

						<label for="email" id="email-label">Email:</label>
						<input name="email" type="text" placeholder="email">

						<label for="vemail" id="email-label">Verify Email:</label>
						<input name="vemail" type="text" placeholder=" email">

						<label for="password">Password:</label>
						<input name="password" type="text" placeholder="password">

						<label for="vpassword">Verify Password:</label>
						<input name="vpassword" type="text" placeholder="vpassword">

						<button type="submit" id="submit" value="login">Login</button>
					</form>
					<a href="login_page.php" id="login_redirect">Have an account? Login here.</a>
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