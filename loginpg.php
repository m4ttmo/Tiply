<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
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
              <li role="presentation"><a href="#">Log in</a></li>
              <li role="presentation"><a href="signuppg.php">Sign up</a></li>
            </ul>
        </nav>
      </div>
    </div>
    <form action="" method="post">
      <div class="row">
        <div class="col-lg-12">
          <h2>Log in</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="input-group input-group-lg">
           <!-- <span class="input-group-addon" id="basic-addon1">@</span>-->
            <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" max-length= 8 required id="name" name="username">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="input-group input-group-lg">
            <!--<span class="input-group-addon" id="basic-addon1">&</span>-->
            <input class="form-control" placeholder="Password" aria-describedby="basic-addon1" required id="password" name="password" type="password">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="btn-group btn-group-lg" role="group" aria-label="...">
            <button type="submit" class="btn btn-default" name="submit" value=" Login ">Continue</button>
          </div>
            <span><?php echo $error; ?></span>
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