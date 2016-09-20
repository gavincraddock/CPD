<?php
include 'inc_everypage.php';
include 'inc_database.php';

restrictaccess("USER");

#Get centrename from the database
$sql = "SELECT centrename from tblcentres WHERE centrecode='$_SESSION[centrecode]'";

$result = mysqli_query($conn, $sql);
$numrows = mysqli_num_rows($result);
$row = $result->fetch_assoc();

if ($numrows >=1){
	$centrename = $row['centrename'];}
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
    <p align="center"><strong>Logged in</strong><br>
      <br>
    Welcome to the NFTS CPD system. Your details are below. <br>
      Please use the menu above to access each area of the system. </p>
	
	<center>
    <table style="small" width="700" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td bgcolor="#85B64A"><strong>Username</strong></td>
        <td width="84%" bgcolor="#FFFFFF"><?php echo($_SESSION['username']);?></td>
      </tr>
      <tr>
        <td bgcolor="#85B64A"><strong>Name</strong></td>
        <td bgcolor="#FFFFFF"><?php echo($_SESSION['personname']);?></td>
      </tr>
      <tr>
        <td bgcolor="#85B64A"><strong>E-mail</strong></td>
        <td bgcolor="#FFFFFF"><?php echo($_SESSION['email']);?></td>
      </tr>
      <tr>
        <td bgcolor="#85B64A"><strong>Centre</strong></td>
        <td bgcolor="#FFFFFF"><?php echo($centrename);?></td>
      </tr>
      <tr>
        <td bgcolor="#85B64A"><strong>User level</strong> </td>
        <td bgcolor="#FFFFFF"><?php echo($_SESSION['accesslevel']);?></td>
      </tr>
	 </table>
	 </center>
    </main>
  
  <?php include 'inc_header_footer.php';?>
  
</div>

