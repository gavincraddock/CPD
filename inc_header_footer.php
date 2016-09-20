<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="external/easymenu/jquery.easymenu.css" />
<script type="text/javascript" src="external/easymenu/jquery.easymenu.js"></script>

<heading><img src='images/CPDTracker_title.png' width="800" height="105"></heading>

<?php
if (isset($_SESSION["loggedin"])){
	if ($_SESSION["loggedin"] == TRUE){
		if ($_SESSION["accesslevel"] == "ADMIN"){
//HTML code below is for if session LOGGEDIN is set to TRUE and ACCESSLEVEL is set to ADMIN
?>
<nav>
<ul id="menu" class="clearfix">
	<li><a href="#">Admin</a>
		<ul>
			<li><a href="attendanceregisters.php">Attendance registers</a></li>
			<li><a href="uninvoicedcourses.php">Uninvoiced courses</a></li>
		</ul></li>
	<li><a href="#">Bookings</a>
		<ul>
			<li><a href="viewallbookings.php">View all bookings</a>
			<li><a href="searchforbooking.php">Search for a booking</a>
			<li><a href="addnewbooking.php">Add new booking</a></li>
		</ul>
	</li>
	<li><a href="#">Courses</a>
		<ul>
			<li><a href="viewallcourses.php">View all courses</a></li>
			<li><a href="searchforcourse.php">Search for a course</a></li>
			<li><a href="addnewcourse.php">Add a new course</a></li>
		</ul>
	</li>
	<li><a href="#">Centres</a>
		<ul>
			<li><a href="viewallcentres.php">View all centres</a></li>
			<li><a href="addnewcentre.php">Add a new centre</a></li>
		</ul>
	</li>
		<li><a href="#">People</a>
		<ul>
			<li><a href="viewallusers.php">View all people</a></li>
			<li><a href="searchusers.php">Search for a person</a></li>
			<li><a href="addnewuser.php">Add a new person</a></li>
		</ul>
	</li>	
		<li><a href="about.php">About</a>
	</li>
		<li><a href="do_logout.php">Logout</a>
	</li>
</ul>
</nav>
<?php
}
else
//HTML code below is for if session LOGGEDIN is set to TRUE and ACCESSLEVEL is set to USER (or really anything else except ADMIN)
{
?>
<nav>
<ul id="menu" class="clearfix">
	<li><a href="#">My details</a>
		<ul>
			<li><a href="landing.php">View my details</a></li>
			<li><a href="changemydetails.php">Change my details</a></li>
			<li><a href="changemypassword.php">Change password</a></li>
		</ul></li>
	<li><a href="#">Bookings</a>
		<ul>
			<li><a href="viewmybookings.php">View/edit my bookings</a>
			<li><a href="requestmybooking.php">Request a new booking</a></li>
		</ul>
	</li>
	<li><a href="#">Courses</a>
		<ul>
			<li><a href="viewallmycourses.php">View all available courses</a></li>
			<li><a href="searchformycourses.php">Search for a course</a></li>
			<li><a href="expressionsofinterest.php">Expressions of interest</a></li>
		</ul>
	</li>	
		<li><a href="about.php">About</a>
	</li>
		<li><a href="do_logout.php">Logout</a>
	</li>
</ul>
</nav>
<?php
}

}
}
else
{
//HTML code below is for if session LOGGEDIN is undefined (ie session not set)
?>
<nav>
<ul id="menu" class="clearfix">
		<li><a href="about.php">About</a>
	</li>
		<li><a href="index.php">Login</a>
	</li>
</ul>
</nav>
<?php
}
?>
<script type="text/javascript">
	$(document).ready(function() {
		$("#menu").easymenu();
	});
	</script>
<footer>Created by G. Craddock for John Taylor High School / National Forest Teaching School [2016]</footer>