<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "xssstored";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Database not connected. Please Contact Admin. : '.mysqli_connect_error();

}
?>
