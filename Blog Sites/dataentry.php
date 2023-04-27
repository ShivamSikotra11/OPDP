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
    $emailid = $_SESSION["emailid"];
    $pain = $_SESSION['pain'];
    $inp = $_POST['inp'];

// Prepare SQL query
$sql = "INSERT INTO feedback (Email, Pain, string) VALUES ('$emailid', '$pain', '$inp')";

// Execute query
if ($conn->query($sql) === TRUE) {
    if ($pain == "Back Pain")
    {
        header("Location: Back_PAin.php");
    }
    else if ($pain == "Eye Strain")
    {
        header("Location:Eye_Strain.php");
    }
    else if ($pain == "Headache")
    {
        header("Location:headache.php");
    }
    else if ($pain == "Neck Pain")
    {
        header("Location:Neckpain.php");
    }
    else if ($pain == "Shoulder Pain")
    {
        header("Location:Shoulder_Pain.php");
    }
    else if ($pain == "Wrist Pain")
    {
        header("Location:Shoulder_Pain.php");
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    $conn->close();
}
?>  