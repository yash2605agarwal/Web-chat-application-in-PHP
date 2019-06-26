<?php  
session_start();  


$unmae=filter_input(INPUT_POST, "uname");
 $unmae=filter_input(INPUT_POST, "pass");
 
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabse";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql="SELECT * FROM signupp";
 $results=$conn->query($sql);
if($results->num_rows>0){
	while($rows=$rows->fetch_assoc()){
		//$aa[]=$row["username"];
		//$e[]=$row["email"];
 
}
}
if(in_array("$uname",$aa)){
	 header('location: index.php');
}
else{
	header('location: login.php');
}



?>
