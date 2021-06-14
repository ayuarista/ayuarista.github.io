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

      <h2>Massive Study Clarifies Genetic Risks of Major Depression</h2>
      <h5>Title description, Sep 2, 2017</h5>
              <img width="50%" height="50%"  align="middle" class= "center" src="assets/img/schizo0.png"/><br><br>
              <p>The next major explosion is going to be when genetics and computers come together. I'm talking about an organic computer—about biological substances that can function like a semiconductor. —Alvin Toffler<br><br>
Progress in genetic approaches are transforming many areas of medicine, including psychiatry. While the genetics of schizophrenia have been most actively studied, major depressive disorder (MDD) is a debilitating condition that affects millions of people worldwide, causing a massive toll of human suffering and economic loss, according to the World Health Organization(link is external). As with psychiatric conditions in general, the biology of MDD is worked out to a limited extent only, though that is changing. Adding the deep layer of genetic analysis to understanding the causes of MDD, identifying what genes are affected, and what they actually do, will advance the prevention, diagnosis and treatment of MDD, while also generally expanding our grasp of how the brain works to give rise to our everyday experiences in wellness and infirmity.<br><br>
Since MDD can present in so many different ways, ranging from being clinically mild and short-lasting, to recurring over and over again, to being highly chronic and treatment-resistant, it is important to understand the genetics in order to figure out what is going on and what can be done. It’s highly complex, so the ultimate goal is having a systemic understanding. How do genetic factors come together both early on in development, and across the lifespan, to interact with brain development, epigenetic effects, and social and environmental factors to give rise to what we call depression?<br><br>

Where are the depression genes?<br><br>
In a landmark paper on the genetics of major depression, published in Nature Genetics (2018), a large consortium of researchers analyzed genetic data from 135,458 people with MDD, compared with 344,901 healthy controls. The genetic data, derived from a variety of sources including prior research databases and commercial sources such as 23andMe, was analyzed using a variety of sophisticated statistical approaches.<br><br>
These findings were cross-referenced against existing research on gene function as related to a variety of important factors—brain development, sleep-related genes, genes for stress response, and so on— to clarify the role of MDD genetics for understanding symptoms and implications for treatment and future research. Multiple genetic changes work together to increase the odds of developing different forms of depression in the face of environmental factors. As depression may range from transient and mild to chronic and debilitating, we expect that depression will involve many different sets of genetic alterations, depending on the clinical picture. Until this study, research only had identified 14 loci  (genetic spots) associated with specific genes connected with depression, and sometimes other conditions.
By looking at patterns in over 9 million single gene mutations (single nucleotide polymorphisms or SNPs—(link is external)“snips”), the research group identified 44 statistically-significant loci involved with MDD. SNPs themselves don’t mean anything in terms of genetic function, but are variations in DNA patterns that can be analyzed to locate genetic hotspots on different chromosomes, for given conditions. There are 44 loci identified in this study independently associated with elevated risk for MDD. But what do the genes near these loci do, and how does this affect whether or not someone becomes clinically depressed?<br><br>
Some genes are associated with weight and body size (OLFM4 and NEGR1), others with neuron development and brain inflammation (LRFN5), and others with regulation of genes governing over-activation in the fight-flight systems (RBFOX1). Another group of 153 genes are associated largely with proteins that tell the immune system which cells are friendly, and which are not (major histocompatibility complex MHC proteins), and still other genes are connected with cell signaling, affecting neurotransmitter systems for dopamine (DRD2) and a target for some current medications, calcium signaling (CACNA1E and CACNA2D1), the excitatory neurotransmitter glutamate (GRIK5 and GRM5), and genes associated with presynaptic vesicle trafficking (PCLO), which is essentially the neuron’s postal service for delivering critical messages to the next neuron down the line. They also found overlap with 6 genes identified in schizophrenia studies, some MHC genes, and related to brain development (TCF4). It is a truly complex picture. And it only gets even more complicated.<br><br>
The functions of genes<br><br>
The study authors go on to discuss what some of the genetic findings may mean, when interpreted in light of information about clinical function, neuroscience, and other existing areas of scholarship. For instance, functional genes implicated in this study may be related to brain activity in the prefrontal and anterior cingulate cortex, areas of the brain involved with executive functions, emotion regulation, and decision-making. The data also suggests that such genes are more likely affecting neurons, rather than other cell types in the brain, namely those that perform supportive functions.<br><br>
The study authors go on to discuss what some of the genetic findings may mean, when interpreted in light of information about clinical function, neuroscience, and other existing areas of scholarship. For instance, functional genes implicated in this study may be related to brain activity in the prefrontal and anterior cingulate cortex, areas of the brain involved with executive function, emotion regulation, and decision-making. The data also suggests that such genes are more likely affecting neurons, rather than other cell types in the brain (e.g. astrocytes and microglia, that perform supportive functions).<br><br>
Other gene types are found in a broad groups of animals (the Eutherian, or Placental Mammals), and not just human beings or apes. These genes cover many areas, some related to gene regulation, and how genes are read and translated to be either more active or less active depending on outside influences. Other genes implicated in depression guide a process called DNA methylation. Among other important functions, DNA methylation is a key mechanism governing epigenetic effects, in which parents pass adaptations to stress on to the next generations by increasing or decreasing gene activity without changing the underlying DNA sequence.<br><br>
Further gene groups are connected with synaptic functions (the synapse is where neurons connect with one another), the shapes that neurons can grow into ("neuronal morphogenesis"), and a variety of genes involved with other aspects of cell development, cell communication, inflammation and immune response, and notably genes governing sleep and wakefulness, thought to be critical in most forms of depression. As all of these genes are read into actual functional proteins throughout the brain, knowing where they are and what they do presents opportunities for clinical intervention. At the same time, none of these genes is really specific for depression. As depression comes in many shapes and sizes, and overlaps with many other medical and psychiatric conditions, it isn’t surprising that depression genes also were found to overlap with those of other conditions, not just schizophrenia but anxiety disorders and more.<br><br>
Interventions may be in the form of medications that interact with those proteins in some way, or that compensate for abnormal activity, or genetic therapies to alter or replace faulty genes. Understanding how specific functions, such as inflammation, are dysregulated at the genetic level allows for a better understanding of how different kinds of depression happen, and what can be done to alleviate issues associated with that function in a very targeted way. To illustrate, not all treatments that reduce inflammation would improve depression, but understanding which genes increase the risk for depression may identify ways to modify specific inflammation pathways that will reduce depression symptoms.<br><br>
Evolving genomics<br><br>
As with other medical conditions, understanding the genetics of depression opens up doors for diagnosis, prevention and treatment. As the genetic database expands, research techniques similar to those in the current study can be used to look at other conditions including anxiety disorder and ADHD. Pharmacogenomics(link is external), for example, now in regular clinical use, allows us to make more informed medication choices based on individual genetic analysis, saving time and reducing the risk of adverse reactions (“side effects”) compared with medication selection based solely on clinical experience and trial-and-error.<br><br>
As disease models continue to be developed and refined, clinical tools based on genetic and environmental analysis will allow for more accurate diagnosis of depression and better treatment, the ultimate in personalized medicine. Testing for the various genes identified above, and others, will become routine—for multiple diseases, as well as for performance enhancement purposes. It will be possible via genetic and other information to identify early on who is at risk for developing depression and take preventive steps, providing environmental and potentially medical interventions, or even individualized genetic therapies, to keep depression from happening in the first place. Ethical questions notwithstanding, as with other inherited traits, it may be possible to select embryos with lower genetic risk for mental illness, or even modify genes around the time of conception to achieve desired outcomes.<br><br>
By Grant H. Brenner, MD <br><br></p>
<h10>References<br>
The Major Depressive Disorder Working Group of the Psychiatric Genomics Consortium. Genome-wide association analyses identify 44 risk variants and refine the genetic architecture of major depression. Nature Genetics, published online April 26, 2018. doi:10.1038/s41588-018-0090-3<br></h10>

          
          
          
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
