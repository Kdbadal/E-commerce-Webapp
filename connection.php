<?php

$servername = "localhost";
$userrname = "root";
$password = "";
$dbname = "spicehub";

$con = "mysqli_connect($servername,$userrname,$password,$dbname)";

if ($con)
{
	echo "connection success";
}

?>