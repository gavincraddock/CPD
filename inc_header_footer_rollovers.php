<?php
include 'inc_everypage.php';
?>

<script type="text/JavaScript">
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
<body onLoad="MM_preloadImages('images/button_about2.png','images/button_login2.png')"><heading><img src='images/CPDTracker_title.png' width="800" height="105"></heading>

<?php
if (isset($_SESSION["loggedin"])){
	if ($_SESSION["loggedin"] == TRUE){
//HTML code below is for if session LOGGEDIN is set to TRUE
?>
<nav>
<a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image11','','images/button_admin2.png',1)"><img src="images/button_admin.png" alt="Admin" name="Image11" width="75" height="25" border="0"></a><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','images/button_bookings2.png',1)"><img src="images/button_bookings.png" alt="Bookings" name="Image2" width="75" height="25" border="0"></a><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image3','','images/button_centres2.png',1)"><img src="images/button_centres.png" alt="Centres" name="Image3" width="75" height="25" border="0"></a><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','images/button_courses2.png',1)"><img src="images/button_courses.png" alt="Courses" name="Image4" width="75" height="25" border="0"></a><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','images/button_interest2.png',1)"><img src="images/button_interest.png" alt="Interest" name="Image5" width="75" height="25" border="0"></a><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image6','','images/button_people2.png',1)"><img src="images/button_people.png" alt="People" name="Image6" width="75" height="25" border="0"></a><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image7','','images/button_reports2.png',1)"><img src="images/button_reports.png" alt="Reports" name="Image7" width="75" height="25" border="0"></a><img src="images/transp1x1.png" width="125" height="8" border="0"><a href="about.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image9','','images/button_about2.png',1)"><img src="images/button_about.png" alt="About" name="Image9" width="75" height="25" border="0"></a><a href="do_logout.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image10','','images/button_logout2.png',1)"><img src="images/button_logout.png" alt="Logout" name="Image10" width="75" height="25" border="0"></a></nav>
<?php
}
}
else
{
//HTML code below is for if session LOGGEDIN is undefined (ie session not set)
?>
<nav><img src="images/transp1x1.png" width="650" height="8" border="0"><a href="about.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('999','','images/button_about2.png',1)"></a><a href="index.asp" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image10','','images/button_login2.png',1)"><a href="index.php"></a><a href="about.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image16','','images/button_about2.png',1)"><img src="images/button_about.png" alt="About" name="Image16" width="75" height="25" border="0" id="Image16" /></a><a href="index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image15','','images/button_login2.png',1)"><img src="images/button_login.png" alt="Login" name="Image15" width="75" height="25" border="0" id="Image15" /></a><a href="index.asp" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('999','','images/button_login2.png',1)"></a></nav>
<?php
}
?>
<footer>Created by G. Craddock for John Taylor High School / National Forest Teaching School [2016]</footer>