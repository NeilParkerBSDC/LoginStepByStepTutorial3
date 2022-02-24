<?php
//session start code
session_start();

// adding in the code to connect to a database

$servername = "localhost";
$DBusername = "root";
$DBpassword = "root";
$DBname = "csv_db";

// Create connection
$conn = new mysqli($servername, $DBusername, $DBpassword, $DBname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	$_SESSION["connected"]= "Failed to Connect";
} 
//Connected successfully;
else {
$_SESSION["connected"]= "Connected successfully";
}

// getting the data sent from the login page
$password=$_POST["password"];
$user=$_POST["user"];


//getting the data from the database

$sql = "SELECT * FROM `users_tbl` WHERE Username=\"" . $user . "\"";
$_SESSION["SQL"]=$sql;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	$_SESSION["records"]="There are records";

    while($row = $result->fetch_assoc()) {
		$_SESSION["sessStUser"]=$row["Username"]; 
		$_SESSION["sessStPW"]=$row["Password"];		
		}
	} 
else {
    $_SESSION["records"]="There are NO records";
}


//password validation code
if ($password==$_SESSION["sessStPW"]) {
	header( 'Location: ServerSide2.php' ) ;
	$_SESSION["verified"] = "Yes";
    }
else {
	header( 'Location: ServerSide1.php' ) ;	
	$_SESSION["verified"] = "No";
	}

	$conn->close();

?>
