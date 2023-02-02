<?php
session_start();

$servername = "localhost";
$username = "root";
$pa = "";
$dbname = "logindb";

// Create connection
$conn = new mysqli($servername, $username, $pa, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit'])){
    $_SESSION["errori"]="";
    $emailid = $_POST['emailid'];
    $pass = $_POST['password'];

    $_SESSION['email'] = "";
    $_SESSION['password'] = "";

    // Check if user exists in database
    $query = "SELECT * FROM logintb WHERE emailid='$emailid' AND password='$pass'";
    $result = $conn->query($query);
    if($result->num_rows > 0){
        // User exists, set session variables
        $query1 = "SELECT name, gender FROM logintb WHERE emailid='$emailid'";
        $result1 = $conn->query($query1);
        $row = $row = $result->fetch_assoc();
        $gender = $row['gender'];
        $name = $row['name'];
        $_SESSION['name'] = $name;
        $_SESSION['gender'] = $gender;
        $_SESSION['emailid'] = $emailid;
        header("Location: techInfection.php");
    }
    else{
        $_SESSION['errori'] = "invalid_credentials";
        header("Location: techInfection.php");
        exit();
    }
    $conn->close();
}
?>  