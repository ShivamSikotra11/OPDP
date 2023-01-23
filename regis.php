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

if(isset($_POST['submitr']))
{
    $name = $_POST['namer'];
    $gender = $_POST['genderr'];
    $email = $_POST['emailidr'];
    $password = $_POST['passwordr'];
    $mN = $_POST['mNr'];

    $_SESSION['name'] = $name;
    $_SESSION['gender'] = $gender;
    $_SESSION['emailid'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['mNr'] = $mN;

    if(empty($name) || strlen($name)<=3 || !preg_match("/^[a-zA-Z\s.'-]+$/", $name)) {
        header("Location: techInfection.php?error=invalid_name");
        exit();
    }

    // Check if email already exists in database
    $query = "SELECT * FROM logintb WHERE emailid='$email'";
    $result = $conn->query($query);
    if($result->num_rows > 0)
    {
        // Email already exists, display error message
        header("Location: techInfection.php?error=duplicate_email");
        exit();
    }
    else if(strlen($email) < 8 || strlen($email) > 50 || !filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        // Non-Valid Email address
        header("Location: techInfection.php?error=nonvalid_email");
        exit();
    }
    if (!preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s:])([^\s]){8,}$/', $password)) 
    {
        //password is not strong
        header("Location: techInfection.php?error=weak_password");
        exit();
    }
    if(strlen($mN) != 10) 
    {
        // display error message on registration page if length not equal to 10
        header("Location: techInfection.php?error=correct_number");
        exit();
    } 

    // validating all Input Field
    $query = "INSERT INTO logintb (name, gender, emailid, password,MobileNUM) VALUES ('$name', '$gender', '$email', '$password','$mN')";
    $result = $conn->query($query);
    if($result)
    {
        header("Location: techInfection.php");
    }
    $conn->close();
}

?>