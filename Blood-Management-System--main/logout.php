<?php
session_start();
$un=$_SESSION['un'];

// log out korle then r back kaj korbena *************session destroy 
session_destroy();              
header('Location:index.php');
?>