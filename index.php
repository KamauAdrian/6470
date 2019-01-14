<?php 
session_start();
include 'connection.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
	<?php 

if (!isset($_SESSION['phone'])) {
	
	header('Location:login.php');
}

	 ?>
<h1>Welcome To my Home Page</h1>
<a href="logout.php">Logout</a>
</body>
</html>