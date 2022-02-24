<?php
session_start();

if ($_SESSION["verified"] != "Yes") {
	header( 'Location: ServerSide1.php' ) ;
	$_SESSION["verified"] = "No";
    }
?>

<!DOCTYPE html>
<html>
<head>
<!-- information about the file is placed in the head section -->
<title>Server Side Login Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- code to make the page responsive - i.e. automatically change size -->

<!-- Style information goes below -->
<style>
body {
    background-color: #C0FFFF;
    font-family: "arial", "verdana";
    font-size: 2vw;
	color: #000000;
     }
h1 {
     font-family: "arial", "verdana";
    font-size: 7vw;
	color: #330033   
	}
option {
    font-size: 2vw; 
}
select {
	font-size: 2vw;  
	border-radius: 8px; 		
}
input[type ="Text"] {
	font-size: 2vw; 
	background-color:#FFFFFF;
	color: #000000;
	border: 0px;	
	border-radius: 4px;	
}
input[type="submit"] {
	font-size: 2vw; 
}   
</style>

</head>

<body>
<h1>Secure Page</h1>

<p>You have now got to the secure page</p>
<?PHP
echo "Validated: " . $_SESSION["verified"];
echo "<br/>";
echo "Connected: " . $_SESSION["connected"];
echo "<br/>";

echo "Username: " .$_SESSION["sessStUser"];
echo "<br/>";
echo "Password: " .$_SESSION["sessStPW"];
echo "<br/>";
echo "records: " .$_SESSION["records"];
echo "<br/>";
echo "SQL: " .$_SESSION["SQL"];
echo "<br/>";

?>
</div>
</body>
</html>