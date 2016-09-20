<?php
include 'inc_everypage.php';
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
<style type="text/css">
<!--
.style2 {font-size: small}
.style3 {
	color: #FF0000;
	font-weight: bold;
	font-style: italic;
}
-->
</style>
<body onLoad="MM_preloadImages('images/button_bookings2.png','images/button_centres2.png','images/button_courses2.png','images/button_interest2.png','images/button_people2.png','images/button_reports2.png','images/button_about2.png','images/button_logout2.png','images/button_admin2.png')">

<div class="container">
  
    
    <main>
    <br>
    <p align="center"><strong>Please login to the CPD Tracker system</strong></p>
	<?php
	if (isset($_GET['dc'])){
		if ($_GET["dc"] == "loginerror"){
			echo "<p align='center' class='style3'>Error - please check your login details and try again </p>";}
		elseif ($_GET["dc"] == "loggedout"){
			echo "<p align='center' class='style3'>You have been successfully logged out </p>";}
		elseif ($_GET["dc"] == "loginneeded"){
			echo "<p align='center' class='style3'>You must login to the system before proceeding </p>";}
		elseif ($_GET["dc"] == "accessdenied"){
			echo "<p align='center' class='style3'>That page is restricted. Please log in again </p>";}}
	?>
    <form name="form1" method="post" action="do_login.php">
        <center><table width="451" border="0" cellpadding="0" cellspacing="0" background="images/login_bg.png">
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="43">&nbsp;</td>
            <td width="125"><span class="style2">Username</span></td>
            <td width="222"><label>
              <input name="username" type="text" id="username" size="20" maxlength="20">
            </label></td>
            <td width="43">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><span class="style2">Password</span></td>
            <td><input name="password" type="password" id="password" size="20" maxlength="20"></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" id="Submit" value="Login"></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="21">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
          <br>
          If you do not have a username / password or you have other technical<br>
          issues, please speak to G. Craddock (<a href="mailto: g.craddock@jths.co.uk">g.craddock@jths.co.uk</a>)
		  <br><br>
		  <strong>Please use Google Chrome or Firefox to access this system - there are some temporary issues with display in IE10/11.</strong>
</center>
      </form>
    </main>
  
  <?php include 'inc_header_footer.php';?>
  
</div>

