<?php
include 'inc_everypage.php';
include 'inc_database.php';

$firstname = $_POST['txtFirstname'];
$surname = $_POST['txtSurname'];
$email = $_POST['txtEmail'];
$centrecode = $_POST['selCentre'];
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
$accesslevel = $_POST['selAccess'];

$returndata = "return=true&firstname=$firstname&surname=$surname&email=$email&centrecode=$centrecode&username=$username&accesslevel=$accesslevel";

#check if any needed fields are empty
if ($firstname == null or $surname == null or $email == null) {
	Header("Location: addnewuser.php?m=datamissing&$returndata");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    Header("Location: addnewuser.php?m=invalidemail&$returndata");
}

#generate a password if none provided
if ($password == null) {$password = generatepassword();}

#hash the password (whether this has been generated or user entered
$pwhash = hashpw($password);

#generate a username if none provided
if ($username == null) {
	$username = substr($firstname, 0, 1).".".$surname;
	$username = tidyup($username);
}

#check if username exists in the database and add extra numbers to it if it does until unique value found
$originalusername = $username;
$count = 1;
$validusername = False;
while ($validusername == False) {
	$sql= "select username from tblusers where username='$username'";
	$result = mysqli_query($conn, $sql);
	$numrows = mysqli_num_rows($result);
	if ($numrows >=1){
		$username = $originalusername.$count;
		$count = $count + 1;
	}
	else {
		$validusername = True;
	}
}


#do the SQL insert
$sql= "insert into tblusers(username, pwhash, accesslevel, firstname, surname, centrecode, email) VALUES('$username', '$pwhash', '$accesslevel', '$firstname', '$surname', '$centrecode', '$email')";
if ($conn->query($sql) === TRUE) {
	
	#send a welcome email to the user
	$subject = "Welcome to the NFTS CPD system";
	$emailbody = "You have been successfully signed up for the NFTS CPD system. Your username and password are shown below : <br><br>";
	$emailbody .= "Username : $username<br>";
	$emailbody .= "Password : $password<br><br>";
	$emailbody .= "Please note that both your username and password are case sensitive. Your password can be changed once you have logged in for the first time. <br><br>Please do not reply to this email as it has been automatically generated. If you have any issues, please email <a href=mailto:g.craddock@jths.co.uk>g.craddock@jths.co.uk</a> or <a href=mailto:c.macdonald@jths.co.uk>c.macdonald@jths.co.uk</a>.";
	
	#Disable this line to stop emails being sent for new users.
	#gmail($email, $subject, $emailbody);
	
	#redirect to the confirmation page if record added
	Header("Location: confirmnewuser.php?u=$username");
	}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
?>
