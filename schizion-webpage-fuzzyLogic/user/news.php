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

      <h2>A New Prime Suspect for Depression</h2>
      <h5>Title description, Sep 2, 2017</h5>
              <img width="50%" height="50%"  align="middle" class= "center" src="assets/img/schizo3.png"/><br><br>
              <p>It all started with ketamine. To some, vets mainly, it’s a horse tranquilizer. To others, a party drug. To those with severe clinical depression, a potential, literal, life-saver. A dose of ketamine can rapidly dull(link is external) the symptoms of depression, providing immediate relief for those crippled by the darkest thoughts. And while ketamine does not work for everyone, it seems to work in many people who are untouched by standard antidepressant drugs.<br><br>
Ketamine could then be our best lead in the hunt for depression. For if we search for where ketamine affects the brain, and for how it affects the brain, we will get vital clues to the cause of depression. And so to a long-lasting effective treatment. Two studies just published in Nature used precisely this trick, and spectacularly uncovered not just compelling evidence(link is external) of the tiny brain region to target, but exactly what goes wrong(link is external) in it to create depression — that some neurons are, literally, depressed.<br><br>
The hunt for depression is a tricky case for any neural detective. Your brain has 86 billion neurons. Where to start looking for suspects? Well, let’s think about that for a second. We want somewhere in the brain that can control how you feel things are going — that things are sometimes better than expected, and worth enjoying. And somewhere in the brain that has something to do with serotonin, because the long-standing treatment for clinical depression are SSRIs, drugs that make more serotonin available by stopping it from being mopped up.
Enter the lateral habenula. Rolls off the tongue, doesn’t it? But it fits the suspect’s profile. It connects to both serotonin and dopamine releasing neurons. When dopamine neurons burst with activity, that’s a signal we just got something better than expected (serotonin neurons might signal a similar thing). And when the lateral habenula releases a burst of activity, it stops the dopamine and serotonin neurons from bursting. Stops them from telling the brain : "Hey, that was unexpected."<br><br>
Now, usually, this is for the common good. The lateral habenula sends the signal that what just happened was, in fact, expected. So you, little dopamine neuron, and you, precious serotonin neuron, do not need to burst — everything is as it is should be. With this signal from the habenula, your brain knows the world is predictable, and can go about its business; if every little thing was signalled as being surprising, you’d spend all day giggling and kicking things to see what they did. You’d be a three year old.
But when we look in the brains of depressed mice, we see their lateral habenula is bursting more than usual. Much more. The “nothing surprising” signal is being sent far too much, and at the wrong time. The dopamine and serotonin neurons cannot frolic and play. The brain is robbed of some key signals that life is worth pursuing.<br><br>
We suspect the lateral habenula based on this strong circumstantial evidence, that it connects to the right things and its signals go haywire in depressed mice. Now to get a conviction we need more than circumstantial evidence. We need probable cause: Does ketamine stop the bursting and remove depression? And we need motive: What drives the habenula to increase its bursting?<br><br>
The two studies in Nature from Hailan Hu and team answered both questions. Let’s start, as they did, with probable cause: If we stick ketamine into the habenula, does it alleviate depression? Yes. Depressed rats recover. In a bunch of tests, injecting ketamine into the habenula restores a rat’s élan: exploring, reacting, enjoying the taste of sweet sweet sucrose.<br><br>
(And this is true in a type of depressed mouse too. No one believes for a second that rats or mice experience the range of difficult and terrible thoughts accompanying clinical depression in people. So finding a common effect across quite different species of rodent, each type replicating different aspects of the human disorder, is key to believing that all this work has something to do with depression.)
Right, so ketamine can work its magic from within the habenula. But we want evidence that it has any effect on the habenula itself. For, surely, if that over-active bursting of the habenula in some way causes depression then ketamine should clobber the bursts? Remarkably, it does. Ketamine reduces the number of bursting neurons, right down to the same number found in healthy brains. We now have a big wodge of evidence for a probable cause of depression: Habenula neurons burst fire when they should not; and stopping this bursting with ketamine stops depression (in tiny rodents).<br><br>
Even better, because we know how ketamine attaches itself to a neuron (to NMDA receptors, if you like such things), Hu’s team could work out which specific hole in the neuron’s skin was being opened to cause the bursting. Ketamine stopped the hole from opening. Which means we now have a specific target to build antidepressant drugs for: to stop this hole, this channel, from opening too much.<br><br>
Ah, but we can do even better than that. Hu and team then went after the motive, asking why the habenula neurons were bursting too much in the first place. Why is this channel open when it should not be?<br><br>
The first clue was in an odd property of the neurons that burst in the habenula. When doing nothing at all, these neurons were more depressed than the others. Neurons at rest have a characteristic, tiny voltage, a voltage created by the difference between how many ions are in them and how many are outside them. The habenula’s bursting neurons had a lower voltage when resting than the others. And this lower voltage means the channel that makes bursts is primed, ready to open; when the voltage is higher, the channel is turned off. Guess what? In depressed rats, there are more depressed neurons in the habenlua. Ergo, there are too many neurons ready to burst without provocation, at the wrong time, and in the wrong place.<br><br>
 
Almost there, we almost have the motive. What then caused there to be too many depressed neurons? Well, whatever controls the difference between ions inside and outside a neuron. And that turned out to be the other cells in the brain, the ones that aren’t neurons. The unsung below-stairs staff that tidy up the mess, fix the broken crockery, and keep the food and drink flowing. The glia.<br><br>
Hu’s team found that wrapped around each habenula neuron is a special glia cell. That glia cell’s job is to clear potassium away from around the neuron. (Potassium being one of the key ions that makes neurons work properly — eat bananas, people.) In depressed mice, that glia cell was too good at its job. It mopped up way more potassium than it should (if you care about these things, it over-expressed the KIR4.1 channel. Happy now?). And what does less potassium outside the neuron mean? Yep: The neuron has a lower voltage at rest. The motive is clear: An overly enthusiastic glia cell is sweeping away far more potassium than it should, making its neuron neighbor depressed, so depressed it bursts when it should not; and this bursting is, it seems, a cause of what we call depression.<br><br>
Why is this knowledge even better? Ah, because now we can search for drugs to target the specific mechanism that goes wrong, in those specific types of glia cells, drugs that aim to rebalance potassium around those neurons. Indeed, Hu and team used genetic tricks to bodge or block the glia cell’s mechanism in their mice, and voila! Bursting returned to normal and the mice recovered their elan. And having such a specific drug target is fantastic, as the more precise the tool for the job, the easier it is to avoid unpleasant side effects.
Caveat emptor. Let’s list all the things that get in the way of this being the best thing since Pop Tarts. For a start, these are rats and mice. It is notoriously tricky to translate findings in rodents into something that works in humans. Very few drugs that work in rodents become successful drugs in humans. The endless failures of clinical trials for Alzheimer’s is proof enough of that. Another blip is that there is evidently a whole other story to play out, of how these glia go wrong in the first place — and how the well-documented roles(link is external) of stress, life-events, and predisposing genes all contribute. On top of that, ketamine does not work in all people; so this cannot be the cause of depression.<br><br>
But it seems unlikely that there is one single cause. And the fact that ketamine works is hopeful. Hu and team have found wonderfully specific targets to test. If this does not turn out to be a major part of the solution to clinical depression, it gives many ideas of what could be the solution.<br><br>
Very little of this work would have been possible without basic science, without science that is not driven by immediate goals of studying disease. Take for example the clues that the lateral habenula could be important. These come from people studying how the brain learns. There is a well developed theory(link is external) for how the firing of dopamine neurons controls learning. This theory prompted major efforts to understand: Well, what controls the firing of dopamine neurons? And here was unearthed the lateral habenula, an obscure part of the brain of late, languishing unloved, now risen to prominence. And a few more examples of the contributions of basic science for good measure: the tests of the rats’ behavior to work out how depressed they were; or how to record the bursting in neurons; or how to test the channel that causes the bursting. All these, and more, come from people driven by curiosity, not by being told to work on a specific disease.<br><br>
For we can never know what will be key to unlocking the mystery of a brain disorder. But as Hu and team dramatically demonstrated, when we get a sniff of a clue, we can grab all our accumulated scientific know-how, tricks, and tools and use them to turn one small clue into a sprawling case for the prosecution. The game is afoot.<br><br></p>
<h10>References<br>
Yang, Y. et al (2018) Ketamine blocks bursting in the lateral habenula to rapidly relieve depression. Nature, 554, 317-322<br>
Cui, Y. et al (2018) Astroglial Kir4.1 in the lateral habenula drives neuronal bursts in depression. Nature. 554, 323-327<br></h10>


          
          
          
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
