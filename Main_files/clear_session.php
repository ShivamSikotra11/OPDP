<?php
session_start();
session_unset();
session_destroy();
header("Location:techInfection.php");
$_SESSION['loggedin'] = false;
?>