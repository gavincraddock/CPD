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
.style1 {font-size: x-small}
-->
</style>
<body onLoad="MM_preloadImages('images/button_bookings2.png','images/button_centres2.png','images/button_courses2.png','images/button_interest2.png','images/button_people2.png','images/button_reports2.png','images/button_about2.png','images/button_logout2.png','images/button_admin2.png')">
<div class="container">
  
    
    <main>
    <br>
    <p align="center"><strong>About the CPD Tracker System<br>
      <br>
</strong>Software created by G. Craddock<br>
with support from C. Macdonald, J. Twynham  and G. Martin <br>
For John Taylor High School and National Forest Teacher School
<br>
<br>
Created
using PHP / MySQL / Javascript / JQuery<br>
easyMenu used with thanks under MIT license<span class="style1"> (<a href="https://github.com/coolhpy/jquery.easymenu">link</a>)<br>
</span>ZebraDatePicker used with thanks under LGPL license<span class="style1"> (<a href="http://stefangabos.ro/jquery/zebra-datepicker/">link</a>)</span><br>
PHPMailer used with thanks under GNU license<span class="style1"> (<a href="https://github.com/PHPMailer/PHPMailer/blob/master/LICENSE">link</a>)</span><br>
<br>
Development started 
    11th January 2016<br>
    Detailed development log <a href="developmentlog.php">here</a>    <br>
    <br>
    Contact <a href="mailto:g.craddock@jths.co.uk">g.craddock@jths.co.uk</a> </p>
    </main>
  
  <?php include 'inc_header_footer.php';?>
</div>
