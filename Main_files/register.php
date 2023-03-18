<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="regisstyle.css">
    <title>Registration Page</title>
</head>

<body>
    <section>
        <a href="clear_session.php" class="back-to-home">
            <i class="fas fa-home"></i>
        </a>
        <div class="form-box">
            <div class="form-value">
                <form action="regis.php" method="post">
                        <h2>Register</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" name="namer" value="<?php if (isset($_SESSION['name'])) {
                                                                    echo $_SESSION['name'];
                                                                } ?>" required>
                        <label for="name">Name</label>
                    </div>
                    <?php
                    if (isset($_SESSION["errori"])) {
                        if ($_SESSION["errori"] == "invalid_name") {
                            echo "<div class='alert alert-danger inputbox'>Error: Please enter Valid Name(length>4).</div>";
                        }
                    }
                    ?>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="emailidr" value="<?php if (isset($_SESSION['emailid'])) {
                                                                        echo $_SESSION['emailid'];
                                                                    } ?>" required>
                        <label for="emailid">Email</label>
                    </div>
                    <?php
                    if (isset($_SESSION["errori"])) {
                        if ($_SESSION["errori"] == "duplicate_email") {
                            echo "<div class='alert alert-danger inputbox'>Error: Email already exists. Please use a different email.</div>";
                        }
                        if ($_SESSION["errori"] == "nonvalid_email") {
                            echo "<div class='alert alert-danger inputbox'>Error: Please enter the valid Email Address</div>";
                        }
                    }
                    ?>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="passwordr" value="<?php if (isset($_SESSION['password'])) {
                                                                            echo $_SESSION['password'];
                                                                        } ?>" required>
                        <label for="">Password</label>
                    </div>
                    <?php
                    if (isset($_SESSION["errori"])) {
                        if ($_SESSION["errori"] == "weak_password") {
                            echo "<div class='alert alert-danger inputbox'> Please enter Strong Password of Length At least 8 length,&nbsp At least one Uppercase letter,At least one Lowercase letter,At least one special character and At least one digit.</div>";
                        }
                    }
                    ?>
                    <div class="manage">
                        <label for="">Gender:</label>
                        <label for="male" class="space">Male</label>
                        <input type="radio" id="male" name="genderr" value="Male" checked>
                        <label for="female" class="space">Female</label>
                        <input type="radio" id="female" name="genderr" value="Female">
                    </div>
                    <div class="inputbox">
                        <ion-icon name="call-outline"></ion-icon>
                        <input type="tel" name="mNr" value="<?php if (isset($_SESSION['mNr'])) {
                                                                echo $_SESSION['mNr'];
                                                            } ?>" required>
                        <label for="">Mobile Number</label>
                    </div>
                    <?php
                    if (isset($_SESSION["errori"])) {
                        if ($_SESSION["errori"] == "correct_number") {
                            echo "<div class='alert alert-danger form-group'>Error: Please enter 10 digit Number.</div>";
                        }
                    }
                    ?>
                    <button name="submitr">Register</button>
                    <div class="register">
                        <p>Already have an account? <a href="login.php">Log In</a> </p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>