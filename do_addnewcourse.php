<?php
//adds a new course
 
include 'inc_everypage.php';
include 'inc_database.php';

$coursename = makevalid($_POST['txtName']);
$description = makevalid($_POST['txtDescription']);
$NFTSprice = makevalid($_POST['txtNFTSprice']);
$externalprice = makevalid($_POST['txtExternalprice']);
$notes = makevalid($_POST['txtNotes']);

$returndata = "return=true&coursename=$coursename&description=$description&NFTSprice=$NFTSprice&externalprice=$externalprice&notes=$notes";

#check if any needed fields are empty
if (isblank($coursename) or isblank($description) or isblank($NFTSprice) or isblank($externalprice)) {
	redirect("addnewcourse_multi.php?m=datamissing&$returndata");
}

#do the SQL insert
$sql= "insert into tblcourses(name, description, NFTSprice, externalprice, notes) VALUES('$coursename', '$description', '$NFTSprice', '$externalprice', '$notes')";

if ($conn->query($sql) === TRUE) {
	#if the insert of the course went OK, add the sessions.
	
	#find the ID of the course that was just inserted
	$newcourseID = $conn->insert_id;
	
	#see how many sessions need to be added and loop around tha many times
	$numsessions = $_POST['sessionnum'];
	$numsessions_added = 0;
	for ($x = 1; $x <= $numsessions; $x++) {
		#extract data from the previous form
		$sessiontitle = makevalid($_POST['sessiontitle'.$x]);
		$sessionvenue = $_POST['sessionvenue'.$x];
		$sessionroom = makevalid($_POST['sessionroom'.$x]);
		$sessionfacilitator = $_POST['sessionfacilitator'.$x];
		$sessiondate = makevalid($_POST['sessiondate'.$x]);
		$sessionstarttime = makevalid($_POST['starttime'.$x]);
		$sessionendtime = makevalid($_POST['endtime'.$x]);
		$sessionnotes = makevalid($_POST['sessionnotes'.$x]);
		
		#insert into the session table linked to the correct course
		$sql= "insert into tblsessions(sessiontitle, sessionvenue, sessionroom, sessionfacilitator, sessiondate, sessionstarttime, sessionendtime, sessionnotes, courseID) VALUES('$sessiontitle', '$sessionvenue', '$sessionroom', '$sessionfacilitator', '$sessiondate', '$sessionstarttime', '$sessionendtime', '$sessionnotes', '$newcourseID')";
		if ($conn->query($sql) === TRUE) {
			$numsessions_added += 1;
			if ($numsessions_added == $numsessions) {
				#redirect to the confirmation page if course and all linked sessions added
				redirect("confirmnewupdatecourse.php?ncid=$newcourseID&ns=$numsessions");
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
