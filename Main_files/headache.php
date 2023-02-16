<?php
session_start();
$_SESSION['le'] = "L";
if(isset($_SESSION['name']) && isset($_SESSION['emailid'])) {
    $_SESSION['le'] = "L";
    header("Location: /Blog Sites/HEADACH.html");
    exit;
} else {
    $_SESSION['le'] = "NL";
    echo '<script>
    document.getElementById("loginModal").style.display = "block";
    </script>';
    header("Location: techInfection.php");
}
?>
