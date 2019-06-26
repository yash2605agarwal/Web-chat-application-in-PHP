<?php

session_start();
include 'dbh.php';
$msg=$_POST['msg'];
$name=$_SESSION['name'];
$sql="insert into post(msg) values ('$msg')";
$result=$conn->query($sql);

header("Location:home.php");

?>