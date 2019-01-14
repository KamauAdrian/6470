<?php 
session_start();
include 'connection.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>forgot password</title>
 </head>
 <body>
 <form method="post" action="forgot.php">
	<input type="text" name="user" placeholder="Your Username"><br /><br />
	<input type="text" name="phone" placeholder="Phone Number">
	<input type="submit" name="fogot" value="Submit">
</form>
 </body>
 </html>
<?php 
if (isset($_POST['fogot'])) {
	$username=$_POST['user'];
	$phonenumber=$_POST['phone'];
	$query="SELECT * FROM 6470users WHERE username='$username' && phone='$phonenumber'";
	$run= mysqli_query($conn,$query);
	$result = mysqli_fetch_array($run);
	if ($result) {
		$_SESSION['user']=$username;
		$_SESSION['phone']=$phonenumber;
		header('location:reset.php');
		
	}else{
		echo "Too Bad For you!!!";
	}
}


 ?>