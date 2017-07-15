<?php
	session_start();
	include_once 'app/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Obrori Ivy</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<script type="text/javascript" src="<?php echo BASE_URL . "js/jquery-1.11.1.min.js"?>"></script>
<!-- stylesheet -->
<link href="<?php echo BASE_URL . "css/bootstrap.css"?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo BASE_URL . "css/style.css"?>" rel="stylesheet" type="text/css" media="all" />
<!-- //stylesheet -->
<!-- online fonts -->
<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<!-- //online fonts -->
<!-- font-awesome-icons -->
<link href="<?php echo BASE_URL . "css/font-awesome.css"?>" type="text/css" rel="stylesheet">
<!-- //font-awesome-icons -->
<link href="<?php echo BASE_URL . "css/w3.css"?>" type="text/css" rel="stylesheet">
</head>
<body>
<div class="agileits_main">
<!-- header -->
<div class="w3_agile_logo">
	<h1 class="text-center"><a href="index.html">Obrori Ivy</a></h1>
</div>
<!-- banner -->
<div class="w3_banner">
	<div class="container">
		<div class="slider">
			<div class="callbacks_container">
			   <ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="banner_text_w3layouts">
							<p>Casp Eestibulum </p>
							<span> </span>
							<h3>Maur egetire sit tmae.</h3>
						</div>
					</li>
					 <li>
						<div class="banner_text_w3layouts">
							<p>Rlua vestibulum </p>
							<span> </span>
							<h3>Eget Integer sit amet.</h3>
						</div>
					</li>
					 <li>
						<div class="banner_text_w3layouts">
							<p>Cras vestibulum </p>
							<span> </span>
							<h3>Amet sitamet tus libe.</h3>
						</div>
					</li>
				</ul>
			</div>
		  <script src="<?php echo BASE_URL . "js/responsiveslides.min.js"?>"></script>
		  <script>
			// You can also use "$(window).load(function() {"
			$(function () {
			  // Slideshow 4
			  $("#slider4").responsiveSlides({
				auto: true,
				pager:true,
				nav:true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
				  $('.events').append("<li>before event fired.</li>");
				},
				after: function () {
				  $('.events').append("<li>after event fired.</li>");
				}
			  });

			});
		 </script>
	   </div>
	</div>
	<div class="social-icons agileits w3-center w3-padding-12">
			<ul>
			<li><a href="#" class="fa fa-facebook icon icon-border facebook"> </a></li>
			<li><a href="#" class="fa fa-twitter icon icon-border twitter"> </a></li>
			<li><a href="#" class="fa fa-google-plus icon icon-border googleplus"> </a></li>
			<li><a href="#" class="fa fa-dribbble icon icon-border dribbble"> </a></li>
		</ul>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- menu -->
<?php
	$uri['home'] = "agile_active";
	include_once 'menu.php';
?>
<!-- //menu -->
  </div>
<!-- //banner -->
<!-- home -->
<div class="home_ w3layouts">
 <div class="home_grids_w3">
  <div class="home_main">
	   <div class="col-md-7 col-sm-7 col-xs-7 img1 img-grid">
		   <div class="img_text_w3ls text-center">
				<h4>Eget Integer sit amet.</h4>
				<span> </span>
				<p>Ras Bestibulum </p>
			</div>
		</div>
		<div class="col-md-5 img2 col-sm-5 col-xs-5 img-grid">
		    <div class="img_text_w3ls text-center">
				<h4>Eget Integer sit amet.</h4>
				<span> </span>
				<p>Cas vstibulum </p>
			  </div>
		</div>
		<div class="clearfix"></div>
	</div>
  <div class="home_main">
	   <div class="col-md-5 col-sm-5 col-xs-5 img3 img-grid ">
		    <div class="img_text_w3ls text-center">
				<h4>Eget Integer sit amet.</h4>
				<span> </span>
				<p>Asid Estibulum </p>
			  </div>
		</div>
	  <div class="col-md-7 col-sm-7 col-xs-7 img4 img-grid">
		    <div class="img_text_w3ls text-center">
				<h4>Eget Integer sit amet.</h4>
				<span> </span>
				<p>Cras vestibulum </p>
			</div>
	 </div>
	<div class="clearfix"></div>
  </div>
   <div class="home_main">
	   <div class="col-md-7 col-sm-7 col-xs-7 img-grid  img5">
		  <div class="img_text_w3ls text-center">
				<h4>Eget Integer sit amet.</h4>
				<span> </span>
				<p>Cras vestibulum </p>
		  </div>
		 </div>
		<div class="col-md-5 col-sm-5 col-xs-5 img-grid img6">
		  <div class="img_text_w3ls text-center">
				<h4>Eget Integer sit amet.</h4>
				<span> </span>
				<p>Cras vestibulum </p>
		  </div>
		 </div>
		<div class="clearfix"></div>
  </div>
</div>
</div>
<!-- //home -->
<!-- about -->
<!--<div class="about_agileinfo" id="about">
  <div class="container">
      <h3 class="title">about us</h3>
	  <div class="about_main">
		  <div class="col-md-6 col-sm-6 col-xs-6 about_agileits"></div>
		  <div class="col-md-6 col-sm-6 col-xs-6 about_text_w3l">
		    <h4>Lorem Ipsum</h4>
			<P>Auris eget vestibulum augue. Integer sit amet tellus libero.Nam ac enim ut velit dictum congue. Integer vitae elit in risus laoreet porttitor non nec enim. Donec nec sapien odio. Nullam dictum, elit maximus vulputate venenatis, neque velit tincidunt mauris, ac facilisis ligula mi et neque. Vivamus ut felis sem. In eget diam lorem. Aliquam tincidunt. Aliquam venenatis  non orci egestas cursus. Phasellus venenatis blandit odio, in tincidunt ex trist.Integer sit amet tellus libero.Nam ac enim ut velit dictum congue. Integer vitae elit in risus laoreet porttitor non nec enim.
			</P>
		  </div>
		  <div class="clearfix"></div>
	  </div>
  </div>
</div>-->
<!-- //about -->
<!-- gallery -->
<div class="gallery_wthree" id="gallery">
 <div class="container">
      <h3 class="title">gallery</h3>
	  <div class="gallery_grid agileits_w3layouts">
	    <div class="col-md-6  col-sm-6 col-xs-6 grid_w3">
			<div class="grid-1">
				<a class="cm-overlay" href="images/2.jpg">
					<img src="images/2.jpg" alt=" " class="img-responsive" />
					 <div class="w3agile-text w3agile-text-smal1">
						<h5>Snap shot</h5>
					</div>
				</a>
			</div>
			 <div class="sub_grid gallery_w3l">
				   <div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-c grid_w3l">
						<a class="cm-overlay" href="images/14.jpg">
							<img src="images/14.jpg" alt=" " class="img-responsive" />
							<div class="w3agile-text w3agile-text-small">
								<h5>Snap shot</h5>
					        </div>
						</a>
					</div>
				   <div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-b grid_w3l">
					 	<a class="cm-overlay" href="images/13.jpg">
							<img src="images/13.jpg" alt=" " class="img-responsive" />
							<div class="w3agile-text w3agile-text-smal1">
								<h5>Snap shot</h5>
							</div>
						</a>
					</div>
				   <div class="clearfix"></div>
			 </div>
        </div>
		<div class="col-md-6 col-sm-6 col-xs-6 grid_w3">
		   <div class="sub_grid">
			   <div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-c grid_w3l">
          			<a class="cm-overlay" href="images/15.jpg">
						<img src="images/15.jpg" alt=" " class="img-responsive" />
						<div class="w3agile-text w3agile-text-small">
							<h5>Snap shot</h5>
						</div>
					</a>
			   </div>
			   <div class="col-md-6 col-sm-6 col-xs-6 grid-1 grid-d grid_w3l">
					<a class="cm-overlay" href="images/16.jpg">
						<img src="images/16.jpg" alt=" " class="img-responsive" />
						<div class="w3agile-text w3agile-text-smal1">
							<h5>Snap shot</h5>
						</div>
					</a>
				</div>
				 <div class="clearfix"></div>
			   </div>
		    <div class="grid-1 grid-2">
				<a class="cm-overlay" href="images/7.jpg">
					<img src="images/7.jpg" alt=" " class="img-responsive" />
					<div class="w3agile-text w3agile-text-smal1">
							<h5>Snap shot</h5>
					</div>
				</a>
		    </div>
		   <div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	  </div>
</div>
</div>
<!-- //gallery -->
<!-- Tooltip -->
<div class="tooltip-content">
	<div class="modal fade features-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h2 class="modal-title text-center">candid</h2>
				</div>
				<div class="modal-body">
					<img src="images/7.jpg" alt="image">
					<p>Fusce et congue nibh, ut ullamcorper magna. Donec ac massa tincidunt, fringilla sapien vel, tempus massa. Vestibulum felis leo, tincidunt sit amet tristique accumsan. In vitae dapibus metus. Donec nec massa non nulla mattis aliquam egestas et mi.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Tooltip -->
<!-- section -->
<div class="w3layouts-section" id="blog">
	<div class="container">
		<h3 class="title">Let the creativity Begin</h3>
		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<a href="#myModal" class="agilebtn" data-toggle="modal" data-target="#myModal"><span>Read More</span></a>
	</div>
</div>
<!-- //section -->
<!-- contact -->
<div class="contact-w3-agileits" id="contact">
	<div class="contact-main">
		<div class="col-md-7 col-sm-7 col-xs-7 contact-right-w3l">
			<form action="#" method="post">
				<input type="text" class="name" name="name" placeholder="First Name" required="">
				<input type="text" class="name" name="name" placeholder="Last Name" required="">
				<input type="email" class="name" name="name" placeholder="Email" required="">
				<input type="text" class="name" name="name" placeholder="Subject" required="">
				<textarea placeholder="Your Message" required=""></textarea>
				<input type="submit" value="SEND MESSAGE">
			</form>
		</div>
		<div class="col-md-5 col-sm-5 col-xs-5 contact-left-w3ls">
			<div class="mail contact-grid-agileinfo">
				<div class="col-md-1 col-sm-2 col-xs-2 contact-icon-wthree">
					<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
				</div>
				<div class="col-md-11 col-sm-9 col-xs-9 contact-text-agileinfo">
					<h4>Mail us</h4>
					<p><a href="mailto:info@example.com">info@example.com</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="call contact-grid-agileinfo">
				<div class="col-md-1 col-sm-2 col-xs-2 contact-icon-wthree">
					<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
				</div>
				<div class="col-md-11 col-sm-9 col-xs-9 contact-text-agileinfo">
					<h4>Call us</h4>
					<p>+18044261149</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="visit contact-grid-agileinfo">
				<div class="col-md-1 col-sm-2 col-xs-2 contact-icon-wthree">
					<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
				</div>
				<div class="col-md-11 col-sm-9  col-xs-9 contact-text-agileinfo">
					<h4>Visit us</h4>
					<p>Stir vally,New york,U.S.A</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
  </div>
</div>
<!-- //contact -->
<!-- copy-right -->
<div class="copy-right agileits-w3layouts">
	<div class="container">
		<p>© 2017 candid. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
	</div>
</div>
<!-- //copy-right -->
<!-- Gallery-plugin -->
<script src="<?php echo BASE_URL . "js/jquery.mobile.custom.min.js"?>"></script>
<script src="<?php echo BASE_URL . "js/jquery.cm-overlay.js"?>"></script>
		<script>
			$(document).ready(function(){
				$('.cm-overlay').cmOverlay();
			});
		</script>
<!-- //Gallery-plugin -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="<?php echo BASE_URL . "js/move-top.js"?>"></script>
<script type="text/javascript" src="<?php echo BASE_URL . "js/easing.js"?>"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();

		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<script src="<?php echo BASE_URL . "js/SmoothScroll.min.js"?>"></script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
	$(document).ready(function() {
		/*
		var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
		};
		*/
		$().UItoTop({ easingType: 'easeOutQuart' });
	});
</script>
<script type="text/javascript" src="<?php echo BASE_URL . "js/bootstrap.js"?>"></script>
</body>
</html>