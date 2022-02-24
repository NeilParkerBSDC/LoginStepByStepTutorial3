<?php
// Start the session
session_start();
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

.error	{
color: red;
font-size: 3vw; 

}	
</style>

</head>

<body>
<?php
/*
echo "Connected? ". $_SESSION["connected"];
echo "<br/>";
echo "Verified: " .$_SESSION["verified"];
echo "<br/>";
echo "Username: " .$_SESSION["sessStUser"];
echo "<br/>";
echo "Password: " .$_SESSION["sessStPW"];
echo "<br/>";
echo "Records: " .$_SESSION["records"];
echo "<br/>";
echo "SQL: " .$_SESSION["SQL"];
echo "<br/>";
*/
if (!empty($_SESSION["verified"])) {
	//echo "null";
	echo "<div class='error'>Sorry you have not entered a valid username and password</div> ";
	}
	/*
else {
	echo "<div class='error'>Sorry you have not entered a valid username and password</div> ";
	}
	*/


?>
<!-- This page is just html - it send the data to a page on the server which rocesses it, hidden from prying eyes! -->
<h1>Server Side Login Page</h1>

<p> Would you like to login!</p>
<form action="ServerSideValidator.php" method="post">
<input type="hidden" name="verified" value="No"> 
User Name: <input type="text" name="user"><br/>&nbsp;<br/>
Login: <input type="text" name="password"><br/>&nbsp;<br/>
<input type="submit">
</form>
</div>
</body>
</html>