<?php
include('register.php'); // Includes Login Script
 ob_start();
 session_start();
 if( isset($_SESSION['user'])!="" ){
  header("Location: home.php");
 }
 include_once 'dbconnect.php';

 $error = false;

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

 <div id="login-form">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    
     <div class="col-lg-12">
            
            <?php
   if ( isset($errMSG) ) {
    
    ?>
 
             <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
    <?php echo $errMSG; ?>
                </div>
             
                <?php
   }
   ?>
         <div class="row">
        <div class="col-lg-12">
          <div class="input-group input-group-lg">
            <input type="text" name="name" class="form-control" placeholder="Enter Name" maxlength="50" value="<?php echo $name ?>" />
                </div>
                <span class="text-danger"><?php echo $nameError; ?></span>
          </div>
        </div>
      </div>
         <div class="row">
        <div class="col-lg-12">
          <div class="input-group input-group-lg">
            <input type="email" name="email" class="form-control" placeholder="E-mail" maxlength="40" value="<?php echo $email ?>" />
                </div>
                <span class="text-danger"><?php echo $emailError; ?></span>
          </div>
        </div>
         <div class="row">
        <div class="col-lg-12">
          <div class="input-group input-group-lg">
            <input type="password" name="pass" class="form-control" placeholder="Password" maxlength="15" />
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-group btn-group-lg" role="group" aria-label="...">
                <button type="submit" class="btn btn-default" name="btn-signup">Continue</button>
          </div>
        </div>
      </div>
    </form>
    </div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
      window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php ob_end_flush(); ?>