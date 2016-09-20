<?php
include 'inc_everypage.php';
include 'inc_database.php';

$firstname = $_POST['txtFirstname'];
$surname = $_POST['txtSurname'];
$email = $_POST['txtEmail'];
$centrecode = $_POST['selCentre'];
$username = $_POST['txtUsername'];
$originalusername = $_POST['txtOriginalUsername'];
$password = $_POST['txtPassword'];
$accesslevel = $_POST['selAccess'];

$returndata = "return=true&firstname=$firstname&surname=$surname&email=$email&centrecode=$centrecode&username=$username&originalusername=$originalusername&accesslevel=$accesslevel";

#if delete button clicked, go to the confirmation page
if ($_POST['Submit'] == 'Delete') {
	Header("Location: deleteuser.php?d=$returndata");}


#check if any needed fields are empty
if ($firstname == null or $surname == null or $email == null) {
	Header("Location: viewedituser.php?m=datamissing&$returndata");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    Header("Location: viewedituser.php?m=invalidemail&$returndata");
}

#generate a password if none provided
if ($password == null) {$password = generatepassword();}

#hash the password (whether this has been generated or user entered) IF a new one entered
if ($password != "PLACEHOLDER"){
$pwhash = hashpw($password);}

#generate a username if none provided
if ($username == null) {
	$username = substr($firstname, 0, 1).".".$surname;
	$username = tidyup($username);
}

#check if new username exists in the database and add extra numbers to it if it does until unique value found
#BUT only if the username has changed 
if ($username != $originalusername){
	$originalusername2 = $username;
	$count = 1;
	$validusername = False;
	while ($validusername == False) {
		$sql= "select username from tblusers where username='$username'";
		$result = mysqli_query($conn, $sql);
		$numrows = mysqli_num_rows($result);
		if ($numrows >=1){
			$username = $originalusername2.$count;
			$count = $count + 1;
		}
		else {
			$validusername = True;
		}
	}
}

#do the SQL update
$sql = "update tblusers set accesslevel='$accesslevel', firstname='$firstname', surname='$surname', centrecode='$centrecode', email='$email'";

if ($username != $originalusername) {
$sql.= ", username='$username'";}

if ($password != "PLACEHOLDER") {
$sql.= ", pwhash='$pwhash'";}

$sql.= " WHERE username='$originalusername'";
if ($conn->query($sql) === TRUE) {
	
	#redirect to the confirmation page if record added
	Header("Location: confirmediteduser.php?u=$username");
	if ($password != "PLACEHOLDER") {
	
	#send a welcome email to the user
	$subject = "NFTS CPD system - password changed";
	$emailbody = "Your password has been updated. Your new username and password are shown below : <br><br>";
	$emailbody .= "Username : $username<br>";
	$emailbody .= "Password : $password<br><br>";
	$emailbody .= "Please note that both your username and password are case sensitive. Your password can be changed once you have logged in for the first time. <br><br>Please do not reply to this email as it has been automatically generated. If you have any issues, please email <a href=mailto:g.craddock@jths.co.uk>g.craddock@jths.co.uk</a> or <a href=mailto:c.macdonald@jths.co.uk>c.macdonald@jths.co.uk</a>.";
	gmail($email, $subject, $emailbody);
	}
	
	}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
?>
