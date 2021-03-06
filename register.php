<?php
  include 'config.php';

  if (isset($_POST['register']))
  {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
    $emailaddress = mysqli_real_escape_string($conn, $_POST['emailaddress']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $password = hash('sha256', mysqli_real_escape_string($conn, $_POST['password'])); 
    
    $sql_check = "SELECT user_id FROM dbo_user WHERE email='$emailaddress'";
    $totalRows = mysqli_num_rows(mysqli_query($conn, $sql_check));
    
    if ($totalRows == 0)
    {
      $sql_register = "INSERT INTO dbo_user VALUES('$name', '$emailaddress',
      '$birthday', '$description', '$password','')";
      $addedCount = mysqli_query($conn, $sql_register);

      
      header('location: login.php?register=success');
      
    }
  }
?>



<!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta charset="utf-8" />
  <title>PYRE</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="js/jPlayer/jplayer.flat.css" type="text/css" />
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link rel="stylesheet" href="css/app_login.css" type="text/css" />  
    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<!-- <body class="bg-info dker"> -->
<body>
  <div class="parallax-window" data-parallax="scroll" data-image-src="images/music2.jpeg">
  <section id="content" class="wrapper-md animated fadeInDown">
    <div class="container aside-xl">
    <img src="images/logo_big.png" alt="." class="img-full-md m-l-xl" >
      
      <section class="m-b-lg">
        <header class="wrapper text-center">
          <strong>Sign up to find interesting thing</strong>
        </header>
        <form method="POST">
          <div class="form-group">
            <input name="name" placeholder="Name" class="form-control rounded input-lg text-center no-border">
          </div>
          <div class="form-group">
            <input name="emailaddress" type="email" placeholder="Email" class="form-control rounded input-lg text-center no-border">
          </div>
          <div class="form-group">
             <input name="birthday" type="date" placeholder="Birthday" class="form-control rounded input-lg text-center no-border">
          </div>
              <div class="form-group">
             <input name="description" type="" placeholder="Description" class="form-control rounded input-lg text-center no-border">
          </div>
          <div class="form-group">
             <input name="password" type="password" placeholder="Password" class="form-control rounded input-lg text-center no-border">
          </div>
          <div class="checkbox i-checks m-b">
            <label class="m-l">
              <input type="checkbox" checked=""><i></i> Agree the <a href="#">terms and policy</a>
            </label>
          </div>
          <button name="register" type="submit" class="btn btn-lg btn-danger lt b-white b-2x btn-block btn-rounded"><i class="icon-arrow-right pull-right"></i><span class="m-r-n-lg">Sign up</span></button>
          <div class="line line-dashed"></div>
          <p class="text-muted text-center"><small>Already have an account?</small></p>
          <a href="signin.html" class="btn btn-lg btn-info btn-block btn-rounded">Sign in</a>
        </form>
      </section>
    </div>
  </section>
</div>
  <!-- / footer -->
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- App -->
  <script src="js/app.js"></script>  
  <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/app.plugin.js"></script>
  <script type="text/javascript" src="js/jPlayer/jquery.jplayer.min.js"></script>
  <script type="text/javascript" src="js/jPlayer/add-on/jplayer.playlist.min.js"></script>
  <script type="text/javascript" src="js/jPlayer/demo.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/parallax.js"></script>

</body>
</html>