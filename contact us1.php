<?php


$con = mysqli_connect('localhost','root');

if ($con){
	echo "Connection successfull";
}
else 
{
echo "connection no";
}

mysqli_select_db($con, 'Spicehub');

$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['mobile'];
$d = $_POST['message'];


$query = "insert into contact_1
(name,email,mobile,message)
 values ('$a','$b','$c','$d')";
 
echo "$query";
if(mysqli_query($con, $query))
header('location:index.php');
mysqli_close($con);

?>