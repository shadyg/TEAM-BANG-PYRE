<?php
	include 'config.php';
	
	if (isset($_POST['login']))
	{
		$emailaddress = mysqli_real_escape_string($conn, $_POST['emailaddress']);
		$password = hash('sha256', mysqli_real_escape_string($conn, $_POST['password']));
		
		$sql_check = "SELECT user_id, user_email, user_birthday, user_name, user_description FROM dbo_user WHERE user_email='$emailaddress' AND user_password='$password'";
		
		$result = $conn->query($sql_check);
		$totalRows = mysqli_num_rows(mysqli_query($conn, $sql_check));
			
		if ($totalRows == 1)
		{
			while ($row = mysqli_fetch_array($result))
			{
				//$_SESSION['uid'] = $row['id'];
				session_start();
				$_SESSION['uid'] = $row['user_id'];
				$_SESSION['emob'] = $row['user_email'];
				$_SESSION['birt'] = $row['user_birthday'];
				$_SESSION['name'] = $row['user_name'];
				$_SESSION['desc'] = $row['user_description'];
			}
			header('location: index.php');
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
  <div class="parallax-window" data-parallax="scroll" data-image-src="images/music.jpeg">
  <section id="content" class="wrapper-xl animated fadeInUp">    

    <div class="container aside-xl">
    <img src="images/logo_big.png" alt="." class="img-full m-l-xl" >
      
      <section class="m-b-lg">
        <header class="wrapper text-center text-white">

          <strong>Sign in to get started</strong>
        </header>
        <form method="POST">
          <div class="form-group">
            <input name="emailaddress" type="email" placeholder="Email" class="form-control rounded input-lg text-center no-border">
          </div>
          <div class="form-group">
             <input name="password" type="password" placeholder="Password" class="form-control rounded input-lg text-center no-border">
          </div>
          <button name="login" type="submit" class="btn btn-lg btn-danger lt b-white b-2x btn-block btn-rounded"><i class="icon-arrow-right pull-right"></i>
            <span class="m-r-n-lg">Sign in</span></button>
          <div class="text-center m-t m-b"><a href="#"><small>Forgot password?</small></a></div>
          <div class="line line-dashed"></div>
          <p class="text-muted text-center"><small>Do not have an account?</small></p>
          <a href="signup.html" class="btn btn-lg btn-info btn-block rounded">Create an account</a>
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