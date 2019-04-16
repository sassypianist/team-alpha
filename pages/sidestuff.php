<?php
session_start();

$host = "460.itpwebdev.com";
$username = "alpha_admin";
$pass = "alpha2019";
$db = "alpha_vendas_db";
$tbl_name = "user";

$mysqli = new mysqli($host, $username, $pass, $db);


if ($mysqli->connect_errno) {
	echo $mysqli->connect_error;
	exit();
} 

if ( !isset($_SESSION['logged_in']) || !$_SESSION['logged_in'] ) {
	// User Not Logged In.

	if ( isset($_POST['email']) && isset($_POST['password']) ) {
		// Form was submitted


		$con = mysqli_connect($host, $username, $pass, $db);

		$email = $_POST['email']; 
		$password = $_POST['password']; 

		$result = mysqli_query($con, "SELECT user.user_id AS user_id FROM $tbl_name WHERE email = '$email' and password = '$password'");
		$count = mysqli_num_rows($result); 

		if ( empty($_POST['email']) || empty($_POST['password']) ) {
			// Missing username or password.
			echo $error = "Please enter email and password.";
		} 
		elseif ( $count == 1 ) {
			// Valid credentials. Log in the user.
			$_SESSION['logged_in'] = true;
			$_SESSION['email'] = $email; 
    		$_SESSION['password'] = $password; 
    		// get the result set from the query
    		$result = mysqli_fetch_array($result); 
    		
			header('Location: ../pages/search.php');

			echo $error = "error";
		} 
		else {
			// Invalid credentials.
			echo $error = "Invalid email or password.";
		}
	}
}

else {

}


?>