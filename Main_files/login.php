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
    <link rel="stylesheet" href="loginstyle.css">
    <title>login Page</title>
</head>

<body>
    <a href="clear_session.php" class="back-to-home">
        <i class="fas fa-home"></i>
    </a>
    <section>
        <div class="form-box-login">
            <div class="form-value">
                <form method="post" action="logintry.php">
                    <h2>Login</h2>
                    <div class="inputbox-login">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="emailid" required>
                        <label for="eid">Email</label>
                    </div>
                    <div class="inputbox-login">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="password">Password</label>
                    </div>
                    <?php
                    if (isset($_SESSION["errori"])) {
                        if ($_SESSION["errori"] == "invalid_credentials") {
                            echo "<div class='alert alert-danger inputbox-login'>Error: Invalid login credentials. Please try again.</div>";
                        }
                    }
                    ?>

                    <button name="submit">Log In</button>
                    <div class="register">
                        <p>Don't have account? <a href="gotoregister.php">Register</a> </p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>