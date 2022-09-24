<?php
//include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SUPER BASKET</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->
<link rel="stylesheet" href="style68.css">
</head>
<body>
<!-- header -->
<div class="banner-top">
			
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php">SUPER<span> BASKET</span><p class="logo_w3l_agile_caption">Your Dreamy Shop</p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="index.php" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="#rooms" class="menu__link scroll">Products</a></li>
							<li class="menu__item"><a href="#about" class="menu__link scroll">About</a></li>
							<li class="menu__item"><a href="#team" class="menu__link scroll">Team</a></li>
							<li> <a href="customersignup.php"> Sign-up</a></li>
            
            
							<li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
               <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="admin_login.php"> Admin Login</a></li>
             
            </ul>
            </li>
			
             
            </ul>
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
<!-- //header -->
		<!-- banner -->
	<div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								<h4>SUPER BASKET</h4>
									<h3>We know what you love</h3>
										<p>Welcome</p>
									<div class="agileits_w3layouts_more menu__item">
									<a href="customerlogin.php" class="menu__link" >User Login</a>
									<a href="admin_login.php" class="menu__link" >Admin Login</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>SUPER BASKET</h4>
									<h3>Shop with friends & families</h3>
										<p>We provide you with the best</p>
									<div class="agileits_w3layouts_more menu__item">
									<a href="customerlogin.php" class="menu__link" >User Login</a>
									<a href="admin_login.php" class="menu__link" >Admin Login</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>SUPER BASKET</h4>
								<h3>Shop now or never</h3>
										<p>Get Registered Today</p>
									<div class="agileits_w3layouts_more menu__item">
									<a href="customerlogin.php" class="menu__link" >User Login</a>
									<a href="admin_login.php" class="menu__link" >Admin Login</a>
										</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!--banner Slider starts Here-->
		</div>
		    <div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
				</a>
			</div>
	</div>	
	<!-- //banner --> 
<!--//Header-->

<!-- //Modal2 for login -->
						<div id="modal-wrapper" class="modal fade" tabindex="-1" role="dialog">
						<form class="modal-dialog" action="includes/log.php" method="post" >
							  
						  <div class="modal-content">
							<span onclick="document.getElementById('modal-wrapper').style.display='none'"style="width:200px; margin-top:200px; margin-left:160px;"   data-dismiss="modal">&times;</span>
							<div class="imgcontainer">
							<img src="1.png" alt="" class="avatar">
							<h1 style="text-align:center">LOGIN HERE</h1>
							</div>
						  </div>
					  
						  <div class="modal-header">
							<input type="text" placeholder="Enter Username" name="name" required>
							<input type="password" placeholder="Enter Password" name="pass" required>  								      
							<button name="submit">Login</button>
							<a href="#" class="menu__link" data-toggle="modal" data-target="#modal-wrapper2"><button onclick="myfunction2()"type="submit">Register</button></a>
						
						
						  </div>
						  
						</form>
						
					  </div>
					  
					  <script>
					  // If user clicks anywhere outside of the modal, Modal will close
					  
					  var modal = document.getElementById('modal-wrapper');
					  window.onclick = function(event) {
						  if (event.target == modal) {
							  modal.style.display = "none";
						  }
						  
					  }
					  function myfunction2(){
	var modal = document.getElementById('modal-wrapper');
	modal.style.display = "none";
	
}
					  </script>
					  
	 <!-- //Modal2 for registration -->
<div id="modal-wrapper2" class="modal fade" tabindex="-1" role="dialog">
  <form class="modal-dialog" action="includes/reg.php" method="post" >
		
	<div class="modal-content">
	  <span onclick="document.getElementById('modal-wrapper').style.display='none'"style="width:200px; margin-top:200px; margin-left:160px;"   data-dismiss="modal">&times;</span>
	  <div class="imgcontainer">
	  <img src="1.png" alt="" class="avatar">
	  <h1 style="text-align:center">REGISTER HERE</h1>
	  </div>
	</div>

	<div class="modal-header">
	<input type="text" placeholder="USER NAME" name="name" required/>
	<input type="password" placeholder="PASSWORD" name="pass"  required />
	<input type="number" placeholder="MOBILE NUMBER" name="mob"  required/>
	<button  name="submit">Register</button>
	<!-- <input class=" align_stright_left bttn" type="submit"  name="submit" value="Order"required> -->
	</div>
	
  </form>
  
</div>

<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper2');
window.onclick = function(event) {
	if (event.target == modal) {
		
		modal.style.display = "none";
	}
}
function myfunction(){
	var modal = document.getElementById('modal-wrapper');
	modal.style.display = "none";
	alert("success");
}
</script>

<!-- //Modal3 for successfull registration-->
<div id="modal-wrapper3" class="modal fade" tabindex="-1" role="dialog">
  <form class="modal-dialog" action="includes/reg.php" method="post" >
		
	<div class="modal-content">
	  <span onclick="document.getElementById('modal-wrapper').style.display='none'"style="width:200px; margin-top:200px; margin-left:160px;"   data-dismiss="modal">&times;</span>
	  <div class="imgcontainer">
	  <img src="1.png" alt="" class="avatar">
	  <h1 style="text-align:center">THANK YOU FOR REGISTERING</h1>
	  <h2 style="text-align:center">WITH US</h2>
	  </div>
	</div>

	<div class="modal-header">
	<a href="#" class="menu__link" data-toggle="modal" data-target="#modal-wrapperf"><button name="submit">LOGIN</button></a>

	</div>
	
  </form>
  
</div>

<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}
</script> 


<!-- PRODUCTS AND CATEGORY -->
						<div class="plans-section" id="rooms">
				 <div class="container">
				 <h3 class="title-w3-agileits title-black-wthree">Products And Category</h3>
						<div class="priceing-table-main">
				 <div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src="images/r1.jpeg" alt=" " class="img-responsive" />
							<h4>VEGETABLES</h4>
						</div>
						<div class="price-gd-bottom">
							   <div class="price-list">
									<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									
								     </ul>
							</div>
							<div class="price-selet">	
													
							<a href="customerlogin.php" class="menu__link">VIEW</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid ">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src="images/r2.jpeg" alt=" " class="img-responsive" />
							<h4>MEAT</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
									<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="price-selet">
								
							<a href="customerlogin.php" class="menu__link" >VIEW</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid lost">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src="images/r3.jpeg" alt=" " class="img-responsive" />
							<h4>BAKERY ITEMS</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="price-selet">
								
							<a href="customerlogin.php" class="menu__link">VIEW</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid wthree lost">
					<div class="price-block agile">
						<div class="price-gd-top ">
							<img src="images/r4.jpeg" alt=" " class="img-responsive" />
							<h4>OTHERS</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="price-selet">
								
							<a href="customerlogin.php" class="menu__link" >VIEW</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	 <!--// rooms & rates -->
<!-- //Modal1 -->


<!--sevices-->
<div class="advantages" id="about">
	<div class="container">
		<div class="advantages-main">
				<h3 class="title-w3-agileits">Our Services</h3>
		   <div class="advantage-bottom">
			 <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
			 	<div class="advantage-block ">
					<i class="fa fa-credit-card" aria-hidden="true"></i>
			 		<h4>Order First, Pay After! </h4>
			 		<!-- <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p> -->
					<p><i class="fa fa-check" aria-hidden="true"></i>Farm fresh products</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Superfast Delivey</p>
			 		
			 	</div>
			 </div>
			 <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
			 	<div class="advantage-block">
					<i class="fa fa-clock-o" aria-hidden="true"></i>
			 		<h4>24 Hour Services</h4>
			 		<!-- <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p> -->
					<p><i class="fa fa-check" aria-hidden="true"></i>24 hours service</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>24-hour delivery service</p>
			 	</div>
			 </div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--//sevices-->

  <!-- our team -->
	<div class="w3l-visitors-agile" >
		<div class="container">
                 <h3 class="title-w3-agileits title-black-wthree">About our Team</h3> 
		</div>
		<div class="w3layouts_work_grids" id="team">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c1.jpeg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								
								</h4>
								<p>---------------------------------- </p>
								<h5>Shivam Singh</h5>
								<p>Thane, Maharastra</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c2.jpeg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								
								</h4>
								<p>------------------- </p>
								<h5>Prathamesh Shinde</h5>
								<p>SB Road, Pune</p>
							</div>
							<div class="clearfix"> </div>
						</li>
		
					</ul>
				</div>
			</section>
		</div>	
	</div>
<!--our team -->
<!-- contact -->

<!-- /contact -->
			<div class="copy">
		       
		    </div>
<!--/footer -->

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- contact form -->
<script src="js/jqBootstrapValidation.js"></script>
<!-- /contact form -->	
<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
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
		<!--search-bar-->
		<script src="js/main.js"></script>	
<!--//search-bar-->

<!-- smooth scrolling -->
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
	
	<div class="arr-w3ls">
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>


