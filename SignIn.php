
<?php
session_start();

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
							<li><a href="/"> Home</a></li>
							
						</ul>
						<div class="clearfix"> </div>
					</div> 
					<div class="logo">
						<h1><a href="/">E - ARCHITECT</a></h1>
					</div>  
					<div class="header-right">   
						<ul>
						<li><a href="SignIn.php" onclick="preventBack();">Sign in</a></li>
							<li><a href="CustomerSignUp.php"  onclick="preventBack();">Customer Registration</a></li> 
							<li><a href="AdminAddArchitect.php"  onclick="preventBack();">Architect Registration</a></li> 
							
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
	<!-- signIn -->
	<div class="about">
		<div class="container"> 
			<div class="login-form">
				<form action="#" method="post">
					
					<div class="styled-input">
						<input type="text" name="Username" required=""/>
						<label>Username</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="password" name="Password" required=""> 
						<label>Password</label>
						<span></span>
					</div> 
					<div class="wthree-text"> 
						<ul> 
							<li>
								<!-- <input type="checkbox" id="brand" value="">
								<label for="brand"><span></span> Remember me ?</label>  -->
							</li>
							
						</ul>
						<div class="clear"> </div>
					</div> 
					<input type="submit" value="Sign In" name="submit">		
				</form>
				<!-- <p>Don’t have an account ?<a href="/SignUp" class="sign-in popup-top-anim"> Customer</a> or <a href="/SellerSignUp" class="sign-in popup-top-anim"> Seller</a></p> -->
			</div>  
		</div>
	</div>
	<!-- {% if msg %}
<script>
    alert("{{msg}}")
</script>
{% endif %} -->
	<!-- //signIn -->   
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
<?php

include 'connection.php';
if(isset($_POST['submit']))
    {
    $email=$_POST['Username'];
    $password=$_POST['Password'];
    $qry="select * from login where uname='$email' and pass='$password'";
    $check= mysqli_query($conn,$qry);
           if(mysqli_num_rows($check)==0)
               {
               echo "<script>alert('Username or password incorrect');</script>";
           }
           else
           {
               $row= mysqli_fetch_assoc($check);           
              
               $_SESSION["email"]=$row["uname"];
               if($row["utype"]=="Admin")
                {
                   echo "<script>window.location='AdminHome.php'</script>";
                }
               else if($row["utype"]=="Customer" && $row["status"]==1)
                             
                {
                   echo "<script>alert(' Welcome User...');</script>";
                   $g="select * from customer_reg where email='$email'";
                   echo $g;
                   $q2=  mysqli_query($conn,$g);
                   $row1=  mysqli_fetch_array($q2);
                   $_SESSION['email']=$row1['email'];
				   $_SESSION['cid']=$row1['cid'];
                    if($row["status"]=='Accept')
                    {
                        echo "<script>alert('Account Not Activated');</script>";
                    }
                   else
                   {
                    echo "<script>window.location='CustomerHome.php'</script>";
                   }
                }
				else if($row["utype"]=="Architect" && $row["status"]==1)
                             
                {
                   echo "<script>alert(' Welcome User...');</script>";
                   $g="select * from staff_reg where email='$email'";
                   echo $g;
                   $q2=  mysqli_query($conn,$g);
                   $row1=  mysqli_fetch_array($q2);
                   $_SESSION['email']=$row1['email'];
				   $_SESSION['sid']=$row1['sid'];
                    if($row["status"]=='Accept')
                    {
                        echo "<script>alert('Account Not Activated');</script>";
                    }
                   else
                   {
                    echo "<script>window.location='ArchitectHome.php'</script>";
                   }
                }
               else
                {
                   echo "<script>alert(' No User Exists..');</script>"; 
                   $k="select * from vendor_reg where email='$email'";
                   $q2=  mysqli_query($conn,$k);
                   $row1=  mysqli_fetch_array($q2);
               		$_SESSION['email']=$row1['email'];
				   $_SESSION['vid']=$row1['vid'];
                    if($row["status"]=='Accept')
                    {
                      echo "<script>alert('Account Not Activated');</script>";
                    }  else 
                        {
                    echo "<script>window.location='VendorHome.php'</script>";
                    }
                }
            
                  
           }
           
     }
   
?>
    
