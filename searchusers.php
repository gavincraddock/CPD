﻿<?php
include 'inc_everypage.php';
include 'inc_database.php';

restrictaccess("ADMIN");

$sql = "SELECT * FROM tblcentres";
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
    <p align="center"><strong>Search for a user </strong></p>
	<p align="center">Enter the details to find in the form below and click &quot;search&quot;. Leave blank any fields you do not wish to search on. </p>

	
    <form name="form1" method="post" id="addnewuser" action="searchusers_results.php">
  <center>
    <table style="small" width="700" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td bgcolor="#85B64A"><strong>First name </strong></td>
        <td width="84%" bgcolor="#C4DBA8"><input name="txtFirstname" type="text" id="txtFirstname" size="30" maxlength="20"></td>
      </tr>
      <tr>
        <td bgcolor="#85B64A"><strong>Surname</strong></td>
        <td bgcolor="#C4DBA8"><input name="txtSurname" type="text" id="txtSurname" size="30" maxlength="20"></td>
      </tr>
      <tr>
        <td bgcolor="#85B64A"><strong>E-mail</strong></td>
        <td bgcolor="#C4DBA8"><input name="txtEmail" type="text" id="txtEmail" size="45" maxlength="45"></td>
      </tr>
      <tr>
        <td bgcolor="#85B64A"><strong>Centre</strong></td>
        <td bgcolor="#C4DBA8"><select name="selCentre">
		<option value="" selected>Any centre</option>
<?php
	while ($row = $result->fetch_assoc())
	{
		echo "<option value=", $row['centrecode'],">", $row['centrename'], "</option>";
	}
?>
        </select>        </td>
      </tr>
      <tr>
        <td bgcolor="#85B64A">&nbsp;</td>
        <td bgcolor="#C4DBA8">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#85B64A"><strong>Username</strong></td>
        <td bgcolor="#C4DBA8"><input name="txtUsername" type="text" id="txtUsername" size="30" maxlength="20"></td>
      </tr>
      
      <tr>
        <td bgcolor="#85B64A"><strong>Access level</strong> </td>
        <td bgcolor="#C4DBA8"><select name="selAccess">
          <option value="" selected>Any user type</option>
		  <option value="USER">User</option>
          <option value="ADMIN">Admin</option>
          
                                </select></td>
      </tr>
    </table>
	  <p>
	    <img src="images/transp1x1.png" border="0" width="108" height="1">
	    <input type="submit" name="Submit" value="Search">
	  </p>
    </form>	
    </p>
    
    <em>Note - passwords are not stored in the database; salted hashes are used instead for maximum security. This means that it is impossible for a password to be retreived, but the password can be reset via an email link (for the user) or by an Admin user.    </em>
    <p>&nbsp;</p>
    <p>&nbsp; </p>
    </main>
  
  <?php include 'inc_header_footer.php';?>
</div>

