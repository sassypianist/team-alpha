<?php if ( !isset($_SESSION['logged_in']) ) : ?>
		<a href="login_page.php">Login</a>

		
			
		
<?php else : ?>
		<a href="logout.php">Logout</a>
		

<?php endif; ?>