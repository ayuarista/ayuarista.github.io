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
                   </ul>
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
                      <a href="index.php">
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
                      <a  class="active" href="about.php" >
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

       <section id="main-content">
          <section class="wrapper">
                <div class="container">
                    <div class="row">
                        <div class="main_choose sections">
                            <div class="col-sm-7">
                                <div class="head_title">
                                    <h3>ABOUT SCHIZOPHRENIA</h3>
                                    <div class="separator"></div>
                                </div><br><br>
                                <div class="single_choose">
                                    <div class="single_choose_acording">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                                            <i class="fa fa-plus-square"></i> What is schizophrenia?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: auto;">
                                                    <div class="panel-body">
                                                            <a href="about.php" class=" btn fa fa-minus-square"></a>
                                                         <img align="middle" class= "center" src="assets/img/schizo0.png"/><br>
                                                        <p>Schizophrenia is a serious mental disorder that affects how a person thinks, feels, and behaves. People with schizophrenia may seem like they have lost touch with reality. They may hear voices other people don’t hear. They may think other people are trying to hurt them. Sometimes they don’t make any sense when they talk. Although schizophrenia is not as common as other mental disorders, the symptoms can be very disabling.</p>
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                           <i class="fa fa-plus-square"></i> Schizophrenia in Indonesia
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                                                    <div class="panel-body">
                                                            <a href="about.php" class=" btn fa fa-minus-square"></a>
                                                         <img width="100%"  align="middle" class= "center" src="assets/img/indonesia2.png"/><br><br>
                                                            <p>Mental health is still one of the most significant health problems in the world, including in Indonesia. According to WHO (2016), there are about 35 million people affected by depression, 60 million people bipolar, 21 million exposed to schizophrenia, and 47.5 million exposed to dementia. In Indonesia, with various biological, psychological and social factors with a diversity of inhabitants; then the number of cases of mental disorders increase which affects the addition of state burden and decrease in human productivity for the long term. Riset Kesehatan Dasar (Riskesdas) data (2013) shows the prevalence of mental emotional imbalance shown by symptoms of depression and anxiety for the age of 15 years and over to reach about 14 million people or 6% of the total population of Indonesian people. While the prevalence of severe mental disorders, such as schizophrenia reached about 400,000 people or as many as 1.7 per 1,000 population.
                                                           </p>
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                           <i class="fa fa-plus-square"></i> When does schizophrenia start and who gets it?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                                                    <div class="panel-body">
                                                            <a href="about.php" class=" btn fa fa-minus-square"></a>
                                                       <p> <br>Schizophrenia occurs in slightly more men than women and affects all ethnic groups. Symptoms usually start between the ages of 16 and 30. In rare cases, children have schizophrenia too.
                                                       </p>
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                                                           <i class="fa fa-plus-square"></i> Signs and Symptoms
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                                                    <div class="panel-body">
                                                            <a href="about.php" class=" btn fa fa-minus-square"></a>
                                                        <h2>Signs and Symptoms</h2><br>
      <h5>Symptoms of schizophrenia usually start between ages 16 and 30. In rare cases, children have schizophrenia too.</h5>
              <h5> Schizophrenia symptoms fall into three categories: positive, negative, and cognitive.</h5><br>
             <ul class="nav nav-tabs">
    <li class="active"><a href="#home">Positive</a></li>
    <li><a href="#menu1">Negative</a></li>
    <li><a href="#menu2">Cognitive</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <br><p style="color:#444;">“Positive” symptoms are psychotic experiences that are not generally seen in healthy people.<br> People with these“Positive” symptoms are psychotic experiences that are not generally seen in healthy people. People with these symptoms are sometimes unable to tell what’s real from what is imagined. These symptoms can be severe, and at other times, hardly noticeable.<br><br>
       Positive symptoms include: <br> <br>
          • Hallucinations: when a person sees, hears, smells, tastes, or feels things that are not real. “Hearing voices” is common for people with schizophrenia. People who hear voices may hear them for a long time before family or friends notice a problem.
          Delusions: when a person believes things that are not true. For example, a person may believe 
          that people on the radio and television are talking directly to him or her. Sometimes people believe that they are in danger and others are trying to hurt them.<br> <br>
          • Thought disorders: when a person has ways of thinking that are odd or illogical. People with thought disorders may have trouble organizing their thoughts. Sometimes a person will stop talking in the middle of a thought or make up words that have no meaning.<br> <br>
        • Movement disorders: when a person has may appear as agitated body movements. A person may repeat  certain motions over and over. In the other extreme, a person may stop moving or talking for a while, which is a rare condition called catatonia.
</p>
    </div>
    <br><div id="menu1" class="tab-pane fade">
      <br><p style="color:#444">“Negative” symptoms refer to social withdrawal, difficulty showing emotions, or difficulty functioning normally.<br> People with negative symptoms may need help with everyday tasks. <br> <br> Negative symptoms include: <br> <br>• Talking in a dull voice
      <br>• Showing no facial expression, such as a smile or frown
      <br>• Having trouble experiencing happiness
      <br>• Having trouble planning and sticking with an activity, such as grocery shopping
      <br>• Talking very little to other people, even when it is important
      </p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Cognitive</h3>
      <p style="color:#444">Cognitive symptoms are not easy to see, but they can make it hard for people to have a job or take care of themselves.<br> Often, these symptoms are detected only when specific tests are performed. <br><br>Cognitive symptoms include:<br><br>• Difficulty using information to make decisions<br>
  • Problems using information immediately after learning it<br>
  • Trouble paying attention
</p></div></div>
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefour">
                                                          <i class="fa fa-plus-square"></i>  Risk Factors
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive" aria-expanded="false">
                                                    <div class="panel-body">
                                                            <a href="about.php" class=" btn fa fa-minus-square"></a>
                                                        <h5>There are several factors that contribute to the risk of developing schizophrenia.</h5><br>
             <ul class="nav nav-tabs">
    <li class="active"><a href="#menu3">Genes and Environment</a></li>
    <li><a href="#menu4">Different Brain Chemistry and Structure</a></li>
  </ul>

  <div class="tab-content">
    <div id="menu3" class="tab-pane fade in active">
      <br><p style="color:#444;">Scientists have long known that schizophrenia sometimes runs in families. However, there are many people who have schizophrenia who don’t have a family member with the disorder and conversely, many people with one or more family members with the disorder who do not develop it themselves.<br><br>

Scientists believe that many different genes may increase the risk of schizophrenia, but that no single gene causes the disorder by itself. It is not yet possible to use genetic information to predict who will develop schizophrenia.<br><br>

Scientists also think that interactions between genes and aspects of the individual’s environment are necessary for schizophrenia to develop. Environmental factors may involve:<br><br>

    • Exposure to viruses<br>
    • Malnutrition before birth<br>
    • Problems during birth<br>
    • Psychosocial factors<br>

</p>
    </div>
    <br><div id="menu4" class="tab-pane fade">
      <br><p style="color:#444">Scientists think that an imbalance in the complex, interrelated chemical reactions of the brain involving the neurotransmitters (substances that brain cells use to communicate with each other) dopamine and glutamate, and possibly others, plays a role in schizophrenia.<br><br>

Some experts also think problems during brain development before birth may lead to faulty connections. The brain also undergoes major changes during puberty, and these changes could trigger psychotic symptoms in people who are vulnerable due to genetics or brain differences.<br>
</p></div></div>
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsefive">
                                                          <i class="fa fa-plus-square"></i> Treatments and Therapies
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive" aria-expanded="false">
                                                    <div class="panel-body">
                                                            <a href="about.php" class=" btn fa fa-minus-square"></a>
                                                        <h2>Treatments and Therapies</h2><br>
      <h5>Because the causes of schizophrenia are still unknown, treatments focus on eliminating the symptoms of the disease. Treatments include:</h5><br><br>
             <ul class="nav nav-tabs">
    <li class="active"><a href="#menu5">Antipsychotics</a></li>
    <li><a href="#menu6">Psychosocial Treatments</a></li>
    <li><a href="#menu7">Coordinated specialty care (CSC)</a></li>
  </ul>

  <div class="tab-content">
    <div id="menu5" class="tab-pane fade in active">
      <br><p style="color:#444;">Antipsychotic medications help patients with the psychotic symptoms of schizophrenia. Some people have side effects when they start taking medications, but most side effects go away after a few days. <br><br>Side effects include:<br> • Blurry vision <br>• Body movements a person can’t control, such as shaking Dizziness<br>• Drowsiness Fast<br>• Heartbeat<br>• Feeling restless <br>• Menstrual problems<br>• Sensitivity to the sun<br>• Skin rashes<br>• Stiffness in the body<br><br>
             Some types of antipsychotic medications can cause a lot of weight gain and other health concerns, which can lead to diabetes, high cholesterol, or other conditions. Other types of antipsychotic medications can cause side effects related to physical movement where a person cannot control muscle movements, especially around the mouth.People respond to antipsychotic medications differently, so it is important to report any of these side effects to a doctor. Sometimes a person needs to try several medications before finding the right one. People should not stop taking a medication without first talking to a doctor. Stopping medication suddenly can be dangerous, and it can make schizophrenia symptoms worse.
</p>
    </div>
    <div id="menu6" class="tab-pane fade">
      <br><p style="color:#444">Psychosocial treatments help patients deal with everyday challenges of schizophrenia.<br> These treatments are often most helpful after patients find a medication that works. <br><br>Treatments include:<br> <br> • Family education: teaches the whole family how to cope with the illness and help their loved one <br>
                                • Illness management skills: helps the patient learn about schizophrenia and manage it from day-to-day <br>
                                • Cognitive behavioral therapy (CBT): helps the patient identify current problems and how to solve them. A CBT therapist focuses on changing unhelpful patterns of thinking and behavior. <br>
                                • Rehabilitation: helps with getting a job or going to school and everyday living skills<br>
                                • Self-help groups: provide support from other people with the illness and their families<br>
                                • Treatment for drug and alcohol misuse: is often combined with other treatments for schizophrenia
      </p>
    </div>
    <div id="menu7" class="tab-pane fade">
      <p style="color:#444">This treatment model integrates medication, psychosocial therapies, case management, family involvement, and supported education and employment services, all aimed at reducing symptoms and improving quality of life. 
</p></div></div>
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                                         <i class="fa fa-plus-square"></i>   How can I help someone I know with schizophrenia?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive" aria-expanded="false">
                                                    <div class="panel-body">
                                                            <a href="about.php" class=" btn fa fa-minus-square"></a>
                                                        <h2>How can I help someone I know with schizophrenia?</h2>
       <div class="row">
              <div class="col-lg-6 main-chart">
              <p>  <br>Caring for and supporting a loved one with schizophrenia can be hard. It can be difficult to know how to respond to someone who makes strange or clearly false statements. It is important to understand that schizophrenia is a biological illness.</p>

               <h4> <br>Here are some things you can do to help your loved one:</h4><br>
              </div>
              <div class="col-lg-6 main-chart">
<p>
    • Get them treatment and encourage them to stay in treatment<br>
    • Remember that their beliefs or hallucinations seem very real to them<br>
    • Tell them that you acknowledge that everyone has the right to see things their own way<br>
    • Be respectful, supportive, and kind without tolerating dangerous or inappropriate behavior<br>
    • Check to see if there are any support groups in your area

              </p>
              </div>
      </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="single_choose">
                                    <div class="single_choose_img">
                                        <img src="assets/images/choose.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>   </section>   <br><br><br><br><br><br><br>     
      
      <!--main content start-->
   <!--     <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-11 main-chart">
                  <div class="showback">

      <h2>What is schizophrenia?</h2>
      <h5>Title description, Sep 2, 2017</h5>
       <div class="row">
              <div class="col-lg-5 main-chart">
              <img align="middle" class= "center" src="assets/img/schizo0.png"/><br>
              </div>
              <div class="col-lg-6 main-chart">
                  <p>Schizophrenia is a serious mental disorder that affects how a person thinks, feels, and behaves. People with schizophrenia may seem like they have lost touch with reality. They may hear voices other people don’t hear. They may think other people are trying to hurt them. Sometimes they don’t make any sense when they talk. Although schizophrenia is not as common as other mental disorders, the symptoms can be very disabling.</p>
              </div>
      </div></div>
      <div class="row">
      <div class="col-lg-12 main-chart">
      <div class="showback">
      <h2>Schizophrenia in Indonesia </h2> <br><br>
      
              <img width="100%"  align="middle" class= "center" src="assets/img/indonesia2.png"/><br><br>
               <p>Mental health is still one of the most significant health problems in the world, including in Indonesia. According to WHO (2016), there are about 35 million people affected by depression, 60 million people bipolar, 21 million exposed to schizophrenia, and 47.5 million exposed to dementia. In Indonesia, with various biological, psychological and social factors with a diversity of inhabitants; then the number of cases of mental disorders increase which affects the addition of state burden and decrease in human productivity for the long term. Riset Kesehatan Dasar (Riskesdas) data (2013) shows the prevalence of mental emotional imbalance shown by symptoms of depression and anxiety for the age of 15 years and over to reach about 14 million people or 6% of the total population of Indonesian people. While the prevalence of severe mental disorders, such as schizophrenia reached about 400,000 people or as many as 1.7 per 1,000 population.
                                </p>
      </div>
      </div></div>

      <div class="row">
      <div class="col-lg-12 main-chart">
      <div class="showback">
       <div class="row">
              <div class="col-lg-6 main-chart">
      <h2>When does schizophrenia start and who gets it?</h2><p>  <br>Schizophrenia occurs in slightly more men than women and affects all ethnic groups. Symptoms usually start between the ages of 16 and 30. In rare cases, children have schizophrenia too.
              </p>
              
              </div>
              <div class="col-lg-6 main-chart"><img width="100%"  align="middle" class= "center" src="assets/img/schizo1.png"/>
              
              </div>
      </div>
      </div>
      </div></div>


      <div class="row">
      <div class="col-lg-12 main-chart">
      <div class="showback">
      <h2>Signs and Symptoms</h2><br>
      <h5>Symptoms of schizophrenia usually start between ages 16 and 30. In rare cases, children have schizophrenia too.</h5>
              <h5> Schizophrenia symptoms fall into three categories: positive, negative, and cognitive.</h5><br>
             <ul class="nav nav-tabs">
    <li class="active"><a href="#home">Positive</a></li>
    <li><a href="#menu1">Negative</a></li>
    <li><a href="#menu2">Cognitive</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <br><p style="color:#444;">“Positive” symptoms are psychotic experiences that are not generally seen in healthy people.<br> People with these“Positive” symptoms are psychotic experiences that are not generally seen in healthy people. People with these symptoms are sometimes unable to tell what’s real from what is imagined. These symptoms can be severe, and at other times, hardly noticeable.<br><br>
       Positive symptoms include: <br> <br>
          • Hallucinations: when a person sees, hears, smells, tastes, or feels things that are not real. “Hearing voices” is common for people with schizophrenia. People who hear voices may hear them for a long time before family or friends notice a problem.
          Delusions: when a person believes things that are not true. For example, a person may believe 
          that people on the radio and television are talking directly to him or her. Sometimes people believe that they are in danger and others are trying to hurt them.<br> <br>
          • Thought disorders: when a person has ways of thinking that are odd or illogical. People with thought disorders may have trouble organizing their thoughts. Sometimes a person will stop talking in the middle of a thought or make up words that have no meaning.<br> <br>
        • Movement disorders: when a person has may appear as agitated body movements. A person may repeat  certain motions over and over. In the other extreme, a person may stop moving or talking for a while, which is a rare condition called catatonia.
</p>
    </div>
    <br><div id="menu1" class="tab-pane fade">
      <br><p style="color:#444">“Negative” symptoms refer to social withdrawal, difficulty showing emotions, or difficulty functioning normally.<br> People with negative symptoms may need help with everyday tasks. <br> <br> Negative symptoms include: <br> <br>• Talking in a dull voice
      <br>• Showing no facial expression, such as a smile or frown
      <br>• Having trouble experiencing happiness
      <br>• Having trouble planning and sticking with an activity, such as grocery shopping
      <br>• Talking very little to other people, even when it is important
      </p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Cognitive</h3>
      <p style="color:#444">Cognitive symptoms are not easy to see, but they can make it hard for people to have a job or take care of themselves.<br> Often, these symptoms are detected only when specific tests are performed. <br><br>Cognitive symptoms include:<br><br>• Difficulty using information to make decisions<br>
  • Problems using information immediately after learning it<br>
  • Trouble paying attention
</p></div></div>
</div>
</div></div>

      <div class="row">
      <div class="col-lg-12 main-chart">
      <div class="showback">
      <h2>Risk Factors</h2><br>
      <h5>There are several factors that contribute to the risk of developing schizophrenia.</h5><br>
             <ul class="nav nav-tabs">
    <li class="active"><a href="#menu3">Genes and Environment</a></li>
    <li><a href="#menu4">Different Brain Chemistry and Structure</a></li>
  </ul>

  <div class="tab-content">
    <div id="menu3" class="tab-pane fade in active">
      <br><p style="color:#444;">Scientists have long known that schizophrenia sometimes runs in families. However, there are many people who have schizophrenia who don’t have a family member with the disorder and conversely, many people with one or more family members with the disorder who do not develop it themselves.<br><br>

Scientists believe that many different genes may increase the risk of schizophrenia, but that no single gene causes the disorder by itself. It is not yet possible to use genetic information to predict who will develop schizophrenia.<br><br>

Scientists also think that interactions between genes and aspects of the individual’s environment are necessary for schizophrenia to develop. Environmental factors may involve:<br><br>

    • Exposure to viruses<br>
    • Malnutrition before birth<br>
    • Problems during birth<br>
    • Psychosocial factors<br>

</p>
    </div>
    <br><div id="menu4" class="tab-pane fade">
      <br><p style="color:#444">Scientists think that an imbalance in the complex, interrelated chemical reactions of the brain involving the neurotransmitters (substances that brain cells use to communicate with each other) dopamine and glutamate, and possibly others, plays a role in schizophrenia.<br><br>

Some experts also think problems during brain development before birth may lead to faulty connections. The brain also undergoes major changes during puberty, and these changes could trigger psychotic symptoms in people who are vulnerable due to genetics or brain differences.<br>
</p></div></div>
</div>
</div></div>


      <div class="row">
      <div class="col-lg-12 main-chart">
      <div class="showback">
      <h2>Treatments and Therapies</h2><br>
      <h5>Because the causes of schizophrenia are still unknown, treatments focus on eliminating the symptoms of the disease. Treatments include:</h5><br><br>
             <ul class="nav nav-tabs">
    <li class="active"><a href="#menu5">Antipsychotics</a></li>
    <li><a href="#menu6">Psychosocial Treatments</a></li>
    <li><a href="#menu7">Coordinated specialty care (CSC)</a></li>
  </ul>

  <div class="tab-content">
    <div id="menu5" class="tab-pane fade in active">
      <br><p style="color:#444;">Antipsychotic medications help patients with the psychotic symptoms of schizophrenia. Some people have side effects when they start taking medications, but most side effects go away after a few days. <br><br>Side effects include:<br> • Blurry vision <br>• Body movements a person can’t control, such as shaking Dizziness<br>• Drowsiness Fast<br>• Heartbeat<br>• Feeling restless <br>• Menstrual problems<br>• Sensitivity to the sun<br>• Skin rashes<br>• Stiffness in the body<br><br>
             Some types of antipsychotic medications can cause a lot of weight gain and other health concerns, which can lead to diabetes, high cholesterol, or other conditions. Other types of antipsychotic medications can cause side effects related to physical movement where a person cannot control muscle movements, especially around the mouth.People respond to antipsychotic medications differently, so it is important to report any of these side effects to a doctor. Sometimes a person needs to try several medications before finding the right one. People should not stop taking a medication without first talking to a doctor. Stopping medication suddenly can be dangerous, and it can make schizophrenia symptoms worse.
</p>
    </div>
    <div id="menu6" class="tab-pane fade">
      <br><p style="color:#444">Psychosocial treatments help patients deal with everyday challenges of schizophrenia.<br> These treatments are often most helpful after patients find a medication that works. <br><br>Treatments include:<br> <br> • Family education: teaches the whole family how to cope with the illness and help their loved one <br>
                                • Illness management skills: helps the patient learn about schizophrenia and manage it from day-to-day <br>
                                • Cognitive behavioral therapy (CBT): helps the patient identify current problems and how to solve them. A CBT therapist focuses on changing unhelpful patterns of thinking and behavior. <br>
                                • Rehabilitation: helps with getting a job or going to school and everyday living skills<br>
                                • Self-help groups: provide support from other people with the illness and their families<br>
                                • Treatment for drug and alcohol misuse: is often combined with other treatments for schizophrenia
      </p>
    </div>
    <div id="menu7" class="tab-pane fade">
      <p style="color:#444">This treatment model integrates medication, psychosocial therapies, case management, family involvement, and supported education and employment services, all aimed at reducing symptoms and improving quality of life. 
</p></div></div>
</div>
</div></div>

<div class="row">
      <div class="col-lg-12 main-chart">
      <div class="showback">
      <h2>How can I help someone I know with schizophrenia?</h2>
       <div class="row">
              <div class="col-lg-6 main-chart">
              <p>  <br>Caring for and supporting a loved one with schizophrenia can be hard. It can be difficult to know how to respond to someone who makes strange or clearly false statements. It is important to understand that schizophrenia is a biological illness.</p>

               <h4> <br>Here are some things you can do to help your loved one:</h4><br>
              </div>
              <div class="col-lg-6 main-chart">
<p>
    • Get them treatment and encourage them to stay in treatment<br>
    • Remember that their beliefs or hallucinations seem very real to them<br>
    • Tell them that you acknowledge that everyone has the right to see things their own way<br>
    • Be respectful, supportive, and kind without tolerating dangerous or inappropriate behavior<br>
    • Check to see if there are any support groups in your area

              </p>
              </div>
      </div>
      </div>
      </div></div>
          

          
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                 
          <!--    </div><! --/row -->


  <!--  </section><! --/wrapper -->
   <!--   </section><!-- /MAIN CONTENT -->    -->        
                  
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
