<?php

$dbservername = "localhost";
//$dbservername = "213.171.200.82";
$dbname = "jthscpd";
$dbusername = "webuser";
$dbpassword = "WebUser1234";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
	
/*
EXAMPLE OF HOW TO QUERY USING PHP AND MYSQL
-----------------------------------------
$sql = "SELECT * from tblusers";
$result = mysqli_query($conn, $sql);

LOOP AROUND A RECORDSET
-----------------------
while ($row = $result->fetch_assoc())
{
	echo $row[fieldname];
	echo "<br>";
	echo $row[anotherfieldname];
	echo "<br>";
}

ACCESS FIRST / ONLY RECORD RETURNED
--------------------------
$sql = "SELECT * from tblusers WHERE username='$username' and pwhash='$pwhash'";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();

if ($numrows >=1){
	$_SESSION[username] = $row[username];}

GET COUNT OF ROWS RETURNED
--------------------------
$numrows = mysqli_num_rows($result);
*/
?>