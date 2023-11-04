<?php

$conn=new mysqli("localhost","root","","g10_db");
if($conn->connect_error)
{
	die("error to connect: ".$conn->connect_error);
}

$sql="INSERT INTO `form` (`email`, `name`, `password`, `phone`) VALUES ('".$_POST['email']."','".$_POST['username']."','".$_POST['password']."','".$_POST['phone']."')";

header("location: welcome2.html");

if($conn->query($sql)===TRUE)
{
	header("location: welcome.html");
}
$conn->close();
?>