<?php
session_start();
$_SESSION["pain"] = "Back Pain"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Back Pain</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Backpain</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../Main_files/techInfection.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#foot">About</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Picture and Blog Section -->
    <div class="container">
        <h2 class="text-primary mt-5 text-center">Backpain due to Technology</h2>
        <div class="row mt-5">
            <div id="carouselExampleIndicators" class="carousel slide col-md-5" data-ride="carousel" data-interval="5000">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../images/backpain(c).jpg" class="d-block mx-auto border-c" style="height:50vh;width:88vh;" alt="image1">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/backpain2(c).jpg" class="d-block mx-auto border-c" style="height:50vh;width:88vh;" alt="image2">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/neck_back.png" class="d-block mx-auto border-c" style="height:50vh;width:88vh;" alt="image3">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!-- Blog -->
            <div class="col-md-6">
                <div class="col-md-50">
                    <p>
                        <b> <span style="font-family: Verdana, Geneva, Tahoma, sans-serif;font-size: larger;">B</span>ack
                            pain</b> is a common condition that affects people of all ages and is often caused by prolonged sitting, poor posture, and repetitive motions performed in front of computers or other technology devices.
                    </p>
                    <p>
                        Sitting in front of a computer for long hours, carrying heavy laptops, and staring at a smartphone screen for extended periods of time can all contribute to backpain.
                    </p>
                    <p>
                        To reduce the risk of backpain, it's important to adopt good posture while using technology, take frequent breaks to stretch and move around.
                    </p>
                </div>
            </div>
            <div class="mr-5 ml-5">
                <p>
                    This type of back pain results from the posture adopted while using these devices, which often involves looking down and hunching forward for long periods of time. This can put stress on the neck, shoulders, and upper back, leading to discomfort and pain.
                </p>
            </div>
        </div>
        <details>
            <summary style="margin-top: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:24px;"><u>Symptoms</u></summary>
            <ul>
                <li>Dull or aching pain in the lower or upper back</li>
                <li>Muscle tightness or spasms</li>
                <li>Tingling or numbness in the legs or feet</li>
                <li>Stiffness or difficulty moving around</li>
                <li>Shooting or stabbing pain that worsens with certain movements</li>
                <li>Weakness or fatigue in the back and legs</li>
                <li>Trouble standing or walking for long periods of time</li>
            </ul>
        </details>

        <div>
            <details>
                <summary style="margin-top: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:24px;"><u>Causes</u></summary>
                <!-- <h4 style="margin-top: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> <u> Causes</u></h4> -->
                <ul>
                    <li>
                        <b>Sedentary lifestyle:</b>
                        Sitting for long periods of time, particularly in front of a computer or other electronic device, can lead to muscle tension and stiffness in the lower back. This is because sitting causes the hip flexors to shorten and become tight, which can pull on the lower back and cause pain.

                    </li>
                    <li>
                        <b>Poor posture:</b>Poor posture, such as slouching or hunching forward, can put extra stress on the lower back muscles and spine, leading to pain.

                    </li>
                    <li>
                        <b>Repetitive motions:</b>
                        Repetitive motions, such as typing or mouse use, can lead to strain injuries in the muscles and tendons of the lower back.

                    </li>
                    <li>
                        <b>Heavy lifting:</b>
                        Lifting heavy objects, particularly if done improperly, can put extra stress on the lower back and lead to pain.
                    </li>
                    <li>
                        <b>Stress:</b>
                        Stress can cause muscle tension and stiffness, which can lead to lower back pain.

                    </li>
                    <li>
                        <b>Improper equipment:</b>
                        Sitting or standing on an unstable surface or using equipment that is not adjusted to your body can lead to pain and discomfort in the lower back.
                    </li>
                </ul>
            </details>

            <details>
                <summary style="margin-top: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:24px;"><u>Precautions</u></summary>
                <ul>
                    <li>
                        <b>Maintain good posture:</b>
                        When using technology, make sure to sit up straight with your feet flat on the floor and your back supported by the chair. Keep the computer screen at eye level to avoid straining your neck.
                    </li>
                    <li>
                        <b>Take breaks:</b>Get up and move around every 30 minutes to an hour. This can help reduce tension in the back and neck, as well as improve circulation.
                    </li>
                    <li>
                        <b>Adjust your workstation:</b>
                        Make sure that your workstation is ergonomically designed, with the keyboard and mouse at a comfortable height and distance from the screen.
                    </li>
                    <li>
                        <b>Use proper equipment:</b>
                        Use a chair that supports your back, and invest in an ergonomic keyboard and mouse if you use them frequently. Consider using a laptop stand to elevate the screen and reduce neck strain.
                    </li>
                    <li>
                        <b>Stretch:</b>
                        Simple neck and back stretches can help reduce tension and prevent pain. Consider doing some stretching exercises during the day or taking a yoga or exercise class
                    </li>
                    <li>
                        <b>Exercise regularly</b>
                        Regular exercise can help strengthen the muscles that support your back and reduce the risk of injury. Focus on exercises that improve core stability and flexibility, such as Pilates or yoga
                    </li>
                </ul>
            </details>

        </div>
    </div>

    <!-- Optional Interactivity -->
    <div class="container my-5">
        <div class="row">
            <!-- Comment -->
            <div class="col-md-12">
                <div class="card bg-light">
                    <div class="card-header">
                        <h3>FeedBack</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="dataentry.php">
                            <div class="form-group">
                                <label for="commentInput">Give a FeedBack:</label>
                                <textarea class="form-control" name="inp"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional Footer -->
    <footer class="bg-dark py-3" id="foot">
        <p class="text-center text-white">
            &copy; Picture and Blog Page 2023
        </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>