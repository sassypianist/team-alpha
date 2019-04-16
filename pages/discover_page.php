<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/discover.css">
	<title>Discover Nearby Eats</title>
	<script data-cfasync="false" charset="utf-8" > ;(function (g) { g.aurycReadyCb = g.aurycReadyCb || []; var d = document, i, am = d.createElement("script"), h = d.head || d.getElementsByTagName("head")[0],aex = { "src": "//cdn-dev.userty.com/980-usc-sandbox1com/container.js", "data-cfasync": "false", "async": "true", "defer": "true", "data-vendor": "userty", "data-role": "container", "charset": "utf-8" }; for (var attr in aex) { am.setAttribute(attr,aex[attr]); } h.appendChild(am); })(window); </script>
</head>
<body>
	<div id="menu">
				<img src="../resources/images/close.png" id="close">
				<div id="menu-links">
					<a href="search.php">Search Vendors</a>
					<a href="discover_page.php">Discover</a>
					<a href="userprofile.php?user_id=<?php echo $_POST['user_id']; ?>">Your Favorites</a>
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
				Discover
			</div>

			<div id="discover">
				<div class="recommendation" id="kogi">
					<div class="recommendation-header">
						<h1>Kogi Taco Truck</h1>
						<button><a href="https://goo.gl/maps/uREnVdpHqUJ2">Locate</a></button>
					</div>

					<div class="recommendation-content">
						<div class="profile">
							<img src="../resources/images/rory.jpg" class="img">
							<p>Rory Mahler</p>
							<div class="stars">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
						<div class="review">
							<p>"So happy this truck was at Conquest -- the bulgogi tacos were the best! Hope to find this truck around LA soon."</p>
						</div>
						<div class="bookmark"><img src="../resources/images/save.png" id="save_button1" class="unchecked"></div>
					</div>

					<div class="clearfloat"></div>
				</div>



				<div class="recommendation" id="prince">
					<div class="recommendation-header">
						<h1>Prince of Venice</h1>
						<button><a href="https://goo.gl/maps/eivGCfZVDew">Locate</a></button>
					</div>

					<div class="recommendation-content">
						<div class="profile">
							<img src="../resources/images/ezra.jpg" class="img">
							<p>Ezra Koenig</p>
							<div class="stars" id="threestars">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
						<div class="review">
							<p>"For a vendor with the audacity to to call themselves Prince of Venice, I expected royal perfection -- and it was close to it, I got Pasta alla Pollo and Curry from a truck. I just wish the prices weren't royally as grand."</p>
						</div>
						<div class="bookmark"><img src="../resources/images/save.png" id="save_button2" class="unchecked"></div>
					</div>

					<div class="clearfloat"></div>
				</div>



				<div class="recommendation" id="nomad">
					<div class="recommendation-header">
						<h1>The Hungry Nomad</h1>
						<button><a href="https://goo.gl/maps/QDQerA4voBs">Locate</a></button>
					</div>

					<div class="recommendation-content">
						<div class="profile">
							<img src="../resources/images/amaka.jpg" class="img">
							<p>Amaka Oneheh</p>
							<div class="stars">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
						<div class="review">
							<p>"A solid lunch option -- they offer a variety of different cuisines, so you can order whatever you feel like! The only issue is that it takes awhile -- so make sure you get there as early as possible!"</p>
						</div>
						<div class="bookmark"><img src="../resources/images/save.png" id="save_button3" class="unchecked"></div>
					</div>

					<div class="clearfloat"></div>
				</div>

			</div>
		</div>
	</div>
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