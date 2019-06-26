<?php  
error_reporting(0); 
session_start(); 
include 'dbh.php';
?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="home.css">

	<title>Home</title>
</head>
<body>
<div id="main">

	<h1 style="background-color: #6495ed; color: white;">
		<?php  
echo $_SESSION['name'];
		?>

-online</h1>
	<div class="output">

		<?php 

		$sql ="SELECT * FROM post";
		$result=$conn->query($sql);
		if($result->num_rows>0){
			while($rows= $result->fetch_assoc()){
				//echo "".$row["msg"].""--"".$row["date"].  "<br>";
				echo $rows["msg"];
				$row["date"];
				$rows["name"];
				echo "<br>";
			}
		} else{
			echo "0 results";
		}
		$conn->close();

		?>

		


</div>
	<form  method="post" action="send.php">
		<textarea name="msg"  placeholder="Type to send..." class="form-control"></textarea><br>
		<input type="submit" value="send">
	</form>
	<br>
	<form action="logout.php">
		<input style="width: 100%; background-color: #6495ec; color: white; font-size: 20px; " type="submit" value="Logout">
		


	</form>

</div>
</body>
</html>