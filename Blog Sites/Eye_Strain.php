<?php
session_start();
$_SESSION["pain"] = "Eye Strain"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Eye Strain</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Eye Strain</a>
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
        <h2 class="text-primary mt-5 text-center">Eye Strain due to Screen</h2>
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
                        <img src="../images/eye_1.jpeg" class="d-block mx-auto border-c"
                            style="height:50vh;width:88vh;" alt="image1">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/eye2.jpg" class="d-block mx-auto border-c"
                            style="height:50vh;width:88vh;" alt="image2">
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
                    <p>
                        <b> <span style="font-family: Verdana, Geneva, Tahoma, sans-serif;font-size: larger;">E</span>ye
                            strain</b>, also known as <b>Computer vision syndrome</b>, is a common problem that affects
                        people who spend extended periods of time using digital devices such as computers, smartphones,
                        and tablets.
                    </p>
                    <p>
                        It is caused by the prolonged use of digital screens and can lead to a range of symptoms,
                        including dry eyes, headaches, blurred vision, and neck and shoulder pain.
                    </p>
                    <p>
                        The main cause of eye strain due to technology is the prolonged use of digital devices, which
                        can cause the eyes to become fatigued and strained.
                    </p>
                    </div>
                </div>
                </div>
        <details>
            <summary style="margin-top: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:24px;"><u>Symptoms</u></summary>
            <ul>
                <li>Eye fatigue and discomfort</li>
                <li>Blurred or double vision</li>
                <li>Dry, itchy or burning eyes</li>
                <li>Headaches</li>
                <li>Neck and shoulder pain</li>
                <li>Difficulty focusing</li>
                <li>Sensitivity to light</li>
                <li>Redness of the eyes</li>
            </ul>
        </details>
        
        <div>
                <details>
                    <summary style="margin-top: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:24px;"><u>Causes</u></summary>
                <!-- <h4 style="margin-top: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> <u> Causes</u></h4> -->
                <ul>
                    <li><b>Blue Light Emission:</b>Digital devices emit blue light, which can cause eye fatigue and disrupt sleep patterns.</li>
                        <li><b>Reduced Blinking:</b>People tend to blink less frequently when using digital devices, which can lead to dry eyes.</li>
                        <li><b>Glare:</b>Reflections and glare from digital screens can cause eye strain.</li>
                        <li><b>Poor Lighting:</b>Insufficient or excessive lighting can cause eye strain.</li>
                        <li><b>Improper Viewing Distance and Angle:</b>Viewing digital screens at an inappropriate distance or angle can cause eye strain.</li>

                </ul>
            </details>

                <details>
                    <summary style="margin-top: 10px;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:24px;"><u>Precautions</u></summary>
                    <ul>
                    <li> <b>Take frequent breaks:</b>prevent eye strain due to technology, it is important to take frequent breaks from digital devices. Experts recommend taking a 20-second break every 20 minutes and looking at something 20 feet away.</li>
                <li> <b>Adjust your lighting:</b>Proper lighting can reduce eye strain. Avoid working in a dimly lit room or in front of a window with bright sunlight streaming in.</li>
                <li> <b>Adjust your device settings:</b>Adjusting the brightness, contrast, and font size of your device can reduce eye strain.</li>
                <li> <b>Use a blue light filter:</b>Using a blue light filter on your digital device can reduce eye strain and improve sleep patterns.</li>
                <li> <b>Use proper viewing distance and angle:</b>Position your digital device so that it is at an appropriate distance from your eyes and at a comfortable angle.</li>
                <li> <b>Visit an eye doctor:</b>If you experience persistent eye strain, it is important to visit an eye doctor. They can recommend specialized glasses or contact lenses for digital device use.</li>
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