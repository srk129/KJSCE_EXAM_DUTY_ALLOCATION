<?php
session_start(); 
include("Datasource.php");
    if (isset($_SESSION['type'])) {

        if ($_SESSION['type'] == 'admin') {
            header("Location: Duty.php");//dev change this page php
            exit();
        } else if ($_SESSION['type'] == 'manager') {
            header("Location: decf.php");//dev change this page php
            exit();
        } else if ($_SESSION['type'] == 'faculty') {
            header("Location: factDuty.php");//dev change this page php
            exit();
        } else {
            header("Location: newhome.php");//dev change this page php
            exit();
        }
    }
  ?>

<!doctype html>
<html lang="en">



<head>
    <script language ="javascript"type="text/javascript">
        window.history.forward();
    </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <!--Dev Change api key here-->
    <meta name="google-signin-client_id" content="745236768405-2r5hn4emf30s1bgoemd8922nm60iljs1.apps.googleusercontent.com"> 

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Favicon link -->
    <link rel="shortcut icon" href="somaiya.PNG" type="image/x-icon">
    <title>Exam Duty Allocation System</title>
    
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
        }

        .container-custom {
            position: relative;
            text-align: center;

            color: white;

        }

        .centered {
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .img-fluid{
              opacity: 0.;
        }
    </style>
</head>

<body>

    <div class="jumbotron-fluid container-custom">
        <img src="test.jpg" alt="" class="img-fluid" width="100%">
        <div class="container">
            <h1 class="centered" style="font-size: 4vw;">Exam Duty Allocation System</h1>
            <p class="centered" id="my-signin1" style="margin-top: 200px;" onclick="ClickLogin()" data-onsuccess="onSignIn"></p>
            <!--<button onclick=signOut()>SIGN OUT</buttpn> -->
        </div>
    </div>
    <hr class="my-4">

    <div class="row container mx-auto">
        <div class="col-md-7">
          <h2 class="my-4">K.J. Somaiya College of Engineering</h2>
          <p class="my-4">Somaiya Vidyavihar University <br>
          Vidyanagar, Vidyavihar(E), Mumbai - 400 077, Maharashtra.</p>
        </div>
        <div class="col-md-5">
          <img src="kjsce-home.jpg" alt="" class="img-fluid" >
        </div>
      </div>
    <hr class="my-4">
    <div class="row container mx-auto">
        <div class="col-md-7 order-md-2">
          <div class="container my-4">
              <div class="website">
                  <a href="https://kjsce.somaiya.edu/en" class="btn btn-outline-primary my-2" target="_blank">Website</a>
              </div>
              <div class="email">
                <a href="www.gmail.com" class="btn btn-outline-danger my-2  " target="_blank">E-Mail</a>
              </div>
              <div class="phone my-2">
                Phone : 91-22-66449191
              </div>
          </div>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="contact-us.jpg" alt="" class="img-fluid" >
        </div>
      </div>
    <hr class="my-4">
    <footer class="container">
        <p>© Company 2017-2020</p>
    </footer>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
     <!--<script src="https://apis.google.com/js/platform.js?onload=renderButton" ></script>-->
    <!--Rendered data-->
     <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/moment.min.js"></script>


    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/material-kit.js" type="text/javascript"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
    <script>

        var clicked = false;

        function ClickLogin() {
            clicked = true;
        }

        function onSuccess(googleUser) {

            $('#my-signin1 div div span span:last').text("Sign in");
            if (clicked) {
                $('#my-signin1 div div span span:last').text("Signed In");
                var profile = googleUser.getBasicProfile();
                var id_token = googleUser.getAuthResponse().id_token;


                console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
                console.log('Name: ' + profile.getName());
                console.log('Image URL: ' + profile.getImageUrl());
                console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.

                if (profile) {
                    $.ajax({
                        type: 'POST',
                        url: 'verifyuser.php',
                        data: {
                            id: profile.getId(),
                            // name: profile.getName(),
                            email: profile.getEmail(),
                            // imgurl: profile.getImageUrl(),
                            id_token: id_token
                        }
                    }).done(function (usertype) {
                        console.log(usertype);

                        if (usertype == "admin") {
                            console.log("admin");
                            window.location.href = 'Duty.php';//dev change this page php
                        } else if (usertype == "manager") {
                            console.log("manager");
                            window.location.href = 'decf.php';//dev change this page php
                        } else if (usertype == "faculty") {
                            console.log("faculty");
                            window.location.href = 'fac.php';//dev change this page php
                        }else if (usertype == "User") {
                            console.log("In user");
                            window.location.href = 'dashboard.php';//dev change this page php
                        } else if (usertype == "Firstuser") {
                            console.log("In first user");
                            window.location.href = 'dashboard.php';//dev change this page php
                        }

                        //window.location.href = 'dashboard.php';

                    }).fail(function () {
                        alert("Error occur. Try again later");
                    });
                }
            }
        }

        function onFailure(error) {
            console.log(error);

        }

        function renderButton() {

            gapi.signin2.render('my-signin1', {
                'scope': 'profile email',
                'width': 240,
                'height': 50,
                'longtitle': false,
                'theme': 'dark',
                'prompt': 'select_account',
                'onsuccess': onSuccess,
                'onfailure': onFailure
            });
        }
    </script>
    <script>
        $(document).ready(function () {
            // Add smooth scrolling to all links
            $("a").on('click', function (event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top - 100
                    }, 1000, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>
</body>

</html>