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
<body onLoad="MM_preloadImages('images/button_bookings2.png','images/button_centres2.png','images/button_courses2.png','images/button_interest2.png','images/button_people2.png','images/button_reports2.png','images/button_about2.png','images/button_logout2.png','images/button_admin2.png')">
<div class="container">
  
    
    <main>
    <br>
    <p align="center"><strong>Development log </strong></p>
    <p align="left"><strong>13/09/16</strong><br> 
    Courses and people now almost fully implemented. Ability to add, search for and edit people. Courses split up into sessions, removed different types of courses and streamlined to one (even if this means a one-to-one relationship sometimes between courses and sessions. Removed course leader and course venue from course, this now stored per session. Still need to implement editing courses (and associated sessions) and deleting courses. Cascade delete between courses/sessions does not appear to be functional. </p>
    <p align="left"><strong>09/07/16</strong><br> 
    AJAX datepicker module implemented and tested. Begin move to internal JTHS server, using IIS/MySQL/PHP. <br>
    <strong><br>
      </strong><strong>23/06/16</strong><br>
Added page (HTML only) to add a new course. Began to implement datepicker AJAX module for new course session dates but unresolved issues (apparant conflict with PHP code) stopped this from working in situ (datepickertest.php page works fine).</p>
    <p align="left"><strong>22/06/16</strong><br>
      <a href="mailto:g.craddock@jths.co.uk"></a>Added this development log. Login system modified to use BlowFish hashing algorithm with salting. Fixed session variables to get them working. Added displaying data about logged in user to landing page. Set PHP names for each page on menus. Added personalised menus for different user types. Added code to restrict access to pages for the appropriate user types. </p>
    <p align="left"><strong>Between 11/01/16 and 22/06/16</strong><br>
      Basic system structure using PHP and MySQL (only people and centres tables). Easymenu system utilised for rollovers (credited and linked in 'about.php' page. Login system working using MySQL and SHA256 hashing. Page to view overview of people started.</p>
    <p align="left"><strong>11/01/16</strong><br>
      Started this project. I know absolutely nothing about either PHP or MySQL at this point. This project is a challenge to migrate my ASP skills (which are out of date) to the much more popular PHP language. Here we go... </p>
    </main>
    <p>
      <?php include 'inc_header_footer.php';?>
    </p>
</div>
