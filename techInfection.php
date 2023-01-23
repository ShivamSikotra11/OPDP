<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
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
            width: 0.0em;
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar-thumb {
          background-color: #000000;
        }

        #bar::-webkit-scrollbar {   
            width: 0.4em;
            /* background-color: #F5F5F5; */
            background-color: lightblue;
        }

        #bar::-webkit-scrollbar-thumb {
          background-color: blue;
        }
        .btn-custom-hover:hover{
            background-color:red!important;
        }
        .dropdown-menu {
            margin-right:30px;
        }
    </style>
</head>

<body>

    <!-- Nav-bar Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Your Site</a>
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
                            <button type="button" class="btn btn-outline-primary ml-lg-3" data-toggle="modal" data-target="#loginModal">&nbsp&nbspLogin&nbsp&nbsp</button>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-outline-success ml-lg-3 my-2 my-lg-0" data-toggle="modal" data-target="#registerModal">Register</button>
                        </li>
                    </ul>
                <div>
            <?php } ?>
        </div>
    </nav>

    <div id="bar" style="height:601px; overflow-y: scroll;">
        <!-- The Login modal-->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearModalData()">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="logintry.php">
                  <div class="form-group">
                    <label for="eid">Email-id:</label>
                    <input type="text" class="form-control" id="eid"  placeholder="Enter your email" name="emailid">
                  </div>
                  <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
                  </div>
                  <?php
                      if(isset($_GET["error"]))
                      {
                          if($_GET["error"] == "invalid_credentials")
                           {
                              echo "<script>";
                              echo "$(document).ready(function() {";
                              echo "$('#loginModal').modal('show');";
                              echo "});";
                              echo "</script>";
                              echo "<div class='alert alert-danger'>Error: Invalid login credentials. Please try again.</div>";
                          }
                      }
                  ?>
                </div>
                <div class="modal-footer d-flex">
                    <button type="button" class="btn btn-outline-success mr-auto" data-toggle="modal" data-dismiss="modal" data-target="#registerModal">Don't have an account? Register</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearModalData()">Close</button>                        
                    <input type="submit" value="Login" name="submit" class="btn btn-primary">
                </div>
            </form>
            </div>
          </div>
        </div>
        <!-- Register Modal -->
        <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="registerModalLabel">Register</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearRegis();">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="regis.php">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="namer" name="namer" placeholder="Enter Name" value="<?php if(isset($_SESSION['name'])) {echo $_SESSION['name'];} ?>">
                            </div>
                            <?php
                                if(isset($_GET["error"]))
                                {
                                    if($_GET["error"] == "invalid_name")
                                     {
                                        echo "<script>";
                                        echo "$(document).ready(function() {";
                                        echo "$('#registerModal').modal('show');";
                                        echo "});";
                                        echo "</script>";
                                        echo "<div class='alert alert-danger'>Error: Please enter Valid Name(length>4).</div>";
                                    }
                                }
                            ?>
                            <div class="form-group">
                                <label for="emailid">Email-id:</label>
                                <input type="text" class="form-control" id="eidi" placeholder="Enter your email" name="emailidr" value="<?php if(isset($_SESSION['email'])) {echo $_SESSION['email'];} ?>" >
                            </div>
                            <?php
                                if(isset($_GET["error"]))
                                {
                                    if($_GET["error"] == "duplicate_email")
                                     {
                                        echo "<script>";
                                        echo "$(document).ready(function() {";
                                        echo "$('#registerModal').modal('show');";
                                        echo "});";
                                        echo "</script>";
                                        echo "<div class='alert alert-danger'>Error: Email already exists. Please use a different email.</div>";
                                    }
                                    if($_GET["error"] == "nonvalid_email")
                                     {
                                        echo "<script>";
                                        echo "$(document).ready(function() {";
                                        echo "$('#registerModal').modal('show');";
                                        echo "});";
                                        echo "</script>";
                                        echo "<div class='alert alert-danger'>Error: Please enter the valid Email Address</div>";
                                    }
                                }
                            ?>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password1" name="passwordr" placeholder="Enter your password" value="<?php if(isset($_SESSION['password'])) {echo $_SESSION['password'];} ?>">
                            </div>
                            <?php
                                if(isset($_GET["error"]))
                                {
                                    if($_GET["error"] == "weak_password")
                                     {
                                        echo "<script>";
                                        echo "$(document).ready(function() {";
                                        echo "$('#registerModal').modal('show');";
                                        echo "});";
                                        echo "</script>";
                                        echo "<div class='alert alert-danger'> Please enter Strong Password of Length At least 8 length,&nbsp At least one Uppercase letter,At least one Lowercase letter,At least one special character and At least one digit.</div>";
                                    }
                                }
                            ?>
                            <div class="form-group">
                                <label for="gender">Gender:&nbsp</label>Male:
                                <input type="radio" id="male1" name="genderr" value="Male" checked <?php if(isset($_SESSION['gender']) && $_SESSION['gender']=='Male') echo "checked";?> >&nbspFemale 
                                <input type="radio" id="female1" name="genderr" value="Female"  <?php if(isset($_SESSION['gender']) && $_SESSION['gender']=='Female') echo "checked";?> >
                            </div>
                            <div class="form-group">
                                <label for="mobileNumber">Mobile Number:</label>
                                <input type="tel" class="form-control" id="mN" name="mNr" placeholder="Enter your mobile number" value="<?php if(isset($_SESSION['mNr'])) {echo $_SESSION['mNr'];} ?>">
                            </div>
                            <?php
                                if(isset($_GET["error"]))
                                {
                                    if($_GET["error"] == "correct_number")
                                     {
                                        echo "<script>";
                                        echo "$(document).ready(function() {";
                                        echo "$('#registerModal').modal('show');";
                                        echo "});";
                                        echo "</script>";
                                        echo "<div class='alert alert-danger'>Error: Please enter 10 digit Number.</div>";
                                    }
                                }
                            ?>
                        </div>
                        <div class="modal-footer d-flex">
                            <button type="button" class="btn btn-outline-success mr-auto" data-toggle="modal" data-dismiss="modal" data-target="#loginModal">Already have an account? Login</button>
                            <!-- <div class="btn-group"> -->
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearRegis()">Close</button>
                                <input type="submit" value="Register" name="submitr" class="btn btn-primary">
                            <!-- </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>

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
    </div>
</body>

</html>