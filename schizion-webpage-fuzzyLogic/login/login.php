 <?php
include("../includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <link rel="shortcut icon" href="assets/img/brain.ico" />
        <title>Schizion - Schizophrenia Detection</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="#login" method="post" enctype="multipart/form-data">
		        <h2 class="form-login-heading">log in now</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" placeholder="Email" autofocus name="email_user">
		            <br>
		            <button class="btn btn-theme btn-block" name="login" type="submit"><i class="fa fa-lock"></i> LOG IN</button>
		            <hr>
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="regis.php">
		                    Create an account
		                </a><br/><br/>
		                <a class="btn btn-round btn-info" href="../index.html">
		                    Back</a>
		            </div>
		
		        </div>
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg4.png", {speed: 500});
    </script>

<div id="login">
  <?php

    if(isset($_POST['login'])){
            $email_user= $_POST['email_user'];

    $sel_user = "SELECT* FROM user WHERE email_user='$email_user'";
    $run_user = mysqli_query($con, $sel_user);
    $check_user = mysqli_num_rows($run_user);
            
    if($check_user==0){
        echo "<script>alert('Email is wrong or not registered yet, try again!')</script>";    

            }
        else {
            $_SESSION['email_user']=$email_user;
            echo "<script>window.open('../user/index.php?logged_in=You have successfully logged in!','_self')</script>";
                
            }
    } ?>

</div>

  </body>
</html>


