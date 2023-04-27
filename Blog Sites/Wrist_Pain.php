<?php
session_start();
$_SESSION["pain"] = "Wrist Pain"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Wrist Pain</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Wrist Pain</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
        <h2 class="text-primary mt-5 text-center">Wrist Pain</h2>
        <div class="row mt-5">
            <div id="carouselExampleIndicators" class="carousel slide col-md-5" data-ride="carousel"
                data-interval="5000">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../images/headache1.jpg" class="d-block mx-auto border-c"
                            style="height:50vh;width:88vh;" alt="image1">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/headache3.jpg" class="d-block mx-auto border-c"
                            style="height:50vh;width:88vh;" alt="image2">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/headache2.jpg" class="d-block mx-auto border-c"
                            style="height:50vh;width:88vh;" alt="image3">
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
                <div class="col-md-50   ">
                    <p>Wrist pain related to technology use is a common problem experienced by many people who use computers, smartphones, or other electronic devices frequently.</p>
                    <p>The constant typing and messaging can give you a sore wrist, numb hands, and achy fingertips.</p>
                    <p>Although these symptoms can be bothersome, they are also precursors to carpal tunnel syndrome.</p>
                    <p>It can be caused by a variety of factors, including poor posture, repetitive strain injuries, and overuse. </p>
                    </div>
                </div>
                </div>
        <details>
            <summary style="margin-top: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:24px;"><u>Symptoms</u></summary>
            <ul>
                <li>Pain and tenderness in the wrist</li>
                <li>Stiffness and limited range of motion in the wrist</li>
                <li>Swelling or inflammation in the wrist</li>
                <li>Numbness or tingling in the fingers or hand</li>
                <li>Weakness in the hand or wrist</li>
            </ul>
        </details>
        
        <div>
                <details>
                    <summary style="margin-top: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:24px;"><u>Causes</u></summary>
                <!-- <h4 style="margin-top: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> <u> Causes</u></h4> -->
                <ul>
                    <li>Pain and tenderness in the wrist</li>
                    <li>Stiffness and limited range of motion in the wrist</li>
                    <li>Swelling or inflammation in the wrist</li>
                    <li>Numbness or tingling in the fingers or hand</li>
                    <li>Weakness in the hand or wrist</li>

                </ul>
            </details>

                <details>
                    <summary style="margin-top: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:24px;"><u>Precautions</u></summary>
                    <ul>
                        <li> <b>Use Speech-to-Text:</b>of typing, consider using voice recognition software to dictate your messages or documents. This will reduce the amount of time you spend typing, which can help prevent wrist pain.</li>
                        <li> <b>Stretch your fingers:</b>Wrist pain can sometimes be caused by repetitive motions such as typing or using a mouse. To help prevent this, stretch your fingers and wrists regularly throughout the day. This can be as simple as opening and closing your hands or rotating your wrists.</li>
                        <li> <b>Use a wrist brace:</b>A wrist brace can provide support to your wrist and help prevent further injury. If you are experiencing wrist pain, consider wearing a brace to help alleviate the pain and prevent further strain.</li>
                        <li> <b>Adjust your workstation:</b> If you spend a lot of time typing or using a computer, it's important to make sure your workstation is set up ergonomically. This means ensuring your keyboard and mouse are at the right height and distance from your body, and that your monitor is at the right height and distance from your eyes.</li>
                        <li> <b>Use ergonomic tools:</b>There are a variety of ergonomic tools available to help prevent wrist pain, such as ergonomic keyboards and mice. These tools are designed to reduce strain on your wrists and can be a good investment if you spend a lot of time typing or using a computer.</li>
                        <li> <b>Maintain good posture:</b>Poor posture can contribute to wrist pain, as it can cause strain on your muscles and tendons. To prevent this, make sure you maintain good posture throughout the day, keeping your shoulders relaxed and your spine straight.</li>
                        <li> <b>Take Micro-breaks:</b>Taking micro-breaks of just a few seconds every few minutes can help to alleviate wrist pain. During these breaks, stretch and flex your fingers and wrists to keep them limber and reduce tension.</li>
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>