<?php

$con = mysqli_connect('localhost','root','');

if(!$con)
{
	echo "not connected to server";
}

if(!mysqli_select_db($con,'email1'))
{
	echo "datbase not selected";
}
$EMAIL = $_POST['email'];

$sql = "INSERT INTO email2(username) VALUES ('$EMAIL')";

if(!mysqli_query($con,$sql))
{
	echo "not inserted";
}
else
{
	echo "inserted";
}

header("refresh:2; url=index.html");

?>