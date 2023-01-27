<?php
session_start();

$servername = "localhost";
$username = "id20205424_root";
$pa = "Ootroot@2021";
$dbname = "id20205424_logindb";

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

    $_SESSION['name'] = "";
    $_SESSION['gender'] = "";
    $_SESSION['emailid'] = "";
    $_SESSION['password'] = "";
    $_SESSION['mNr'] = "";
    $_SESSION["errori"]="";

    if(empty($name) || strlen($name)<=3 || !preg_match("/^[a-zA-Z\s.'-]+$/", $name)) {
        $_SESSION["errori"]="invalid_name";
        header("Location: techInfection.php");
        exit();
    }

    // Check if email already exists in database
    $query = "SELECT * FROM logintb WHERE emailid='$email'";
    $result = $conn->query($query);
    if($result->num_rows > 0)
    {
        // Email already exists, display error message
        $_SESSION["errori"]="duplicate_email";
        header("Location: techInfection.php");
        exit();
    }
    else if(strlen($email) < 8 || strlen($email) > 50 || !filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        // Non-Valid Email address
        $_SESSION["errori"]="nonvalid_email";
        header("Location: techInfection.php");
        exit();
    }
    if (!preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s:])([^\s]){8,}$/', $password)) 
    {
        //password is not strong
        $_SESSION["errori"]="weak_password";
        header("Location: techInfection.php");
        exit();
    }
    if(strlen($mN) != 10) 
    {
        // display error message on registration page if length not equal to 10
        $_SESSION["errori"]="correct_number";
        header("Location: techInfection.php");
        exit();
    } 

    // validating all Input Field
    $query = "INSERT INTO logintb (name, gender, emailid, password,MobileNUM) VALUES ('$name', '$gender', '$email', '$password','$mN')";
    $result = $conn->query($query);
    if($result)
    {
        $_SESSION['name'] = $name;
        $_SESSION['gender'] = $gender;
        $_SESSION['emailid'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['mNr'] = $mN;
        header("Location: techInfection.php");
    }
    $conn->close();
}

?>