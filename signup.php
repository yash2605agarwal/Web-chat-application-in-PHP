<?php    
include 'dbh.php';
$unmae=$_POST['uname'];
$email=$_POST['Email'];
$pass=$_POST['Password'];

$sql="insert into signupp( username ,email,passoword)
values('$unmae','$email','$pass')";
$result=$conn->query($sql);


header("Location:index.php");





?>
