<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
</head>
<body>
<?php
session_start();

if(isset($_SESSION['name']) && isset($_SESSION['gender']) && isset($_SESSION['email'])){
    echo "Welcome, " . $_SESSION['name'] . "! You are logged in as a " . $_SESSION['gender'] . ".";
}else{
    echo "You are not logged in. Please log in to continue.";
    header("Location: techinfection.php");
}

?>
</body>
</html>
