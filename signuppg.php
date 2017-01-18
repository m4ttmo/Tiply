<?php
include('validation.php'); // Includes Login Script

?>
<!DOCTYPE html>
<html lang="em">
  <head>
    <meta charset="utf-8">
    <title>Tiply.</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    
  </head>
  <body>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-4">
         <a href="index.html"><img src="Logomakr_5J7WZX.png"></a>
      </div>
      <div class="col-lg-6">
        <nav>
           <ul class="nav nav-pills">
              <li role="presentation"><a href="loginpg.php">Log in</a></li>
              <li role="presentation"><a href="#">Sign up</a></li>
            </ul>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <h2>Sign up</h2>
      </div>
    </div>
    <form action="validation.php" method="get">
      <div class="row">
        <div class="col-lg-12">
          <div class="input-group input-group-lg">
           <!-- <span class="input-group-addon" id="basic-addon1">@</span>-->
            <input type="text" class="form-control" placeholder="e-mail" aria-describedby="basic-addon1" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="input-group input-group-lg">
           <!-- <span class="input-group-addon" id="basic-addon1">@</span>-->
            <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" max-length="8" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="input-group input-group-lg">
            <!--<span class="input-group-addon" id="basic-addon1">&</span>-->
            <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="input-group input-group-lg">
            <!--<span class="input-group-addon" id="basic-addon1">&</span>-->
            <input type="text" class="form-control" placeholder="Confirm password" aria-describedby="basic-addon1" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="btn-group btn-group-lg" role="group" aria-label="...">
            <button name="submit" type="submit" value="Submit" class="btn btn-default">Continue</button>
          </div>
        </div>
      </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
      window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>