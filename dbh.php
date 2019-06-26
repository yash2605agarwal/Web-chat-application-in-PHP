<?php

$conn=mysqli_connect("localhost","root","","mydatabse");
if(!$conn){
	die("connection failed".mysqli_connect_error());
}
?>