<?php

$db_server="localhost";
$db_database="6470";
$db_user="root";
$db_password="";
$conn=mysqli_connect($db_server,$db_user,$db_password,$db_database);
$conn_error= "Failled to connect to Database";

if (!$conn) {
	echo "".$conn_error;
}



?>