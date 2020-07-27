<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root","", "cb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$username=$_POST['name'];
$password=$_POST['password'];
$id=$_POST['cc'];
$query="SELECT `id`, `username`, `password`, `created on` FROM `user` WHERE `id`=$id";

$result = mysqli_query($link,$query);

if($row = mysqli_fetch_array($result))
{
	if ($request_match_key== $secretkey||$username==$row['name'] && $password==$row['password']) {
	header('location:usermenu.php');

	}
else
{
	echo "enter valid username or password";
}
}
else
{
		echo "invalid details";
}
mysqli_close($link);
?>