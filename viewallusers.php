﻿<?php
include 'inc_everypage.php';
include 'inc_database.php';

restrictaccess("ADMIN");

$sql = "SELECT * from tblusers, tblcentres WHERE tblusers.centrecode = tblcentres.centrecode";

if (isset($_GET['sort'])){
	if ($_GET['sort'] == "centre") {
		//code to sort if centre is selected
		$sql .= " ORDER BY tblcentres.centrename, tblusers.surname, tblusers.firstname";}
	elseif ($_GET['sort'] == "name") {
	    //code to sort if name is selected
		$sql .= " ORDER BY tblusers.surname, tblusers.firstname";}}
else {
	//code to sort by name by default if nothing is selected
	$sql .= " ORDER BY tblusers.surname, tblusers.firstname";}

$result = mysqli_query($conn, $sql);
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
    <p align="center"><strong>View all users </strong></p>
	<p align="center">Update the details below as required. .</p> 
	
	<?php
	if (isset($_GET['m'])){
		if ($_GET["m"] == "useradded"){
			echo "<p align='center' class='redwarning'>User successfully added</p>";}
		}
	?>
	<center>
    <table style="small" width="700" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td width="40%" bgcolor="#85B64A"><strong>Name <img src="images/transp1x1.png" width="20" height="1"><a href="viewallusers.php?sort=name"><img src="images/sortarrow.png" alt="Sort" width="11" height="11" border="0"></a></strong></td>
        <td width="30%" bgcolor="#85B64A"><strong>Email</strong></td>
        <td width="30%" bgcolor="#85B64A"><strong>Centre<img src="images/transp1x1.png" width="20" height="1"><a href="viewallusers.php?sort=centre"><img src="images/sortarrow.png" alt="Sort" width="11" height="11" border="0"></a></strong></td>
      </tr>
	  
<?php
while ($row = $result->fetch_assoc())
{
	echo "<tr>";
	echo "<td><a href='viewedituser.php?username=", $row['username'], "'>", $row['surname'], ", ", $row['firstname'], "</a></td>";
	echo "<td>", $row['email'], "</td>";
	echo "<td>", $row['centrename'], "</td>";	
	echo "</tr>";
}
?>

  
    </table></p>
    </center>
    <p>&nbsp; </p>
    </main>
  
  <?php include 'inc_header_footer.php';?>
</div>

