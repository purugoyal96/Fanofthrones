<?php
$resp['name'] = 'Jon Snow';
$resp['quote'] = "I know nothing";
?>
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Fan of Thrones | Game of thrones character</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">    

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.jpg" >

</head>

<body>

   <!-- Intro Section
   ================================================== -->
   <section id="intro">

   	<header class="row">	 

			<div id="logo" >
				<a href="#" >
                 <img src="images/<?php echo $resp['path'];?>.jpg" alt="Fan of Thrones">                  
              </a>					
			</div>

   	</header> <!-- Header End -->   	

   	<div  id="main" class="row">

	   	<div class="twelve columns">
	   			<br>
	   		<h1>You Are <?php echo $resp['name'];?></h1>

	   		<p><?php
	   		echo $resp['quote'];
	   		?></p>


	         <ul class="social">
	            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
	            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
	            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
	            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
	            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
	            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
	            <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>

         </div> 

      </div> <!-- main end -->    	

   </section> <!-- end intro section -->



   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">            

            <ul class="copyright">
               <li>&copy; Copyright 2014 Zoon</li>
               <li>Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a></li>          
            </ul>

         </div>          

      </div>

      <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#intro"><i class="icon-up-open"></i></a></div>

   </footer> <!-- Footer End-->   

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

	<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
   <script src="js/gmaps.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.countdown.js"></script>
   <script src="js/jquery.placeholder.js"></script>
   <script src="js/backstretch.js"></script>  
   <script src="js/init.js"></script>

</body>

</html>