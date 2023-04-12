<?php
session_start();
$answer = true; // replace with your variable

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $link1 = "../Blog Sites/Shoulder_Pain.html";
  $link2 = "../Blog Sites/Back_PAin.html";
  $link3 = "../Blog Sites/Eye_Strain.html";
  $link4 = "../Blog Sites/Wrist_Pain.html";
  $link5 = "../Blog Sites/Neckpain.html";
  $link6 = "../Blog Sites/blog.html";
  $link7 = "../Blog Sites/headache.html";
} else {
    $link1 = "login.php";
    $link2 = "login.php";
    $link3 = "login.php";
    $link4 = "login.php";
    $link5 = "login.php";
    $link6 = "login.php";
    $link7 = "login.php";
    
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Tech-infection</title>
    <link rel="icon" type="image/png" sizes="16x16" href="icon.png">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="oot.js"></script>
    <script src="animation.js"></script>
    <link rel="stylesheet" href="animation.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Nav-bar Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container pr-2">
            <a class="navbar-brand" href="#">
                <img src="../images/logo.png" alt="Tech-Infection" width="170px" height="40px" style="margin: 0px;margin-top:-2px; margin-bottom:-2px;">
            </a>
            <?php if (isset($_SESSION['name']) && isset($_SESSION['emailid'])) { ?>
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" style="margin-left:50px;">
                    <p class="dropdown-item text-secondary text-dark font-weight-bold"> <?php echo $_SESSION['name']; ?></p>
                    <p class="dropdown-item text-secondary text-dark font-weight-bold"> <?php echo $_SESSION['emailid']; ?></p>
                    <div class="dropdown-divider"></div>
                    <form action="clear_session.php" method="post">
                        <button type="submit" class="btn btn-danger ml-4" name="logout_btn">Logout</button>
                    </form>
                </div>
            <?php } else { ?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <form action="search.php" method="post">
                                <div class="btn-group ">
                                    <input class="btn btn-warning round loginbtn" type="text" name="search_term" placeholder="Search...">
                                    <button class="btn btn-warning round loginbtn" type="submit" name="submit_search" style="padding-top:10px">
                                    <ion-icon name="search-outline" ></ion-icon></button>
                                </div>
                            </form>
                        </li>
                        <li class="nav-item ml-lg-2 mt-2 mt-lg-0" style="display:inline-block">
                            <a type="button" class="btn btn-warning round loginbtn" href="login.php">&nbsp&nbspLogin&nbsp&nbsp</a>
                            <a type="button" class="btn btn-warning round loginbtn" href="register.php">Register</a>
                        </li>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </nav>

    <div class="overlay"></div>
    <div class="content">

        <!-- carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000" style="max-width: 75%; margin:30px auto 0 auto;">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="..\images\genral.png" class="d-block mx-auto round" style="height:75vh;width:100%;" alt="image1">
                </div>
                <div class="carousel-item">
                    <img src="..\images\genral_2.jpeg" class="d-block mx-auto round" style="height:75vh;width:100%;" alt="image2">
                </div>
                <div class="carousel-item">
                    <img src="..\images\overall.png" class="d-block mx-auto round" style="height:75vh;width:100%;" alt="image3">
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

        <!-- data -->
        <div class="container-lg mt-5">
            <h1 class="text-center mb-5 thcolor">Tech Infections</h1>
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 mb-5 mb-lg-0">
                    <div class="cardt" id="cardl">
                        <div class="card-header">
                            <h3>What are tech infections?</h3>
                        </div>
                        <div class="card-body">
                            <p> Some are caused by occupational exposures, and are marked with direct professional relation, or the action of harmful effects in the workplace. Technological diseases occur due to excessive work at the computer, or excessive use of keyboards and computer mice, especially the non-ergonomic ones.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12 mb-3 mb-lg-0">
                    <div class="cardt" id="cardr">
                        <div class="card-header">
                            <h3>How to protect against tech infections?</h3>
                        </div>
                        <div class="card-body">
                            <p>To protect against tech infections, it's important to use security software such as antivirus
                                and anti-malware programs. Keep your software and operating system up-to-date, be cautious
                                when clicking on links or downloading files from unknown sources, and avoid phishing scams.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-lg my-5">
                <div class="text-center heading">Tech Infections Types</div>
                <ul class="list-group">
                    <a href="#back" class="smooth-scroll">
                        <li class="list-group-item">Back pain</li>
                    </a>
                    <li class="list-group-item">Computer Vision Syndrome</li>
                    <li class="list-group-item">Carpal Tunnel Syndrome</li>
                    <li class="list-group-item">Text Neck</li>
                    <a href="#ear" class="smooth-scroll">
                        <li class="list-group-item">Ear Pain</li>
                    </a>
                    <li class="list-group-item">Shoulder Pain</li>
                </ul>
            </div>
        </div>
        <!-- //blog -->

        <!-- eXTRA fLEX -->
        <div class="container-lg">
            <ul class="cards" style="padding-right:30px;">
            <li class="card">
                    <h3 class="card-title">Headache</h3>
                    <div class="card-content">
                        <div class=" row card-body d-flex align-items-center">
                            <div class="image-container">
                                <img src="..\images\headache3.jpg" class="img-fluid rounded card-img-top" alt="image2">
                                <div class="image-overlay">
                                    <p class="overlay-text">
                                    Headache is caused by blue light emitted by digital devices, prolonged screen time, poor posture, and eye strain.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-link-wrapper">
                        <a href="<?php echo $link7; ?>" class="card-link card1">Learn More</a>
                    </div>
                </li>
                <li class="card">
                    <h3 class="card-title">Shoulder Pain</h3>
                    <div class="card-content">
                        <div class=" row card-body d-flex align-items-center">
                            <div class="image-container">
                                <img src="..\images\shoulder_1.png" class="img-fluid rounded card-img-top" alt="image2">
                                <div class="image-overlay">
                                    <p class="overlay-text">Shoulder pain caused by technology is a modern day affliction resulting from excessive use of laptops, mobile devices and other technology.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-link-wrapper">
                        <a href="<?php echo $link1; ?>" class="card-link card1">Learn More</a>
                    </div>
                </li>
                <li class="card" id="back">
                    <h3 class="card-title">Back Pain</h3>
                    <div class="card-content">
                        <div class=" row card-body d-flex align-items-center">
                            <div class="image-container">
                                <img src="..\images\neck_back.png" class="img-fluid rounded card-img-top" alt="image2">
                                <div class="image-overlay">
                                    <p class="overlay-text">Back pain caused by prolonged use of laptops and mobile devices is a common issue in modern times.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-link-wrapper">
                        <a href="<?php echo $link2; ?>" class="card-link">Learn More</a>
                    </div>
                </li>
                <li class="card">
                    <h3 class="card-title">Eye Strain</h3>
                    <div class="card-content">
                        <div class=" row card-body d-flex align-items-center">
                            <div class="image-container">
                                <img src="..\images\eye_1.jpeg" class="img-fluid rounded card-img-top" alt="image2">
                                <div class="image-overlay">
                                    <p class="overlay-text">Eye issues due to laptop and mobile technology are a growing concern due to the prolonged and frequent use of digital devices.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-link-wrapper">
                        <a href="<?php echo $link3; ?>" class="card-link">Learn More</a>
                    </div>
                </li>
                <li class="card">
                    <h3 class="card-title">Wrist Pain</h3>
                    <div class="card-content">
                        <div class=" row card-body d-flex align-items-center">
                            <div class="image-container">
                                <img src="..\images\tunnel.jpg" class="img-fluid rounded card-img-top" alt="image2">
                                <div class="image-overlay">
                                    <p class="overlay-text">Wrist pain due to laptop and mobile use is a condition commonly known as "tech neck" or "texting thumb."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-link-wrapper">
                        <a href="<?php echo $link4; ?>" class="card-link">Learn More</a>
                    </div>
                </li>
                <li class="card">
                    <h3 class="card-title">Neck Pain</h3>
                    <div class="card-content">
                        <div class=" row card-body d-flex align-items-center">
                            <div class="image-container">
                                <img src="..\images\neckpain.png" class="img-fluid rounded card-img-top" alt="image2">
                                <div class="image-overlay">
                                    <p class="overlay-text">Neck pain caused by technology refers to the discomfort and strain felt in the neck area as a result of prolonged usage of digital devices such as laptops, smartphones and tablets.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-link-wrapper">
                        <a href="<?php echo $link5; ?>" class="card-link">Learn More</a>
                    </div>
                </li>
                <li class="card " id="ear">
                    <h3 class="card-title">Ear Pain</h3>
                    <div class="card-content">
                        <div class=" row card-body d-flex align-items-center">
                            <div class="image-container">
                                <img src="..\images\ear.png" class="img-fluid rounded card-img-top" alt="image2">
                                <div class="image-overlay">
                                    <p class="overlay-text">Ear pain due to the use of technology gadgets like laptops, mobiles, earphones, headphones, etc. is a common issue faced by many people.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-link-wrapper">
                        <a href="<?php echo $link6; ?>" class="card-link">Learn More</a>
                    </div>
                </li>
            </ul>
        </div>

        <!-- bibliography -->
        <div class="container-sm-fluid container-lg my-5">
            <h5>References</h5>
            <ol>
                <li><a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7173320/" class="text-info">Health Risks from
                        Exposure to Low Levels of Ionizing Radiation: BEIR VII Phase 2. National Research Council (US)
                        Committee on the Biological Effects of Ionizing Radiations (BEIR). Washington (DC): National
                        Academies Press (US); 2006.</a></li>
                <li><a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC6497807/" class="text-info">The health effects of
                        ionizing radiation exposure: a review. Int J Environ Res Public Health. 2018;15(10):2279.</a></li>
                <li><a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7173320/" class="text-info">Health Risks from
                        Exposure to Low Levels of Ionizing Radiation: BEIR VII Phase 2. National Research Council (US)
                        Committee on the Biological Effects of Ionizing Radiations (BEIR). Washington (DC): National
                        Academies Press (US); 2006.</a></li>
            </ol>
        </div>

        <!-- footer -->
        <footer class="bg-dark py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="text-light">About Us</h5>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, magna id
                            bibendum molestie, ipsum odio congue nisl, id luctus magna augue et metus.</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-light">Contact Us</h5>
                        <ul class="list-unstyled">
                            <li class="text-muted">Email: info@example.com</li>
                            <li class="text-muted">Phone: +123-456-7890</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-light">Follow Us</h5>
                        <div class="d-flex justify-content-between">
                            <a href="#" class="text-light">
                                <i class="fab fa-facebook fa-2x"></i>
                            </a>
                            <a href="#" class="text-light">
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                            <a href="#" class="text-light">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div id="loading">
        <div class="spinner-grow text-light"></div>
    </div>

</body>

</html>