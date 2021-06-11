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
                          <li><a  href="profil_patient.php">Patient</a></li>
                          <li><a  href="profil_caregiver.php">Care Giver</a></li>
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

      <h2>"Spiritual But Not Religious" Is Associated With Depression</h2>
      <h5>Title description, Sep 2, 2017</h5>
              <img width="50%" height="50%"  align="middle" class= "center" src="assets/img/schizo4.png"/><br><br>
              <p>Science without religion is lame, religion without science is blind. —Albert Einstein<br><br>
Religion is an important part of life for much of the world’s population. Religious belief and practice is connected with greater resilience for those who enjoy faith and an attachment to god. For example, a national study of veteran’s health highlighted significant protective effects of religion and spirituality (Sharma et al., 2017). The greater the extent of religious-spiritual belief, the lower the risk for adverse mental health outcomes including PTSD, alcohol use disorder, major depressive disorder, and suicidal thinking. Veterans in the religious-spiritual group also had a greater innate sense of gratitude and purpose in life.<br><br>
Losing my religion<br><br>
When people experience a decline in faith, they report a decrease in positive emotions connected with several factors, including reducing religious practices, moving away from positive core religious beliefs, reduced social relationships related to service to others, and a loss of positive emotion generating meaning in life from service to others (Krause & Pargament, 2016).<br><br>
As fewer people participate in formal religious practice, often moving away from the beliefs and rituals of their family of origin, more and more people are becoming “spiritual but not religious” (Willard & Norenzayan, 2017). The growing trend in urban centers is hard to miss. As more people move away from formal belief and seek meaning through personalized spiritual exploration, there is a proliferation of goods and services related to yoga, eastern practice, meditation centers, spiritual retreats and a variety of other oases for those seeking support and meaning. Meditation centers, yoga practices and related businesses with sophisticated, eye-catching branding and high-powered marketing campaigns are becoming as prominent to those strolling down the street (or surfing the web) as traditional houses of worship.<br><br>
But, as suggested in the veterans’ study above, are religious faith and spiritual belief equal in terms of positive benefit? Spirituality, which often replaces traditional religious practice, may not provide the same benefit... at least, not in its prior incarnations.
Spirituality, religion and depressive symptoms<br><br>
In order to explore the possible differences between spirituality and religion when it comes to major depression, in the Journal of Nervous Disease study author Jeffrey Vittengl (2018) looked at epidemiological data from the United States Midlife Development survey. Data were collected in three waves, from 1994-95, from 2004-6, and finally from 2013-14, covering a diverse group of several thousand people in each survey wave with a variety of orientations toward religions and spirituality. Among other measures, participants completed assessments for major depressive symptoms, extent of religious and spiritual belief, and demographic factors.<br><br>
He found that in general, participants reported high levels of religion and spirituality, averaging a score of 3 on a scale from 1-4. Overall levels of religion and spirituality together did not predict depression, but were highly correlated, making it difficulty tease them apart in term of depression risk.<br><br>
In order to distinguish religiosity from spirituality, Vittengl compared combined scores of religion and spirituality (S+R) with scores of religion subtracted from spirituality (S-R). Using this approach, information on depression was compared with religious and spiritual belief, controlling for variables including age, sex and ethnicity.<br><br>
In about 25 percent of people, spirituality was stronger than religious belief, whereas religious belief exceeded spirituality in about 75 percent. Interestingly, there weren’t large differences in spirituality versus religiosity as a function of age, gender or ethnicity. However, spirituality clearly predicted increased depressive symptoms over the decades of the study. The risk of depression was over a third greater than for those in whom religious belief was higher than spirituality, showing a meaningful difference between religion and spirituality as a protective factor.<br><br>
Why would this be the case? The survey data did not estimate specific factors related to depression, so it is only possible to speculate. While religion represents deeply rooted belief and practice, usually coming from family and cultural background, spirituality represents a departure from that traditional, familiar support.<br><br>
People seeking spiritual answers may be coming from a position of distress, searching for answers or looking for relief from mental suffering.<br><br>
Such folk may be more vulnerable, leading to a failure of religion to prevent depression. In either case, this could create a self-selected higher risk spiritual-but-not-religious group. Those who have lost or abandoned traditional faith may have additional risk factors for depression, potentially connected with problems growing up, directly related to religious institutions or family practices, which may have led them to move away from religion.<br><br>
Study author Vittengl suggests that, compared with religion’s structured and socially-supported ways of thinking and constructing meaning, depression and spirituality may share similar cognitive patterns, based on increased self-focus. For example, self-directed internal searches for meaning, ruminations about life, and a sense of an unending search may characterize both spirituality and depression; spiritual people therefore “may be engaging in a ‘lonely search’ for answers to their ultimate questions that, if unsatisfied, increases risk for depression.”<br><br>
The future of spirituality?<br><br>
Future work can look more deeply at when spirituality is associated with depression, and what spiritual practices may be more useful for those seeking meaning outside of formal belief systems. Directed spiritual practices which include optimistic and other-oriented approaches, for example those emphasizing gratitude, forgiveness and compassion for self and other, are more useful when it comes to improving overall well-being.<br><br>
Evidence-based structured approaches, such as mindful self-compassion(MSC), mindfulness-based stress reduction (MBSR), mindfulness-based cognitive therapy (MBCT), cognitive-based compassion training (CBCT), and related, included elements of combined values following religious belief systems, psychology and coaching. Yet, they are devoid of religious belief, and don't necessarily even need to be labeled "spiritual", as they address basic, ordinary human emotions.<br><br>
As such, pragmatic research on spirituality and religion identifies what aspects work best—what is protective and growth-promoting, and what is unnecessary or even potentially detrimental. As useful components get translated into clinical approaches (including self-care and wellness-oriented models), more people can benefit from secularized spirituality without the downsides which turn off some people.<br><br>
Given the great need for better ways to address depression and other mental health issues, burgeoning interest in spirituality from many quarters, and sharp increase in research, we will continue to see more and more integration into both personal practice and conventional healthcare settings. As this happens, the relationship between spirituality and depression described here is likely to flip. Time will tell.<br><br>
Written by Grant Hilary Brenner

</p>
<h10>References<br>
Krause N & Pargament KI. "Losing My Religion: Exploring the Relationship Between a Decline in Faith and a Positive Affect," Applied Research in Quality of Life, Springer; International Society for Quality-of-Life Studies, vol. 12(4), pages 885-901, 2017 December.<br>
Sharma V, Marin DB, Koenig HK, Feder A, Iacoviello BM, Southwick SM, Pietrzak RH. Religion, spirituality, and mental health of U.S. military veterans: Results from the National Health and Resilience in Veterans Study7
Journal of Affective Disorders , 2017, Volume 217 , 197 - 204<br>
Vittengl, JR. A lonely search? Risk for depression when spirituality exceeds religiosity. The Journal of Nervous and Mental Disease • Volume 206, Number 5, May 2018.<br></h10>

          
          
          
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
             
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->


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
  

  </body>
</html>
