<?php
session_start();
$host = "460.itpwebdev.com";
$username = "alpha_admin";
$password = "alpha2019";
$db = "alpha_vendas_db";


$page_url = preg_replace('/&page=\d*/', '', $_SERVER['REQUEST_URI']);
$results_per_page = 3;

$mysqli = new mysqli($host, $username, $password, $db);

if ($mysqli->connect_errno) {
	echo $mysqli->connect_error;
	exit();
} 

if ( !isset($_SESSION['email']) || empty($_SESSION['email']) ) {
	$sql = "SELECT DISTINCT user.user_pic AS pic, user.user_name AS name, truck.truck_name AS truck, reviews.review AS review, truck.truck_rating AS truck_rating, truck.location AS location, truck.truck_id AS truck_id, truck.truck_img AS truck_img
		FROM reviews
		LEFT JOIN user
			ON reviews.user_id = user.user_id
		LEFT JOIN truck
			ON reviews.truck_id = truck.truck_id
		ORDER BY RAND()
		LIMIT 3;";
} else {

	$sql = "SELECT DISTINCT user.user_pic AS pic, user.user_name AS name, truck.truck_name AS truck, reviews.review AS review, truck.truck_rating AS truck_rating, truck.location AS location, truck.truck_id AS truck_id, truck.truck_img AS truck_img
		FROM reviews
		LEFT JOIN user
			ON reviews.user_id = user.user_id
		LEFT JOIN truck
			ON reviews.truck_id = truck.truck_id
		WHERE user.email != '" . $_SESSION['email'] . "'
		ORDER BY RAND()
		LIMIT 3;";
}

$results = $mysqli->query($sql);

if ( $results == false ) {
	echo $mysqli->error;
	exit();
}


$mysqli->close();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="../css/table.css">
		<link rel="stylesheet" href="../css/discover.css">
		<link rel="stylesheet" href="../css/vendas-style.css">
	<title>Discover Nearby Eats</title>
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
				Discover
			</div>

			<div id="discover">
				<table cellspacing="0">
					<tbody>

						<?php while ($row = $results->fetch_assoc() ): ?>
							<tr>
								<td class="truckcover" style='background-image: url("<?php echo $row['truck_img']; ?>"); background-repeat: no-repeat; background-size: cover; background-position: center; '>
									<div class="photocover">
    
										<h1><a class="medium-title" href="vendorpage.php?truck_id=<?php echo $row['truck_id']; ?>"><?php echo $row['truck']; ?></a></h1>
										<button><a href="<?php echo $row['location']; ?>">Locate</a></button>
									</div>
								</td>
								<td>
									<img src="<?php echo $row['pic']; ?>" class="img">
									<p><?php echo $row['name']; ?></p>
								</td>
								<td class="review stars">
									<p>"<?php echo $row['review']; ?>"</p>
									
									<div class="ratings_img starry">
										<img class="discover_rating" src="../resources/images/<?php echo $row['truck_rating']; ?>star.png">
									</div>

									<!-- <div class="bookmark">
										<img src="../resources/images/save.png" id="save_button1" class="unchecked">
									</div> -->
								</td>
							</tr>
						<?php endwhile; ?>	

					</tbody>
				</table>
				
				<div class="clearfloat"></div>

			</div>
		</div>
	</div>
</body>

<script>
	// document.getElementById("save_button1").onclick = function() {

	// 	if (document.querySelector("#save_button1").classList.contains('unchecked')) {
	// 		console.log("if passed");

	// 		document.getElementById("save_button1").src = "../resources/images/selected.png";
	// 		document.querySelector("#save_button1").classList.remove("unchecked");
 //   		}
 //   		else {
 //   			document.getElementById("save_button1").src = "../resources/images/save.png";
 //   			document.querySelector("#save_button1").classList.add("unchecked");
 //    	}

	// }

	// document.getElementById("save_button2").onclick = function() {

	// 	if (document.querySelector("#save_button2").classList.contains('unchecked')) {
	// 		console.log("if passed");

	// 		document.getElementById("save_button2").src = "../resources/images/selected.png";
	// 		document.querySelector("#save_button2").classList.remove("unchecked");
 //   		}
 //   		else {
 //   			document.getElementById("save_button2").src = "../resources/images/save.png";
 //   			document.querySelector("#save_button2").classList.add("unchecked");
 //    	}

	// }

	// document.getElementById("save_button3").onclick = function() {

	// 	if (document.querySelector("#save_button3").classList.contains('unchecked')) {
	// 		console.log("if passed");

	// 		document.getElementById("save_button3").src = "../resources/images/selected.png";
	// 		document.querySelector("#save_button3").classList.remove("unchecked");
 //   		}
 //   		else {
 //   			document.getElementById("save_button3").src = "../resources/images/save.png";
 //   			document.querySelector("#save_button3").classList.add("unchecked");
 //    	}

	// }

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