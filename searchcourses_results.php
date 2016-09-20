<?php
include 'inc_everypage.php';
include 'inc_database.php';

restrictaccess("ADMIN");

$sql = "SELECT * from tblcourses WHERE 1=1";

#build up SQL based on what user enters

#THIS REMOVED WHEN CHANGING DB STRUCTURE. TO BE REIMPLEMENTED LATER
#$centrecode = ($_POST['selCentre']);
#if ($centrecode != null) {$sql .= " AND tblcourses.centrecode = '$centrecode'";}

$coursename = ($_POST['txtCoursename']);
if ($coursename != null) {$sql .= " AND tblcourses.name LIKE '%$coursename%'";}

$keywords = ($_POST['txtKeywords']);
if ($keywords != null) {$sql .= " AND tblcourses.description LIKE '%$keywords%'";}

$result = mysqli_query($conn, $sql);
$numrows = mysqli_num_rows($result);
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
    <p align="center"><strong>Search results - courses  </strong></p>
	<p align="center">Click on a name to view/edit a course.</p> 

    <table style="small" width="700" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td width="40%" bgcolor="#85B64A"><strong>Course name <img src="images/transp1x1.png" width="20" height="1"><a href="viewallusers.php?sort=name"></a></strong></td>
        <td width="30%" bgcolor="#85B64A"><strong>Description</strong></td>
        <td width="30%" bgcolor="#85B64A"><strong>Host centre(s)</strong></td>
        <td width="30%" bgcolor="#85B64A"><strong>No. of sessions</strong> </td>
      </tr>
	  
<?php
while ($row = $result->fetch_assoc())
{
	#subquery to find out how many sessions are on for each course
	$sql2 = "SELECT count(*) as sessioncount from tblsessions WHERE courseid=".$row['courseid'];
	$result2 = mysqli_query($conn, $sql2);
	$row2 = $result2->fetch_assoc();
	
	#subquery to find out which centres are used by these sessions
	$sql3 = "SELECT DISTINCT centrename from tblcentres, tblsessions WHERE tblcentres.centrecode = tblsessions.sessionvenue AND courseid=".$row['courseid'];
	$result3 = mysqli_query($conn, $sql3);
	$centres = "";
	$tempcount = 0;
	while ($row3 = $result3->fetch_assoc())
	{
		if ($tempcount != 0) {
			$centres.=",<br>"; #add line break for all except first centre
		} 
		$centres .= $row3['centrename'];
		$tempcount +=1;
	}
	
	
	echo "<tr>";
	echo "<td><a href='vieweditcourse.php?courseid=", $row['courseid'], "'>", $row['name'],"</a></td>";
	echo "<td>", $row['description'], "</td>";
	echo "<td>", $centres, "</td>";	
	echo "<td>", $row2['sessioncount'], "</td>";
	echo "</tr>";
}
?>
    </table>
    </p>
    
    <p class="redwarning"><?php echo $numrows;?> result(s) found.  </p>
    </main>
  
  <?php include 'inc_header_footer.php';?>
</div>

