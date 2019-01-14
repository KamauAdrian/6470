<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div class="container">

	<div class="row">
		<center><h1>Login Form</h1></center>
	</div>
	<div class="row bs-forms">
<form method="post" action="login.php">
	<div class="form-group">
		<label for="phone">Phone :</label>
		<input type="text"  name="phone" id="phone :" placeholder="Phone">
	</div>
	<div class="form-group">
		<label for="password">Password :</label>
		<input type="password"  id ="password" name="password" placeholder="Password">
	</div>
	
	<div class="form-group">
	<input type="submit" class="btn btn-info btn-sm" name="log" value="Sign in"><a href="forgot.php">forgot password</a>
	</div>
	
</form>
	</div>
</div>
</body>
</html>
<?php 

if (isset($_POST['log'])) {
 	include 'connection.php';
		$phone=$_POST['phone'];
		$pass=md5($_POST['password']);
	
	$query = "SELECT * FROM 6470users WHERE phone='$phone' && password ='$pass'";

	$run = mysqli_query($conn,$query);
	$count=mysqli_num_rows($run);
	if ($count==1) {
		// echo "Done!!!";
		$_SESSION['phone']=$phone;
		// // $_SESSION['user']=$user;
		header('Location:index.php');
	}else{
		echo "Invalid username or password";
	}

 	// f2464f95bdbfce9b887c2d5fdf039f5
 	// f2464f95bdbfce9b887c2d5fdf039f5a

 } ?>