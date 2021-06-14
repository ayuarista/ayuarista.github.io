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
      
          <form class="form-login" action="#register" method="post" enctype="multipart/form-data">
            <h2 class="form-login-heading">Register now</h2>
            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="Name" autofocus name="name_user"><br>
                <input type="text" class="form-control" placeholder="Email" autofocus name="email_user"><br>
                <input type="text" class="form-control" placeholder="Age" autofocus name="age_user"><br>
            <select class="form-control" placeholder="Sex" name="sex_user">
              <option value="m">Male</option>
              <option value="f">Female</option>
            </select><br>
		<label for="chkcaregiver">
               <input type="checkbox" id="chkcaregiver"  />Do you Have Caregiver?
               </label>
          <br /> <br>
          <input type="text" class="form-control" name="cgname" id="cgname" placeholder="Caregiver Name" disabled ><br>
          <input type="text" class="form-control" name="cgage"  id="cgage" placeholder="Caregiver Age" disabled> <br>  
          <select class="form-control" name="cgsex" id="cgsex"  placeholder="Caregive Sex"  disabled>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
          </select> <br> 


<script>
	document.getElementById('chkcaregiver').onchange = function() {
		document.getElementById('cgname').disabled = !this.checked;
		document.getElementById('cgage').disabled = !this.checked;
		document.getElementById('cgsex').disabled = !this.checked;
	};

</script>

                <button class="btn btn-theme btn-block" name="register" type="submit"><i class="fa fa-lock"></i> REGISTER</button><hr>
                <div class="registration">
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

    <div id="register">
      <?php 

// Escape user inputs for security 

if(isset($_POST['register'])){

  $name_user = $_POST['name_user'];
  $email_user = $_POST['email_user'];
  $age_user = $_POST['age_user'];
  $sex_user = $_POST['sex_user'];
  $cgname = $_POST['cgname'];
  $cgage = $_POST['cgage'];
  $cgsex = $_POST['cgsex'];

// attempt insert query execution
$insert_user ="INSERT INTO user (id_user,nama_user,umur_user,jk_user,email_user,namacg_user,umurcg_user,jkcg_user) values (NULL,'$name_user','$age_user','$sex_user','$email_user','$cgname','$cgage','$cgsex')";

$run_user = mysqli_query($con,$insert_user);

if($run_user){
    $_SESSION['email_user']=$email_user;
    echo $_SESSION['email_user']."";
    echo "<script>window.open('../user/index.php','_self')</script>";
} else{
    echo "Keliru? ERROR: Could not able to execute $sql. " . mysqli_error($con);

}
}
?>

    </div>

  </body>
</html>
