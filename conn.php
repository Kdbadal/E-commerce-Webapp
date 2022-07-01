<?php

$username = "root";
$password = "";
$server = 'localhost';
$database = 'spicehub';

$con = mysqli_connect($server,$username,$password,$database);

if ($con){
	echo "Connection successfull";
}
else 
{
echo "connection no";
}

?>