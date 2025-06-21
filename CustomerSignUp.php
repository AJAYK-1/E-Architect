
<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>E - ARCHITECT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dream Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="static/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="static/css/style.css" type="text/css" rel="stylesheet" media="all">  
<link href="static/css/font-awesome.css" rel="stylesheet"> 			<!-- font-awesome icons --> 
<!-- //Custom Theme files -->  
<!-- js -->
<script src="static/js/jquery-2.2.3.min.js"></script>  
<script src="static/js/smoothscroll.min.js"></script> 
<script>
	function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };
</script>
<!-- //js -->
<!-- web-fonts -->  
<link href="//fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts --> 
</head>
<body>
	<!-- banner -->
	<div class="banner w3about">
		<!-- header -->
		<div class="header">
			<div class="container">
				<div class="header-w3lsrow"> 
					<div class="menu"> 
						<div class="toggle"></div> 
						<ul class="w3nav">
							<li><a href="index.php"> Home</a></li>
							
						</ul>
						<div class="clearfix"> </div>
					</div> 
					<div class="logo">
						<h1><a href="#">E - ARCHITECT</a></h1>
					</div>  
					<div class="header-right">   
						<ul>
							<li><a href="SignIn.php">Sign in</a></li>
							<li><a href="CustomerSignUp.php">Customer Registration</a></li>
							<li><a href="AdminAddArchitect.php">Architect Registration</a></li> 
							
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
				 
			</div>
		</div>
		<!-- //banner-text --> 
	</div>
	<!-- //banner -->
	<!-- signup -->
	<div class="about">
		<div class="container"> 
			<div class="login-form signup-form">
				<form action="#" method="post">
					
					<div class="styled-input">
						<input type="text" pattern="[A-Za-z\s]+" name="cname" required=""/>
						<label>Name</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="text" name="address" required=""/>
						<label>House Name</label>
						<span></span>
					</div>
					<div class="styled-input">
						<select name="dist" >
							<option value="">---Select District---</option>
							<?php
							$s="select * from district";
                                $tf=  mysqli_query($conn,$s);
                                while($fh=mysqli_fetch_array($tf))
                                {
                                    echo '<option value="'.$fh['did'].'">'.$fh['dname'].'</option>';
                                }
                                ?>
						
						</select>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="text" name="location" required=""/>
						<label>Location</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="text" pattern="[0-9]{10}" name="mobile" maxlength="10" required=""/>
						<label>Phone</label>
						<span></span>
					</div>
					<div class="styled-input">
						<h3> </h3>
						<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="Email" required=""/>
						<label>Email</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="password" name="Password" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" required=""> 
						<label>Password</label>
						<span></span>
					</div>  
					<div class="wthree-text"> 
						<input type="checkbox" id="brand1" value="">
						<label for="brand1"><span></span>I accept the terms of use</label> 
					</div>
					<input type="submit" name="submit" value="Sign Up">
							
				</form> 
				<p>Already Registered ?<a href="SignIn.php" class="sign-in popup-top-anim"> SignIn Here !</a></p>
			</div>  
		</div>
	</div>
	
	<?php
if(isset($_POST['submit']))
{
    $cname=$_POST["cname"];
    $address=$_POST["address"];
    $district=$_POST["dist"];
    $location=$_POST["location"];
    $mobile=$_POST["mobile"];
    $email=$_POST["Email"];
	$password=$_POST["Password"];
     
	$qry="insert into customer_reg(cname,address,district,location,mobile,email,password) values('$cname','$address','$district','$location','$mobile','$email','$password')";
	$q=  mysqli_query($conn,$qry); 
	$qr ="insert into login(uname,pass,utype)values('$email','$password','Customer')";
	$q=  mysqli_query($conn,$qr);
   
   
    if($q)
    {
        echo '<script>alert("Registration requested...")</script>';
    } 
}        

?>
	<!-- //signup -->   
	<!-- footer -->
	
	<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-grids">
				<h3>Review</h3>
				<p>Sed ut turpis elit ullamcorper in auctor non, accumsan vel lacus nulla auctor cursus nunc. Maecenas ultricies dolor in urna tempus, id egestas erat finibus  interdum lectus eget scelerisque.</p>
			</div>
			<div class="col-md-3 footer-grids">
				<h3>Contact Us</h3>
				<p>123 NewYork City USA.<br>
					<span>Office: 908-0000</span>
				</p>
				<div class="footer-bottom">
					<a href="#"><i class="fa fa-facebook"> </i><span>Facebook</span></a>
					<a href="#"><i class="fa fa-twitter"> </i><span>Twitter</span></a>
					<a href="#"><i class="fa fa-google-plus"> </i><span>Google +</span></a>
					<a href="#"><i class="fa fa-dribbble"> </i><span>Dribbble</span></a>
				</div>
			</div>
			<div class="col-md-5 footer-grids">
				<h3>Flickr</h3>
				<a  class="footer-img" href=""><img src="static/images/i4.jpg" alt=""></a>
				<a class="footer-img" href=""><img src="static/images/i2.jpg" alt=""></a>
				<a class="footer-img" href=""><img src="static/images/i3.jpg" alt=""></a>
			</div>
			<div class="clearfix"> </div>
			<div class="footer-copy">
				<p>© 2019 Dream Home. All rights reserved | Design by <a href="http://w3layouts.com">Dream Home</a></p>
			</div>
		</div>
	</div>

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