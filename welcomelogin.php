<?php
session_start();

if(!isset($_SESSION['name'])){
    // If session variables are not set, redirect to login page
    header("Location: login.php");
}

// Check if remember me cookies are set
if(isset($_COOKIE['name']) && isset($_COOKIE['gender'])&& isset($_COOKIE['emailid'])){
    // Set session variables from cookies
    $_SESSION['name'] = $_COOKIE['name'];
    $_SESSION['gender'] = $_COOKIE['gender'];
    $_SESSION['emailid'] = $_COOKIE['emailid'];
}

?>
<h1>Welcome, <?php echo $_SESSION['name']; ?>!</h1>
<p>Gender: <?php echo $_SESSION['gender']; ?></p>
<p>Email-id: <?php echo $_SESSION['emailid']; ?></p>
<a href="logout.php">Logout</a>