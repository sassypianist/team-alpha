<?php
session_start();

if ( !isset($_SESSION['email']) || empty($_SESSION['email']) ) {
	$error = "User does not exist";
} else {

	$host = "460.itpwebdev.com";
	$user = "alpha_admin";
	$pass = "alpha2019";
	$db = "alpha_vendas_db";

// DB Connection
	$mysqli = new mysqli($host, $user, $pass, $db);
	if ( $mysqli->connect_errno ) {
		echo $mysqli->connect_error;
		exit();
	}

	$mysqli->set_charset('utf8');


	
$sql = "SELECT user.user_name AS name, user.user_pic AS user_pic, reviews.review AS review, reviews.rating AS rating, truck.truck_name AS truck
		FROM reviews
		LEFT JOIN user
			ON reviews.user_id = user.user_id
		LEFT JOIN truck
			ON reviews.truck_id = truck.truck_id
		WHERE user.email = '" . $_SESSION['email'] . "';";

	$results = $mysqli->query($sql);

	if ( $results == false) {
		echo $mysqli->error;
		exit();
	}

	$row = $results->fetch_assoc();

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
        <link rel="stylesheet" href="../css/profile.css">
	<title>Profile Page</title>
	<script data-cfasync="false" charset="utf-8" > ;(function (g) { g.aurycReadyCb = g.aurycReadyCb || []; var d = document, i, am = d.createElement("script"), h = d.head || d.getElementsByTagName("head")[0],aex = { "src": "//cdn-dev.userty.com/980-usc-sandbox1com/container.js", "data-cfasync": "false", "async": "true", "defer": "true", "data-vendor": "userty", "data-role": "container", "charset": "utf-8" }; for (var attr in aex) { am.setAttribute(attr,aex[attr]); } h.appendChild(am); })(window); </script>
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
				<div id="profile-header">
					<img class="nav-bar toggle-button" src="../resources/images/white_hamburger.png">
					<img src="<?php echo $row['user_pic']; ?>" id="user_pic">
					<h1><?php echo $row['name']; ?></h1>
					<p>Los Angeles, CA</p>
				</div>
			</div>

			<div id="favorites">
				<h1>Favorites</h1>

				<div class="favorite" id="amazebowl">
					<a href="vendorpage.html"><img src="../resources/images/amazebowl_profile.png"></a>
					<p>Amazebowls</p>
					<div class="stars">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<button><a href="https://goo.gl/maps/tsdw5qRFzAL2">Locate</a></button>
				</div>

				<div class="favorite">
					<img src="../resources/images/taco_profile.png">
					<p>El Chato Taco</p>
					<div class="stars">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<button><a href="https://goo.gl/maps/m7VFfkrrpMw">Locate</a></button>
				</div>

				<div class="clearfloat"></div>
			</div>

			<div id="reviews">
				<h1>My Reviews</h1>

				<div class="review">
					<div class="identity">
						<img class="profile-pic" src="../resources/images/amazebowl_profile.png">
						<p>Amazebowls</p>
						<div class="stars" id="fivestars">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>

					<div class="user-review">
						<p>It was great! I loved it!</p>
					<div class="clearfloat"></div>
						
					</div>
				</div>

				<div class="review">
					<div class="identity">
						<img class="profile-pic" src="../resources/images/taco_profile.png">
						<p>El Chato Taco</p>
						<div class="stars">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>

					<div class="user-review">
						<p>Best tacos I ever had.</p>
					<div class="clearfloat"></div>
						
					</div>
				</div>

				<div class="review">
					<div class="identity">
						<img class="profile-pic" src="../resources/images/kogi_profile.jpg">
						<p>Kogi Food Truck</p>
						<div class="stars" id="threestars">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>

					<div class="user-review">
						<p>It was okay for a food truck.</p>
					<div class="clearfloat"></div>
						
					</div>
				</div>

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



</script>
</html>