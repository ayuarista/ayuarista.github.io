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
    <title>Schizion</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Schizion</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                   
                <!--  notification end -->
            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">
                  <?php
          if(isset($_SESSION['email_user'])){

          echo "Welcome:" . $_SESSION['email_user'] ."";
         }
         else {
          echo "Welcome, user";
         }

         ?></h5>
                    
                 <li class="mt">
                      <a class="active" href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="profile.php" >
                          <i class="fa fa-cogs"></i>
                          <span>Profile</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="profil_patient.html">Patient</a></li>
                          <li><a  href="profil_caregiver.html">Care Giver</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="diagnosis.php" >
                          <i class="fa fa-book"></i>
                          <span>Diagnosis</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="diag_patient.php">Patient</a></li>
                          <li><a  href="diag_caregiver.php">Care Giver</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="about.php" >
                          <i class="fa fa-tasks"></i>
                          <span>About Schizophrenia</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="contact.php" >
                          <i class="fa fa-th"></i>
                          <span>Contact</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="logout.php" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Logout</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      
       <!--main content start-->
       <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-11 main-chart">

      <h2>SCHIZION RESULT</h2>
      <h5>Title description, Sep 2, 2017</h5>
       <div class="row">
              <div class="col-lg-5 main-chart">
              <img align="middle" class= "center" src="assets/img/BRAIN-1.png"/><br>
              </div>
              <div class="col-lg-5 main-chart showback">
              <?php


$email = $_SESSION['email_user'];

    $sel_user = "SELECT* FROM user WHERE email_user='$email'";
    $run_user = mysqli_query($con, $sel_user);
    $row_c = mysqli_fetch_array($run_user);
    $u_id = $row_c['id_user'];   


    $sel_result = "SELECT* FROM result WHERE idusera_result='$u_id'";
    $run_result = mysqli_query($con, $sel_result);
    $row_result = mysqli_fetch_array($run_result);
    $cga_result = $row_result['cga_result'];
    $user_result = $row_result['usera_result'];

// echo "$cga_result=cga, $user_result=user rslt ";

if ($cga_result = 3 OR $cga_result = 0 )
{
  if ($user_result = 0) {
    echo "No Indication of Schizophrenia <br/>";
    echo "Your answers suggest that there is Little or No indication that you have symptoms common among people with schizophrenia. However, this quiz is no substitute for a proper diagnosis from a health care professional and we would encourage you to schedule an appointment with your doctor or other mental health professional now.";
  }
  else {
    echo "No Indication of Schizophrenia <br/>";
    echo "Your answers suggest that there is Little or No indication that you have symptoms common among people with schizophrenia. However, this quiz is no substitute for a proper diagnosis from a health care professional and we would encourage you to schedule an appointment with your doctor or other mental health professional now.";
  }
}

elseif ($cga_result = 1 ) {
  if ($user_result = 0) {
 echo "No Indication of Schizophrenia <br/>";
    echo "Your caregiver suggest that there is Little or No indication that you have symptoms common among people with schizophrenia. However, this quiz is no substitute for a proper diagnosis from a health care professional and we would encourage you to schedule an appointment with your doctor or other mental health professional now";
  }
  else {
     echo "No Indication of Schizophrenia<br/>"; 
    echo "Both Your answers & caregiver suggest that there is Little or No indication that you have symptoms common among people with schizophrenia. However, this quiz is no substitute for a proper diagnosis from a health care professional and we would encourage you to schedule an appointment with your doctor or other mental health professional now";

  }
}


?>

<br>
              
              </div>
              <div class="col-lg-6">
              <h4>Here Some Recommendation : </h4><br></div>
            </div>
            <div class="row">
            <div class="col-sm-6">
              <div class="single_contact_info">
                  <div class="single_info_text">
                    <h3>BALI</h3>
                    <p>Rumah Sakit Jiwa Bangli <br>
                    Jl Kesumayuda 29, Kawan, <br>
                    BANGLI <br>
                    Telp : 0366 3568782</p>

                    <h3>DI Yogyakarta</h3>
                    <p>RS Jiwa Prop. D.I.Yogyakarta <br>
                    Alamat : Jl. Kaliurang Km 17 Yogyakarta </p>

                    <h3>DKI JAKARTA</h3>
                    <p>RS Saraf dan Jiwa Dharma Jaya, <br>
                    Alamat : Jl. Raya Mangga Besar No. 138 <br><br>

                    RS Jiwa Jakarta <br>
                    Alamat Jl dr. Latumeten No. 1, Jakarta Barat<br> 
                    Lokasi Jakarta Barat <br>
                    Telpon 021-5682842 <br>
                    Fax 021-5682843 <br></p>

                    <h3>BANDUNG</h3>
                    <p>RS. Jiwa Bandung<br> 
                    Alamat : Jl. Laks. L RE Martadinata 11 <br>
                    Telpon : (022) 4203651 <br>
                    Faksimile : (022) 4205447 <br></p>

                  </div>
                </div>
              </div>

            <div class="col-sm-6">
              <div class="single_contact_info">
                  <div class="single_info_text">
                    <h3>DKI JAKARTA</h3>
                    <p>RS Saraf dan Jiwa Dharma Jaya, <br>
                    Alamat : Jl. Raya Mangga Besar No. 138 <br><br>

                    RS Jiwa Jakarta <br>
                    Alamat Jl dr. Latumeten No. 1, Jakarta Barat<br> 
                    Lokasi Jakarta Barat <br>
                    Telpon 021-5682842 <br>
                    Fax 021-5682843 <br></p>

                    <h3>BANDUNG</h3>
                    <p>RS. Jiwa Bandung<br> 
                    Alamat : Jl. Laks. L RE Martadinata 11 <br>
                    Telpon : (022) 4203651 <br>
                    Faksimile : (022) 4205447 <br></p>

                    <h3>BALI</h3>
                    <p>Rumah Sakit Jiwa Bangli <br>
                    Jl Kesumayuda 29, Kawan, <br>
                    BANGLI <br>
                    Telp : 0366 3568782</p>

                    <h3>DI Yogyakarta</h3>
                    <p>RS Jiwa Prop. D.I.Yogyakarta <br>
                    Alamat : Jl. Kaliurang Km 17 Yogyakarta </p>

                  </div>
                </div>
              </div>
              </div>
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  


    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->  

               
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  

      <!-- **********************************************************************************************************************************************************
      FOOTER CONTENT
      *********************************************************************************************************************************************************** -->               

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2018 - SCHIZION - ASES TEAM
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
  <script src="assets/js/zabuto_calendar.js"></script>  
  
  
  <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>

      <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>
  

  </body>
</html>
