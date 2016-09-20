<!doctype html>
<?php
include 'inc_everypage.php';
include 'inc_database.php';

restrictaccess("ADMIN");

#Get data about the course that's been added
if (isset($_GET['ncid'])){
	$ncid = $_GET['ncid'];
	}
if (isset($_GET['ns'])){
	$ns = $_GET['ns'];
	}

#Get data from database about the course
$sql = "SELECT * from tblcourses WHERE courseid=$ncid";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
?>

<link href="styles.css" rel="stylesheet" type="text/css">

<script>
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
    <p align="center"><strong>Confirmation of course added / updated </strong></p>
	<p align="center">The course detailed below has been added / updated. <br>
	<table style="small" width="700" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td width="28%" bgcolor="#85B64A"><strong>Course name </strong></td>
        <td width="72%" bgcolor="#C4DBA8"><?php echo($row["name"])?></td>
      </tr>
      <tr>
        <td bgcolor="#85B64A"><strong>Course description </strong></td>
        <td bgcolor="#C4DBA8"><?php echo($row["description"])?></td>
      </tr>
      <tr>
        <td bgcolor="#85B64A"><strong>Notes</strong></td>
        <td bgcolor="#C4DBA8"><?php echo($row["notes"])?></td>
      </tr>
      <tr>
        <td bgcolor="#85B64A"><strong>Number of sessions </strong></td>
        <td bgcolor="#C4DBA8"><?php echo($ns)?></td>
      </tr>
    </table>
    <p>You may now choose another option from the menus at the top of the screen. </p>
    <p>&nbsp; </p>
  </main>
  
  <?php include 'inc_header_footer.php';?>
</div>

