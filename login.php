<?php  
session_start();  
include 'dbh.php';


$unmae=filter_input(INPUT_POST, "uname");
 $unmae=filter_input(INPUT_POST, "pass");
 

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
