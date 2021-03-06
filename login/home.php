<!doctype html>
<html lang="en">
  <?php 
    include ('Datasource.php');
  ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Favicon link -->
    <link rel="shortcut icon" href="somaiya.PNG" type="image/x-icon">
    <title>Exam Duty Allocation System</title>
    <meta name="google-signin-client_id" content="745236768405-2r5hn4emf30s1bgoemd8922nm60iljs1.apps.googleusercontent.com">
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
            <p class="centered" id="my-signin2"style="margin-top: 200px;"></p>
            <!--<button onclick=signOut()>SIGN OUT</buttpn> -->
            <script>
              
              function onFailure(error) {
                console.log(error);
              }
              function renderButton() {
                gapi.signin2.render('my-signin2', {
                  'scope': 'profile email',
                  'width': 240,
                  'height': 50,
                  'longtitle': true,
                  'theme': 'dark',
                  'onsuccess': onSuccess,
                  'onfailure': onFailure
                });
              }

              function onSuccess(googleUser) {
                // Useful data for your client-side scripts:
                var profile = googleUser.getBasicProfile();
                console.log('ID: ' + profile.getId()); // Don't send this directly to your server!
                console.log('Name: ' + profile.getName());
                console.log('Image URL: ' + profile.getImageUrl());
                console.log('Email: ' + profile.getEmail());
                var ema = googleUser.getBasicProfile().getEmail();
                console.log('Ema:' + ema );
                // The ID token you need to pass to your backend:
                var id_token = googleUser.getAuthResponse().id_token;
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'http://localhost/examduty/new/login/home.php',true );
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onload = function() {
                  console.log('Signed in as: ' + xhr.responseText);
                };
                xhr.send('idtoken=' + id_token);
              
                <?php
          
                     $email = "<script>document.write(ema)</script>";
                   $query = "SELECT * FROM login_info where email_id='$email'";   
                   $result = mysqli_query ($conn, $query); // Run the query
                   while($row = mysqli_fetch_assoc($result)) { 
                       if($row['fact_design']='admin'){
                         //"<script>document.location.href ='http://localhost/examduty/new/login/Duty.html';</script>";
                        header("Location:http://localhost/examduty/new/login/Duty.html");
                       }
                       else{
                        //"<script>document.location.href ='http://localhost/examduty/new/login/facultydash.html';</script>";
                        header("Location:http://localhost/examduty/new/login/facultydash.html");
                       }
                    }
                //   while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                //     if($row['user'] == 'faculty'){
                //       header("Location:http://localhost/google/facultydash.html");
                //     }
                //     else{
                //       header("Location:http://localhost/google/Duty.html");
                //     }
                //   }
                 ?>


                 
                 // document.location.href = 'http://localhost/examduty/new/Duty.html' ;    // idhar jo bhi file ka name u write udhar redirect karega ******
       
             };

             /* function signOut() {
                  gapi.auth2.getAuthInstance().signout().then(function(){
                      console.log('User Signed Out')
                  })
              }*/
            </script>

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
        <p>?? Company 2017-2020</p>
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
     <script src="https://apis.google.com/js/platform.js?onload=renderButton" ></script>
</body>

</html>