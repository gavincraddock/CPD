<?php
include 'inc_everypage.php';

session_unregister(); 
session_destroy(); 
Header("Location: index.php?dc=loggedout");	

?>
