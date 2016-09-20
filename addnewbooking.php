<?php
include 'inc_everypage.php';
include 'inc_database.php';

restrictaccess("ADMIN");
?>

<link href="styles.css" rel="stylesheet" type="text/css">

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<body onLoad="MM_preloadImages('images/button_bookings2.png','images/button_centres2.png','images/button_courses2.png','images/button_interest2.png','images/button_people2.png','images/button_reports2.png','images/button_about2.png','images/button_logout2.png','images/button_admin2.png')">

<div class="container">
  
    
    <main>
    <br>
    <p align="center"><strong>Add new booking </strong><br>
      <br>
    Book a person onto a course. This can also be done by selecting the course first, or the user first. </p>
	  	  <form name="form1" method="post" action="do_addnewbooking.php">
	  <center>
	<table width="700" border="1" cellpadding="0" cellspacing="0" style="small">
      <tr>
        <td width="28%" bgcolor="#85B64A"><strong>Course to book onto </strong></td>
        <td width="72%" bgcolor="#C4DBA8">
		<select name="course" id="course">
		<option value="" SELECTED>Choose a course...</option>
    <?php
	#GROUP BY query to get the count of sessions as well as the course
	$sql = "SELECT tblcourses.courseid, name, count(sessionid) as cs FROM tblcourses, tblsessions where tblcourses.courseid = tblsessions.courseid group by courseid";
	$result = mysqli_query($conn, $sql);
	while ($row = $result->fetch_assoc())
	{	
		#work out whether the description should say session or sessionS
		if ($row['cs'] > 1 or $row['cs'] == 0) 
			{
			$sessiontext = " sessions";
			}
		else
			{
			$sessiontext = " session";
			}
			
		echo "<option value=", $row['tblcourses.courseid'],">", $row['name'], " (", $row['cs'],$sessiontext,")</option>";
	}
?>
              </select>		</td>
      </tr>
      <tr>
        <td bgcolor="#85B64A"><strong>Course details </strong></td>
        <td bgcolor="#C4DBA8">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#85B64A">&nbsp;</td>
        <td bgcolor="#C4DBA8">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#85B64A"><strong>Delegate to book</strong></td>
        <td bgcolor="#C4DBA8"><select name="person" id="person">
				<option value="" SELECTED>Choose a user...</option>
    <?php
	$sql = "SELECT * FROM tblusers, tblcentres WHERE tblusers.centrecode = tblcentres.centrecode ORDER BY surname";
	$result = mysqli_query($conn, $sql);
	while ($row = $result->fetch_assoc())
	{	
		echo "<option value=", $row['username'],">", $row['surname'], ", ", $row['firstname'], " (", $row['centrename'], ") </option>";
	}
?>
              </select></td>
      </tr>
      <tr>
        <td bgcolor="#85B64A">&nbsp;</td>
        <td bgcolor="#C4DBA8">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#85B64A">&nbsp;</td>
        <td bgcolor="#C4DBA8">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#85B64A">&nbsp;</td>
        <td bgcolor="#C4DBA8"><p>The person making the booking (already set up)</p>
          <p>Ability to over ride the price</p>
          <p>Plus list of centres that are in the alliance (they get cheaper price)</p>
          <p>Notes  </p>
          <p>Longer term, different people for each session. </p></td>
      </tr>
    </table>
	<p>
	  <input type="submit" name="Submit" value="Confirm booking">
	</p>
	  </center>

      </form>
	  <p>&nbsp;</p>
    </main>
  
  <?php include 'inc_header_footer.php';?>
</div>

