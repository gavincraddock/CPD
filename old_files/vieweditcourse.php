<!doctype html>
<?php
include 'inc_everypage.php';
include 'inc_database.php';

restrictaccess("ADMIN");

#Get courseid, if present or redirect if not
if (isset($_GET['courseid'])){
	$courseid = $_GET['courseid'];
	}
else {
	redirect("landing.php");
}

#Get data from the database about the course
$sql = "SELECT * from tblcourses where courseid=$courseid";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();

$coursename = $row['name'];
$description = $row['description'];
$NFTSprice = $row['NFTSprice'];
$externalprice = $row['externalprice'];
$notes = $row['notes'];

#Get data from the database about the sessions attached to the course
$sql2 = "SELECT * from tblsessions where courseid=$courseid";
$result2 = mysqli_query($conn, $sql2);
$numsessions = mysqli_num_rows($result2);

?>
<script type="text/javascript" src="external/zebra_datepicker/javascript/zebra_datepicker.js"></script>
<link rel="stylesheet" href="external/zebra_datepicker/css/default.css" type="text/css">

<link href="styles.css" rel="stylesheet" type="text/css">

<script>
//AJAX function to add in more sessions
function updateme(numsessions)
{
moreSessions(numsessions);
setTimeout(RunOnLoad, 200);
}

function moreSessions(num)
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("sessions").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","ajax_moresessions.php?inp="+num,true);
xmlhttp.send();
}

//DOM ready function for the datepicker calendar
function RunOnLoad(){
	// assuming the controls you want to attach the plugin to 
    // have the "datepicker" class set
	 $('input.datepicker').Zebra_DatePicker({format : 'd/m/Y'});
	 //window.alert("woo!");
}

$(document).ready(RunOnLoad);

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
<style type="text/css">
<!--
.style1 {font-size: x-small}
.style2 {font-size: xx-small}
-->
</style>
<body onLoad="MM_preloadImages('images/button_bookings2.png','images/button_centres2.png','images/button_courses2.png','images/button_interest2.png','images/button_people2.png','images/button_reports2.png','images/button_about2.png','images/button_logout2.png','images/button_admin2.png')">

<div class="container">
  
    
    <main>
    <br>
    <p align="center"><strong>View / edit  course </strong></p>
	<p align="center">Update the details below as required. Click confirm update when finished. <br>
	  <br> 
	  
	  <?php
	if (isset($_GET['m'])){
		if ($_GET["m"] == "datamissing"){
			echo "<p align='center' class='redwarning'>You must fill in all of the details for the course</p>";}
		}
	?>
	  
    <form name="form1" method="post" id="addnewuser" action="do_editcourse.php">
  <center>
    <table style="small" width="700" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td width="28%" bgcolor="#85B64A"><strong>Course name  </strong></td>
        <td width="72%" bgcolor="#C4DBA8"><input name="txtName" type="text" id="txtName" value="<?php echo($coursename)?>" size="70" maxlength="50">
          <input name="coursetype" type="hidden" id="coursetype" value="MULTI"></td>
      </tr>
      <tr>
        <td bgcolor="#85B64A"><strong>Course description </strong></td>
        <td bgcolor="#C4DBA8"><textarea name="txtDescription" cols="70" rows="5" id="txtDescription"><?php echo($description)?></textarea></td>
      </tr>
      <tr>
        <td bgcolor="#85B64A">&nbsp;</td>
        <td bgcolor="#C4DBA8">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#85B64A"><strong>Price charged </strong></td>
        <td bgcolor="#C4DBA8"><span class="style1">NFTS Alliance price £</span>
          <input name="txtNFTSprice" type="text" id="txtNFTSprice" value="<?php echo($NFTSprice)?>" size="6" maxlength="6">
           <img src="images/transp1x1.png" width="30" height="1"><span class="style1">External price £</span>
           <input name="txtExternalprice" type="text" id="txtExternalprice" value="<?php echo($externalprice)?>" size="6" maxlength="6"></td>
      </tr>
      <tr>
        <td bgcolor="#85B64A">&nbsp;</td>
        <td bgcolor="#C4DBA8">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#85B64A"><strong>Session(s) date/time</strong> </td>
        <td bgcolor="#C4DBA8">
		
		<span id="sessions" class="style2">
	
		
		<strong>Session 1 </strong><br>
     
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="16%"><span class="style2">Session title </span></td>
              <td width="84%"><span class="style2">
                <input name = "sessiontitle1" type="text" id="sessiontitle1" size="30" maxlength="50">
              </span></td>
            </tr>
            <tr>
              <td><span class="style2">Session venue </span></td>
              <td><select name="sessionvenue1" id="sessionvenue1">
                <?php

	$sql = "SELECT * FROM tblcentres";
	$result = mysqli_query($conn, $sql);
	while ($row = $result->fetch_assoc())
	{
		#set the default school to be the one that is initially selected
		if ($row['default'] == 1) {$selected = " SELECTED";}
		else {$selected = "";}
	
		echo "<option value=", $row['centrecode'], $selected, ">", $row['centrename'], "</option>";
	}
?>
                                          </select></td>
            </tr>
            <tr>
              <td><span class="style2">Session room </span></td>
              <td><span class="style2">
                <input name = "sessionroom1" type="text" id="sessionroom1" size="30" maxlength="30">
              </span></td>
            </tr>
            <tr>
              <td><span class="style2">Session facilitator </span></td>
              <td><select name="sessionfacilitator1" id="select">
                <option value="" SELECTED>Choose a user...</option>
                <?php
	$sql = "SELECT * FROM tblusers, tblcentres WHERE tblusers.centrecode = tblcentres.centrecode ORDER BY surname";
	$result = mysqli_query($conn, $sql);
	while ($row = $result->fetch_assoc())
	{	
		echo "<option value=", $row['username'],">", $row['surname'], ", ", $row['firstname'], " (", $row['centrename'], "), </option>";
	}
?>
              </select></td>
            </tr>
            <tr>
              <td><span class="style2">Date</span></td>
              <td><span class="style2">
                <input name = "sessiondate1" type="text" class="datepicker" id="sessiondate1" size="10" maxlength="10">
              </span></td>
            </tr>
            <tr>
              <td class="style2">Start time </td>
              <td><span class="style2">
                <input name="starttime1" type="text" id="starttime1" size="10" maxlength="10">
                <img src="images/transp1x1.png" alt="blank" width="30" height="1"><span class="style2">End time</span>
                <input name="endtime1" type="text" id="endtime1" size="10" maxlength="10">
                <input name="sessionnum" type="hidden" id="sessionnum" value="1">
              </span></td>
            </tr>
            <tr>
              <td class="style2">Notes</td>
              <td><textarea name="sessionnotes1" cols="50" rows="3" id="sessionnotes1"></textarea></td>
            </tr>
          </table></span>
          <span class="style2"><br>
          </span><span class="style1">Change to </span><span class="style2">
          <input name="numsessions" type="text" id="numsessions" value="2" size="2" maxlength="2">
          </span><span class="style1">sessions</span><span class="style2">
          <input type="button" name="Submit2" value="Change number of sessions" onClick="updateme(document.getElementById('numsessions').value);">
		  </span> <br>
		  <em>(warning - changing this will reset all changes made to existing sessions)</em> </td>
      </tr>
      <tr>
        <td bgcolor="#85B64A">&nbsp;</td>
        <td bgcolor="#C4DBA8">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#85B64A"><strong>Notes about course </strong></td>
        <td bgcolor="#C4DBA8"><textarea name="txtNotes" cols="70" rows="5" id="txtNotes"><?php echo($notes)?></textarea></td>
      </tr>
    </table>
	  <p>
	    <img src="images/transp1x1.png" border="0" width="108" height="1">
	    <input type="submit" name="Submit" value="Confirm Update">
	    <img src="images/transp1x1.png" alt="spacer" width="108" height="1" border="0">
	    <input name="Submit" type="submit" id="Submit" value="Delete" alt="Delete">
	  </p>
    </form>	
    <p>&nbsp;</p>
    <p>&nbsp; </p>
    </main>
  
  <?php include 'inc_header_footer.php';?>
</div>

