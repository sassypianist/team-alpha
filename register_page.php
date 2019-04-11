<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/discover.css">
	<title>Register</title>
</head>
<body>
	<div id="menu">
				<img src="../resources/images/close.png" id="close">
				<div id="menu-links">
					<a href="search.html">Search Vendors</a>
					<a href="discover_page.html">Discover</a>
					<a href="userprofile.html">Your Favorites</a>
					<a href="login_page.php">Login</a>
					<a href="register_page.php">Register</a>
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

			<div id="login">Register</div>
			<form action="/register_page.php">
				<input name="firstname" type="text" placeholder="first name"> <br />
				<input name="lastname" type="text" placeholder="last name"> <br />
				<input name="email" type="text" placeholder="email"> <br />
				<input name="password" type="text" placeholder="email"> <br />
				<input type="submit" value="Register">
			</form>


</body>

<script>
	document.getElementById("save_button1").onclick = function() {

		if (document.querySelector("#save_button1").classList.contains('unchecked')) {
			console.log("if passed");

			document.getElementById("save_button1").src = "../resources/images/selected.png";
			document.querySelector("#save_button1").classList.remove("unchecked");
   		}
   		else {
   			document.getElementById("save_button1").src = "../resources/images/save.png";
   			document.querySelector("#save_button1").classList.add("unchecked");
    	}

	}

	document.getElementById("save_button2").onclick = function() {

		if (document.querySelector("#save_button2").classList.contains('unchecked')) {
			console.log("if passed");

			document.getElementById("save_button2").src = "../resources/images/selected.png";
			document.querySelector("#save_button2").classList.remove("unchecked");
   		}
   		else {
   			document.getElementById("save_button2").src = "../resources/images/save.png";
   			document.querySelector("#save_button2").classList.add("unchecked");
    	}

	}

	document.getElementById("save_button3").onclick = function() {

		if (document.querySelector("#save_button3").classList.contains('unchecked')) {
			console.log("if passed");

			document.getElementById("save_button3").src = "../resources/images/selected.png";
			document.querySelector("#save_button3").classList.remove("unchecked");
   		}
   		else {
   			document.getElementById("save_button3").src = "../resources/images/save.png";
   			document.querySelector("#save_button3").classList.add("unchecked");
    	}

	}

    document.querySelector(".nav-bar").onclick = function() {
    	document.getElementById("menu").style.transform = "translate(290px, 0px)";
    	document.getElementById("container").style.transform = "translate(290px, 0px)";
    }

    document.querySelector("#close").onclick = function() {
    	document.getElementById("menu").style.transform = "translate(0px, 0px)";
    	document.getElementById("container").style.transform = "translate(0px, 0px)";
    }


</script>

</html>
