<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<?php

#Display all errors
ini_set('display_errors',1);
error_reporting(E_ALL);

#needed to allow session data to be stored and accessed
session_start();

function hashpw($password){
	$param = "$2a$09$";
	$salt = "cMc6sERe76k4"; #generated at random initially
	$pwhash = crypt($password,$param.$salt);
	#$pwhash = hash('SHA256', $password); #old pwhash using SHA256, changed to be more secure and use salting#
	return $pwhash;
}

function restrictaccess($whoto) {
	if (isset($_SESSION['loggedin'])){
		if (($_SESSION['accesslevel'] == "ADMIN") or ($whoto == $_SESSION['accesslevel'])) {
			#do nothing, user is allowed access
			}
		else {
			Header("Location: index.php?dc=accessdenied");}
		}
	else {
		Header("Location: index.php?dc=loginneeded");}
}

function generatepassword($length = 8) {
    $chars = 'abcdefghjkmnpqrstvwxyzABCDEFGHJKLMNPQRSTVWXYZ2345678923456789';
    $count = mb_strlen($chars);

    for ($i = 0, $result = ''; $i < $length; $i++) {
        $index = rand(0, $count - 1);
        $result .= mb_substr($chars, $index, 1);
    }

    return $result;
}

function tidyup($input) {
	#function to REMOVE spaces, quotes, etc
	$input = str_replace(" ", "", $input);
	$input = str_replace("'", "", $input);
	$input = str_replace('"', '', $input);
	return $input;
}
	
function makevalid($input) {
	#function to ADD ESCAPE SLASHES etc to inputted data
	#could be expanded in future to remove HTML, etc
	if ($input == null) {
		return null;
	}
	else {
		return addslashes($input);
	}
}

function isblank($input){
	if ($input == null or $input == "") {
		return True;
	}
	else {
		return False;
	}
}
	
function redirect($url, $statusCode = 303){
	#303 status code (default) indicates that this is a temporary redirection
   header('Location: ' . $url, true, $statusCode);
   die();
}

function gmail($to, $subject, $message){
    //path to PHPMailer class
    require_once('./external/PHPmailer/class.phpmailer.php');
    // optional, gets called from within class.phpmailer.php if not already loaded
    include("./external/PHPmailer/class.smtp.php"); 

    $mail = new PHPMailer();
    $mail->CharSet = "UTF-8";
    $mail->IsSMTP();
    $mail->SMTPDebug  = 0;
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = "ssl";
    $mail->Host       = "smtp.gmail.com";
    $mail->Port       = 465;
    $mail->Username   = "nftscpd@gmail.com";
	$mail->Password   = "WebUser1234";
    $mail->SetFrom('nftscpd@gmail.com');
    $mail->FromName = "NFTS CPD system";
    $mail->Subject = $subject;
    $mail->MsgHTML($message);
    $mail->AddAddress($to, "");
    if(!$mail->Send()) 
    {
        //couldn't send
        return false;
    } 
    else 
    {
        //successfully sent
        return true;
    }
}
?>
