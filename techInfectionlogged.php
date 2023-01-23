<?php 
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <script src="oot.js"></script>
    <style>
        .carousel-control-prev,
        .carousel-control-next {
            display: none;
        }
        .carousel-item img{
            margin: 0 30px;
        }

        ::-webkit-scrollbar {   
            width: 0.2em;
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar-thumb {
          background-color: #000000;
        }
        .btn-custom-hover:hover{
            background-color:red!important;
            /* color:red; */
        }
    </style>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Tech Infections</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-4" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-custom-hover btn-danger ml-lg-3" data-toggle="modal" data-target="#loginModal">&nbspLog Out&nbsp</button>
                    </li>
                    <li>
                        <!-- <button class="btn btn-outline-success ml-lg-3 my-2 my-lg-0" data-toggle="modal" data-target="#registerModal">Register</button> -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="500" style="margin:5%;margin-top:100px;" >
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image.jpg" width="30px" height="300%" class="d-block w-100 mx-auto" alt="image1">
            </div>
            <div class="carousel-item">
                <img src="image.jpg" width="30px" height="300%" class="d-block w-100 mx-auto" alt="image2">
            </div>
            <div class="carousel-item">
                <img src="image.jpg" width="30px" height="300%" class="d-block w-100 mx-auto" alt="image3">
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
    <div class="container mt-5">
        <h1 class="text-center mb-5">Tech Infections</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>What are tech infections?</h3>
                    </div>
                    <div class="card-body">
                        <p>Tech infections are malicious software that can harm your device and steal your personal
                            information. Common types of tech infections include malware, viruses, spyware, and adware.
                            They can slow down your device, cause data loss, and even lead to identity theft.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
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
    </div>
    <!-- Search Button -->
    <form action="search.php" method="post" style="margin: 50px;text-align: center;">
        <input type="text" name="search_term" placeholder="Search...">
        <button type="submit" name="submit_search">Search</button>
    </form>
    <div class="container my-5">
        <a class="navbar-brand text-center" href="#">Tech Infections Types</a>
        <ul class="list-group">
            <li class="list-group-item">Back pain</li>
            <li class="list-group-item">Carpal Tunnel Syndrome</li>
            <li class="list-group-item">Computer Vision Syndrome</li>
            <li class="list-group-item">Text Neck</li>
            <li class="list-group-item">Tennis Elbow</li>
        </ul>
    </div>
    <!-- //blog -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <img src="image.jpg" class="img-fluid rounded" alt="image1">
                <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, magna id bibendum
                    molestie, ipsum odio congue nisl, id luctus magna augue et metus. </p>
            </div>
            <div class="col-md-6">
                <img src="image.jpg" class="img-fluid rounded" alt="image2">
                <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, magna id bibendum
                    molestie, ipsum odio congue nisl, id luctus magna augue et metus. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" class="col-sm-12">
                <img src="image.jpg" class="img-fluid rounded" alt="image3">
                <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, magna id bibendum
                    molestie, ipsum odio congue nisl, id luctus magna augue et metus. </p>
            </div>
            <div class="col-md-6">
                <img src="image.jpg" class="img-fluid rounded" alt="image4">
                <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, magna id bibendum
                    molestie, ipsum odio congue nisl, id luctus magna augue et metus. </p>
            </div>
        </div>
    </div>
    <!-- bibliography -->
    <div class="container my-5">
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
</body>

</html>