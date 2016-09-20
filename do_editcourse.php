<?php
//edit / updates a course (and the associated sessions)
 
include 'inc_everypage.php';
include 'inc_database.php';

$courseid = makevalid($_POST['courseid']);
$coursename = makevalid($_POST['txtName']);
$description = makevalid($_POST['txtDescription']);
$NFTSprice = makevalid($_POST['txtNFTSprice']);
$externalprice = makevalid($_POST['txtExternalprice']);
$notes = makevalid($_POST['txtNotes']);

$returndata = "return=true&coursename=$coursename&description=$description&NFTSprice=$NFTSprice&externalprice=$externalprice&notes=$notes";

#check if any needed fields are empty
if (isblank($coursename) or isblank($description) or isblank($NFTSprice) or isblank($externalprice)) {
	redirect("vieweditcourse.php?m=datamissing&$returndata");
}

#do the SQL update
$sql= "update tblcourses set name='$coursename', description='$description', NFTSprice=$NFTSprice, externalprice=$externalprice, notes='$notes' where courseid=$courseid";

if ($conn->query($sql) === TRUE) {
	#if the update of the course went OK, update the sessions.

	#see how many sessions need to be updated and loop around that many times
	$numsessions = $_POST['sessionnum'];
	$numsessions_updated = 0;
	for ($x = 1; $x <= $numsessions; $x++) {
		#extract data from the previous form
		$sessionid = makevalid($_POST['sessionid'.$x]);
		$sessiontitle = makevalid($_POST['sessiontitle'.$x]);
		$sessionvenue = $_POST['sessionvenue'.$x];
		$sessionroom = makevalid($_POST['sessionroom'.$x]);
		$sessionfacilitator = $_POST['sessionfacilitator'.$x];
		$sessiondate = makevalid($_POST['sessiondate'.$x]);
		$sessionstarttime = makevalid($_POST['starttime'.$x]);
		$sessionendtime = makevalid($_POST['endtime'.$x]);
		$sessionnotes = makevalid($_POST['sessionnotes'.$x]);
		
		#update the session table linked to the correct course
		#$sql= "insert into tblsessions(sessiontitle, sessionvenue, sessionroom, sessionfacilitator, sessiondate, sessionstarttime, sessionendtime, sessionnotes, courseID) VALUES('$sessiontitle', '$sessionvenue', '$sessionroom', '$sessionfacilitator', '$sessiondate', '$sessionstarttime', '$sessionendtime', '$sessionnotes', '$newcourseID')";
		
		$sql= "UPDATE tblsessions SET sessiontitle='$sessiontitle', sessionvenue='$sessionvenue', sessionroom='$sessionroom', sessionfacilitator='$sessionfacilitator', sessiondate='$sessiondate', sessionstarttime='$sessionstarttime', sessionendtime='$sessionendtime', sessionnotes='$sessionnotes' WHERE sessionid=$sessionid AND courseid=$courseid";
		
		if ($conn->query($sql) === TRUE) {
			$numsessions_updated += 1;
			if ($numsessions_updated == $numsessions) {
				#redirect to the confirmation page if course and all linked sessions added
				redirect("confirmnewupdatecourse.php?ncid=$courseid&ns=$numsessions");
			}
		}
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
?>
