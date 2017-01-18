<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tiply.</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	  
    <!--Main CSS file-->
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
            <ul class="nav nav-pills main-nav">
                <li role="presentation" class="cd-signin"><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
      </div>
      <div class="col-lg-2"></div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <h1>Welcome : <i><?php echo $login_session; ?></i></h1>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
      window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>