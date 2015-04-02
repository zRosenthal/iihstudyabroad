<?php

$val = ($_GET['app']) ? $_GET['app']: null;
if ($val == 'ind') {
  $ar = array(
   "color" => "success",
   "date" => null,
   "elg" =>  " CHM or COM student. COM students will have the $100.00 aplication fee waived" ,
   "visa" => 0 ,
   "name" => "Individual Rotations",
   "dead" => null); 
}
if ($val == 'gen') {
  $ar = array(
   "color" => "success",
   "date" => null,
   "elg" =>  null,
   "visa" => 1,
   "name" => "General",
   "dead" => null);
}
else if ($val == 'brazil') {
	$ar = array(
   "color" => "default",
   "date" => "December, 2015",
   "elg" => "COM, CHM, or a Nursing student; undergrads & lifelong education students interested in a health field may also apply",
   "visa" => 1,
   "name" => "Brazil",
   "dead" => "October 15, 2015");
}
else if ($val == 'korea') {
	$ar = array(
    'color' => "info",
    'date' => "5/25/2015 - 6/6/2015" ,
    'elg' => "COM, CHM, or a Nursing student; undergrads & lifelong education students interested in a health field", 
    'visa' => 0 , 
    'name' => 'Korea/Japan',
    'dead' => "February 1, 2015");
}
else if($val == 'domrep') {
	$ar = array(
  'color' => "success",
  'date' => "5/9/2015 - 5/16/2015" , 
  'elg' => "undergrad or a lifelong education student interested in a health field; COM, CHM & Nursing students may also apply", 
  'visa' => 0, 
  'name' => 'Dominican Republic',
  'dead' => 'March 1, 2015');
}
else if($val == 'mexico') {
	$ar = array(
  'color' => "warning",
  'date' => "3/7/2015 - 3/14/2015", 
  'elg' => "undergrad or a lifelong education student interested in a health field; COM, CHM & Nursing students may also apply", 
  'visa' => 0, 
  'name' => 'Mexico',
  'dead' => 'November 19, 2015');
}
if($val == 'turkey') {
	$ar = array(
  'color' => "danger",
  'date' => "8/13/2015 - 8/23/2015", 
  'elg' => "COM, CHM, or a Nursing student; undergrads & lifelong education students interested in a health field may also apply" , 
  'visa' => 1, 
  'name' => 'Turkey',
  'dead' => 'March 15, 2015');
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>IIH Study Abroad Applicarion Page</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">

    $(document).ready(function () {
        $('#info').hide();
        $('#osa').hide();

        $("#rusti").on('click', function() {
        $("#info").toggle();
      });
        $(".click").on('click', function() {
          $('#osa').toggle();
          $('#iih').toggle();
        });
    })
    </script>


  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://iih.msu.edu">IIH Study Abroad</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="http://www.msu.edu/~iih">IIH Home</a></li>
            <li><a href="#help">Help</a></li>
            <li style="left:90%; top:10px;"><img src="/pics/masthead-helmet-green.png"/></li>    
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">
	<div class="row">
    <div style="top:60" class="col-md-3">
    <ul class="nav nav-pills nav-stacked black">
    <li class="<?php if($val != 'gen' && $val != 'ind'){echo "active";}?>"><a href="http://iih.msu.edu" style="color: white;">Study Abroad Courses<?php echo ($val != 'gen' && $val != 'ind') ? " - ".$ar['name']: "";?></a></li>
   

    <li class="<?php if($val == 'gen'){echo "active";}?>"><a href="app.php?app=gen" style="color: white;">General Application</a></li>  
    <li class="<?php if ($val == 'ind') {echo "active";}?>"><a href="app.php?app=ind" style="color: white;">Individual Rotations</a></li>
    </ul>

  <div class="well well-sm" id="info">
  <h5>Rusti Sidel Contact Info:</h5>
  <p>
    Phone #: (517) 884-3789
    <br/>
    email: rusti.sidel@hc.msu.edu
  </p>
     </div> 

    </div>

    <div style="top:60;" class="col-md-6 col-md-offset-1">
    <div style="<?php if($ar['name'] == "Brazil") {echo "background-color: #EEE8F5;";}?>" class="alert alert-<?php echo $ar['color'];?>" role="alert">
 	<div id="iih">
    <h4><?php echo $ar['name'];?> Application Process:</h4>
    <p>This trip runs: <?php echo $ar['date']; ?>.
    </p>
    <p>
    <strong>The application deadline is: <?php echo $ar['dead']; ?>.
 	  </strong></p>
 	  <p>
   	Application: <a href="../applications/<?php echo $val?>.pdf" target="_blank"><?php echo $ar['name']?> PDF</a>
    </p>
    
    <?php if($val != 'gen') {echo "<br/><h4>Are You Eligible?</h4><p> You are eligible if you are a".$ar['elg'].".</p>";}?>
    
    <br/>
    <h4>Ready to apply?</h4>  
    <p>
    <ol>
    <li>Fill out the application above. We will also need a passport copy.</li>
    <li>Shots? You will need to submit a copy of your immunization record.</li>
    <?php 
    if ($val == 'ind') {
    echo "
    <li>You must contact the Office of Study Abroad to set up session.</li>
    <li>You will need an acceptance letter from the hosipital you plan on doing your rotation at.</li>
    <li>You will also need the C.V. of the physician you will study under.</li>
    <li>Please submit your application, passport copy, immunization record, acceptance letter, and C.V along with the $150 application fee (this can be in the form of a check made out to MSU).</li>
    ";} 
    else { 
      echo "<li>Please submit your application, passport copy, and immunization record, along with the $150 application fee (this can be in the form of a check made out to MSU).</li>";
      }
      ?>
    <li>The interview - you will need to contact <a href="#" id="rusti">Rusti Sidel</a> to set up a inteview with Dr. Nassiri</li>
    <li>Once you have completed all the above steps please review The Office of Study Abroad's info by <a href="#" class="click">clicking here</a>.</li>
    <?php
    if ($ar['visa']) {
      if($ar['name'] == 'General') {
        echo "<li>A Visa is required for Brazil and Turkey programs.</li>";
      }
      else {
      echo "<li>A Visa is required for this program. ";
      }
    }

    if($ar['name'] == 'Brazil'){ 
      echo "For <a target='_blank' href='http://chicago.itamaraty.gov.br/en-us/visas.xml'>Visa information click here!</a> 
      - to <a target='_blank' href='http://chicago.itamaraty.gov.br/en-us/how_to_apply.xml'>apply click here!</a></li>";
    }
    if ($ar['name'] == 'Turkey') {
      echo "Please <a target='_blank' href='https://www.evisa.gov.tr/en/'>click here to apply!</a></li>";

    }
    ?>
    </ol>
    </p>
  </div>
  <div id="osa">
    <h4>Important information from The Office of Study Abroad</h4>
    <p>
      Students applying to any MSU-sponsored program should be prepared to submit the following information as part of the online application:
      <br/>
      <ul>
      <li>Names, phone numbers and email address for emergency contacts</li>
      <li>Names, phone numbers and email addresses for references</li>
      <li>A one-page essay (specific programs only; see individual program requirements)</li>
      <li>Health information as requested on the <a target="_blank" href="https://osa.isp.msu.edu/pdf/Health_Form_-_April_2011.pdf">Health/Emergency Treatment Authorization</a> (kept confidential)</li>
      <li>Agreement and acceptance of the terms listed in the <a target="_blank" href="https://osa.isp.msu.edu/statementofresponsibility">Statement of Responsibility</a></li>
      </ul>
      <br/>
      Students should also be aware a $100 application fee will be posted on their MSU account for each program to which they apply.
      <br/>
      <br/>
      For more information see <a href="https://osa.isp.msu.edu" target="_blank">OSA's Website</a>
      <br/>
      <br/>
      <a  href="#" class="click">Click Here</a> to go back to the application page.
      </p>
	</div>
  </div>
  </div>



  



    </div> <!-- /container -->
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/dist/js/bootstrap.min.js"></script>
    <script src="/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
