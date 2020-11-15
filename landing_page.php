<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
{
    header("location: welcome.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Jawa Junkyard & Droids</title>
			<link rel="stylesheet" href="rush.css">
	</head>
	<body>
	<ul>
	<li><a href="login.php">Login</a></li>
	<li><a class="active "href="landing_page.php">Shop</a></li>
	<li><a href="register.php">Register</a></li>
	<li><a href="view_basket.php">Basket</a></li>
	<li style="float:right"><a href="logout.php">LogOut</a></li>
	</ul>
		<span>Already have an account? <a href="login.php">Login here</a>.</span>
		<span>Don't have an account? <a href="register.php">Sign up now</a>.</span>
		<form action="search_product.php" method="POST">
			Search products: <input type="text" name="search_terms" value="" />
			Search by: <select name="search-by" id="search-by">
				<option value="name">Name</option>
				<option value="id">ID</option>
				<option value="cat">Category</option>
				<option value="price">Price</option>
			  </select>
			  <input type="submit" name="submit" value="Search" />
		</form>
</body></html>


