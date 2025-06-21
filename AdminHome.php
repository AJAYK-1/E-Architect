
<!DOCTYPE html>
<html lang="en">
<head>
<title>Dream Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Drive Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="static/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="static/css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link rel="stylesheet" href="static/css/flexslider.css" type="text/css" media="all" property="" /> 
<link href="static/css/font-awesome.css" rel="stylesheet"> 			<!-- font-awesome icons -->
<link href="static/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<!-- //Custom Theme files -->  
<!-- js -->
<script src="static/js/jquery-2.2.3.min.js"></script>  
<script src="static/js/smoothscroll.min.js"></script> 
<!-- //js -->
<!-- web-fonts -->  
<link href="//fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts --> 
</head>
<body> 
	<!-- banner -->
	<div class="banner">
		<!-- header -->
		<div class="header">
			<div class="container">
				<div class="header-w3lsrow"> 
					<div class="menu"> 
						<div class="toggle"></div> 
						<ul class="w3nav">
							<li><a href="AdminHome.php"> Home</a></li>
							<li><a href="AdminViewCustomers.php"> Customers</a></li> 
							<!-- <li><a href="AdminViewVendors.php"> Vendor</a></li>  -->
							<li><a href="Adminviewarchitects.php"> Architect</a></li> 
							<!-- <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Plan <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="AdminViewPlanRequest.php">Request</a></li>
									<li><a href="AdminViewPlanUploaded.php">Uploaded</a></li>     
								</ul>
							</li>  -->
							<li><a href="AdminViewFeedback.php"> Payment</a></li> 
						</ul>
						<div class="clearfix"> </div>
					</div> 
					<div class="logo">
						<h1><a href="AdminHome.php.php">E - ARCHITECT</a></h1>
					</div>  
					<div class="header-right">   
						<ul>
							
							<li><a href="CommonHome.php">Logout</a></li> 
						</ul>
						<div class="clearfix"> </div> 
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- //header --> 
		<!-- banner-text -->
		<div class="banner-text"> 
			<div class="container">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="banner-w3lstext">
								<!-- <h2>Welcome</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida mauris non mi gravida, at sollicitudin odio efficitur. Mauris ex nulla, aliquam ornare facilisis nec convallis pulvinar a non nunc non leo sollicitudin</p> -->
							</div>
						</li>
						<li>
							<div class="banner-w3lstext">
								<!-- <h3>Perspiciatis</h3>
								<p>Integer gravida mauris non mi gravida, at sollicitudin odio efficitur. Lorem ipsum dolor sit amet elit consectetur adipiscing. Mauris ex nulla, aliquam ornare facilisis nec convallis pulvinar a non nunc non leo sollicitudin</p> -->
							</div>
						</li>
						<li>
							<div class="banner-w3lstext">
								<!-- <h3>Enimipsam</h3>
								<p>Mauris ex nulla, aliquam ornare facilisis nec convallis pulvinar a non nunc non leo sollicitudin, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida mauris non mi gravida, at sollicitudin odio efficitur. </p> -->
							</div>
						</li>
					</ul> 
				</div> 	
				<!-- FlexSlider --> 
				<script defer src="static/js/jquery.flexslider.js"></script>
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
				<!-- End-slider-script -->
			</div>
		</div>
		<!-- //banner-text --> 
	</div>
	<!-- //banner -->
	<!-- welcome -->

	<!-- //footer --> 
	<!-- menu js -->
	<script>
		$('.toggle').on('click', function() {
			$('.menu').toggleClass('open');  
			$('.w3nav').toggleClass('show-w3nav');  
			$('.w3nav a').toggleClass('show-w3nav-link');  
			$('.toggle').toggleClass('close');  
		});
	</script>
	<!-- //menu js -->
	<script src="static/js/owl.carousel.js"></script>
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="static/js/move-top.js"></script>
	<script type="text/javascript" src="static/js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
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
	<!-- //smooth-scrolling-of-move-up --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="static/js/bootstrap.js"></script>
</body>
</html>