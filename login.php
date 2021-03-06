<?php
include('dbconnection.php');
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
    <link rel="stylesheet" href="./css/custom.css">

    <title>Customer Login</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand active" href="./index.html"><img src="./Resourses/8LWpMxMS_400x400.jpg" height="40" width="40" alt="QMobile"> QMobile</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.html"> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">My Orders</a>
                            <a class="dropdown-item" href="#">Cart</a>
                            <a class="dropdown-item" href="#">Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Sign Out</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Breadcrumb -->
    <div class="container">
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                <li class="breadcrumb-item active">Login</li>
            </ol>
        </div>
    </div>


    <div class="container" >
        <div class="row">

            <div class="col-md-4">
            </div>

            <div id=log class="col-md-4" style="margin-top: 150px">
            <h1 class="text-center">Login</h1>
                <form method = "post" action="login.php">

                  <?php include('errors.php'); ?>

                    <div class="form-group">
                        <label class="label col-form-label">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter Username..." required/>
                    </div>
                    <div class="form-group">
                        <label class="label col-form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password..." required/>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="checkbox"><small class="mt-2"> Remember me</small>
                        </div>
                        <div class="col-md-6">
                          <?php
                          if(isset($_GET["newpwd"])){
                            if ($_GET["newpwd"] == "passwordupdated") {
                              echo '<p class="signupsuccess">Your password has been reset!</p>';
                            }
                          }

                           ?>

                          <a href="reset-password.php"><p id="pass" class="text-right">Forget Password</p></a>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="login" class="btn btn-success btn-lg btn-block" value="Login"><br>

                        <p id=Member class="text-center">Not a Member Yet?<a href="register.php"> Signup</a></p>

                    </div>
                </form>
            </div>

            <div class="col-md-4">
            </div>

        </div>
    </div><br>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./index.html">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="./contactus.html">Contact</a></li>
                    </ul>
                </div>
                <!-- Address -->
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
                        No 121, Templers road,<br>
                        Mount Lavinia, <br>
                        Sri Lanka.<br>
                        <!-- Bootstrap font awesome -->
                        <i class="fa fa-phone fa-lg"></i>: +9411 234 5678<br>
                        <i class="fa fa-fax fa-lg"></i>: +9411 234 5678<br>
                        <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:qmobile@gmail.com">qmobile@gmail.com</a>
                    </address>
                </div>
                <!-- Bootstrap social -->
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:qmobile@gmail.com"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
           </div>
           <!-- Copyright -->
           <div class="row justify-content-center">
                <div class="col-auto">
                    <p>© Copyright 2019 QMobile.Ltd</p>
                </div>
           </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>
</body>
</html>
