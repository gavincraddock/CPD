<?php
include 'inc_everypage.php';
include 'inc_database.php';

$username = $_POST['username'];
$password = $_POST['password'];
$pwhash = hashpw($password);

$debugmode = "OFF";

if ($debugmode == "ON") {
	#Display hash for initial setup
	echo("password entered was ".$password."<br>");
	echo("password hash is : ".$pwhash."<br>");
	echo("hash length is ".strlen($pwhash));
	}
else{
	#Do login and redirect as appropriate
	$sql = "SELECT * from tblusers WHERE username='$username' and pwhash='$pwhash'";
	$result = mysqli_query($conn, $sql);
	$numrows = mysqli_num_rows($result);
	$row = $result->fetch_assoc();

	if ($numrows >=1){
		
		$_SESSION['username'] = $row['username'];
		$_SESSION['personname'] = $row['firstname']." ".$row[surname];
		$_SESSION['accesslevel'] = $row['accesslevel'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['centrecode'] = $row['centrecode'];
		$_SESSION['loggedin'] = TRUE;
		Header("Location: landing.php");
	}
	else{
		session_unregister(); 
    	session_destroy(); 
		Header("Location: index.php?dc=loginerror");	
	}
}	
?>
