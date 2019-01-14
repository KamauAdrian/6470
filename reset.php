<?php 
session_start();
if (!isset($_SESSION['user']) && !isset($_SESSION['phone'])) {
	header('location:forgot.php');
}else{
	include 'connection.php';
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>reset</title>
</head>
<body>
	<center>
		<h3>Reset Password</h3>
	</center>
	<form method="post"  action="reset.php">
		<input type="password" name="pass1" placeholder="Create new Password">
		<br /><br />
		<input type="password" name="pass2" placeholder="Confirm new Password">
		<input type="submit" name="reset" value="Reset Password">
	</form>

</body>
</html>
<?php 
if (isset($_POST['reset'])) {
$user=$_SESSION['user'];
$phone=$_SESSION['phone'];
$passone=$_POST['pass1'];
$passtwo=$_POST['pass2'];

if ($passone ==$passtwo) {
	 $password = md5($passone);
$query = "SELECT * FROM 6470users WHERE username='$user' AND phone='$phone'";
$run = mysqli_query($conn,$query);
$row = mysqli_fetch_row($run);
if ($row) {
	$id=$row[0];
	$sql = "UPDATE 6470users SET password = '$password' WHERE id = '$id'";
	$result = mysqli_query($conn,$sql);
	if ($result) {
		header('location:login.php');
	}else{
		echo "An Error Occurred";
	}

}
	
}

	
}
 ?>