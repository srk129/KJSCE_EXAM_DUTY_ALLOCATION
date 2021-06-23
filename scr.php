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