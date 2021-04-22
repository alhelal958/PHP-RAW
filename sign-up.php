<?php
 require "session.php";

?><!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="assets/lib/select2/css/select2.min.css" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="assets/css/starlight.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
       
       
      <div class="container">
       <h2 class="signin-logo tx-center tx-24 tx-bold tx-inverse">Registration<span class="tx-info tx-normal">Form</span></h2>
       <h5 id="emailHelp" class="form-text text-muted text-center">We'll never share your email with anyone else.</h5>
       <div class="text-center text-success">
          <?php
            if (isset($_SESSION['registersuccessful'])) {
              echo $_SESSION['registersuccessful'];
              unset($_SESSION['registersuccessful']);
            }
          ?>
       </div>
       <form action="sign-up-post.php" method="POST">
       <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control <?php if(isset($_SESSION['Nameerr'])){echo "nameerr";}?>" id="name"  placeholder="Enter name" name="name">
          <style>.nameerr{border: 1px solid red;}</style>
          <span class="text-danger">
          <?php
            if (isset($_SESSION['Nameerr'])) {
              echo $_SESSION['Nameerr'];
              unset($_SESSION['Nameerr']);
            }
          ?>
          </span>
       </div>


        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control emailerr" id="email"  placeholder="Enter email" name="email">
          <span class="text-danger">
          <?php
            if (isset($_SESSION['emailerr'])) {
              echo "<style>.emailerr{border: 1px solid red;}</style>";
              echo $_SESSION['emailerr'];
              unset($_SESSION['emailerr']);
            }
             if (isset($_SESSION['emailvaliderr'])) {
              echo "<style>.emailerr{border: 1px solid red;}</style>";
              echo $_SESSION['emailvaliderr'];
              unset($_SESSION['emailvaliderr']);
            }
             if (isset($_SESSION['emailfound'])) {
              echo "<style>.emailerr{border: 1px solid red;}</style>";
              echo $_SESSION['emailfound'];
              unset($_SESSION['emailfound']);
            }
          ?>
          </span>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control passworderr" id="password" placeholder="Password" name="password">
          <span class="text-danger">
          <?php
            if (isset($_SESSION['passworderr'])) {
              echo "<style>.passworderr{border: 1px solid red;}</style>";
              echo $_SESSION['passworderr'];
              unset($_SESSION['passworderr']);
            }
             if (isset($_SESSION['passvalidation'])) {
              echo "<style>.passworderr{border: 1px solid red;}</style>";
              echo $_SESSION['passvalidation'];
              unset($_SESSION['passvalidation']);
            }
          ?>
          </span>
        </div>

        <div class="form-group">
          <label for="password">Confirm Password</label>
          <input type="password" class="form-control confirmpassworderr" id="password" placeholder="Confirm Password" name="confirm_password">
          <span class="text-danger">
          <?php
            if (isset($_SESSION['confirmpassworderr'])) {
              echo "<style>.confirmpassworderr{border: 1px solid red;}</style>";
              echo $_SESSION['confirmpassworderr'];
              unset($_SESSION['confirmpassworderr']);
            }
             if (isset($_SESSION['confirmpasswordmatcherr'])) {
              echo "<style>.confirmpassworderr{border: 1px solid red;}</style>";
              echo $_SESSION['confirmpasswordmatcherr'];
              unset($_SESSION['confirmpasswordmatcherr']);
            }
          ?>
          </span>
        </div>
       <div class="text-md-center">
        <button type="submit" class="btn btn-primary">Submit</button>
       </div>
      </form>

      </div>
 <div class="mg-t-40 tx-center">Already have an account? <a href="login.php" class="tx-info">Sign In</a></div>
    <script src="assets/lib/jquery/jquery.js"></script>
    <script src="assets/lib/popper.js/popper.js"></script>
    <script src="assets/lib/bootstrap/bootstrap.js"></script>
    <script src="assets/lib/select2/js/select2.min.js"></script>
    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>

  </body>
</html>
