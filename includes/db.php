<?php ob_start();

$db_host= "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db_transport";

$connection = mysqli_connect($db_host, $db_user,$db_pass,$db_name);

$query = "SET NAMES utf8";
mysqli_query($connection,$query);



?>


