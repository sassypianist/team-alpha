<?php

session_start();
session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/discover.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/logout.css">
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

			<div id="login">
				<h3>Later gator!</h3>
				<a href="login_page.php" id="register_redirect">Click here to log back in.</a>
			</div>
		</div>

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
