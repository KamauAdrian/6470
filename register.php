<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>
<form method="post" action="register.php">
	<input type="text" name="user" placeholder="user Name"><br /><br />
	<input type="number" name="phone" placeholder="phone Number"><br /><br />
	<input type="password" name="pass" placeholder="Password"><br /><br />
	<input type="submit" name="reg" value="Register"><br /><br />
</form>
</body>
</html>
<?php
$user=$phone=$pass="";
if (isset($_POST['reg'])) {
	include 'connection.php';
		$user=$_POST['user'];
		$phone=$_POST['phone'];
		$pass=md5($_POST['pass']);

		$sql = "INSERT INTO 6470users VALUES(null,'$user','$phone','$pass')";
	$run = mysqli_query($conn,$sql);
	if ($run) {
		$_SESSION['phone']=$phone;
		header('Location:index.php');
	}else{
		echo "Failled To Register";
	
	}
	
	
}



?>