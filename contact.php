<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Contact ::EDDIE TECHNOLOGIES NIGERIA LIMITED </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Business process management services,IT consulting and support services,IT design and development services for applications ,IT design and development services for networks and systems , 
Application service provisioning ,Other hosting and IT infrastructure provisioning services ,Digital Marketing solutions, Maintenance and repair services of computers and peripheral equipment, Computer systems management services, Installation of Antivirus, Internet security and antimalware on all platforms running Windows, Mac OS, Android etc,Maintenance and repair services of telecommunication equipment and apparatus,Procurement, Installation, maintenance and repair services of Servers and Client computers, Procurement and installation of IT equipment accessories " />

<!-- default css files -->
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="icon" href="images/fav.png" type="image/x-icon">

	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- default css files -->
	
<!--web font-->

<!--//web font-->
	
</head>

<!-- Body -->
<body>

<?php
if (isset($_POST['submit'])) {
	

$name =$_POST['name'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$subject=$_POST['subject'];
$message =$_POST['message'];
$errors=array();

if(!$name || !$email || !$message || !$subject){
	$errors[].= 'Kindly fill all fields with asterisk(*)';
	
}

if (!empty($errors)) {
	

		$display="<ul class='bg-danger text-center ' style='padding:15px'> ";

			foreach ($errors as $error ) {
				$display.= "<li class='text-danger center-block'>$error</li>";
			}
			$display .= "</ul>";

			 

		?>
      <script type="text/javascript">

       
       	$(document).ready(function(){
           
           $('#error').html("<?php echo $display;?>");
         
            

       	});

       </script>

	<?php
	
}else{

	$to = 'info@eddietechnologiesltd.com';
	$content = 'Contact Person: '.$name."\n"
				.'Email: '.$email."\n"
				.'Phone: '.$phone."\n"
				.'Message: '."\n"
				.'-------------'."\n"
				.$message;
				
	$header = "From:eddietechnologiesltd.com Contact Page <noreply@eddietechnologiesltd.com>"."\n";
	$header .= "Reply-To: $email"."\n";

	mail($to,$subject,$content,$header);

	$_SESSION['succ']="Thank you, your message has been received.";



}
}


if (isset($_SESSION['succ'])) {
	
	$sucmsg=$_SESSION['succ'];



	?>
      <script type="text/javascript">
        
       
       	$(document).ready(function(){
           
        $('#succ').html("<?php echo "<p style='padding:15px' class='bg-success text-center'>$sucmsg</p>";?>");
            

       	});

       </script>

       <?php

	unset($_SESSION['succ']);
	unset($_POST);
}


?>
<!-- banner -->
	<div class=" banner banner1">
		<div class="wthree-different-dot1">
			<!-- header -->
			<div class="header"  style="padding-top: 20px; padding-bottom: 20px">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
							<a href="index.html"><img src="images/logooo3.png" style="padding-top: 5px; width: 200px; "  ></a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							<nav>
								<ul class="nav navbar-nav">
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html" >About</a></li>
									<li><a href="service.html">Services</a></li>
									<li><a href="gallery.html">Portfolio</a></li>
								<!-- <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Pages <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="icons.html">Icons</a></li>
										<li><a href="typography.html">Short Codes</a></li>
									</ul>
							  </li> -->
									<li class="active"><a href="contact.php">Contact Us</a></li>
								</ul>
							</nav>
						</div>
						<!-- /.navbar-collapse -->
					</nav>
				</div>
			</div>
			<!-- //header -->
					<h2>Contact us</h2>

		</div>
	</div>
<!-- //banner -->
	
<!-- contact -->
<div class="agile_about contact" id="contact">

		<div class="agileits_agile_about">
			<h3>Mail us</h3>
						<div id="error"></div>
						<div id="succ"></div>
					
					
					
										<div class="agileinfo_map_color">
											<div class="agileinfo_map_color_grid">
												<div class="col-md-3 agileinfo_map_color_grid_left">
													<h4><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Address</h4>
													<p>5, Godwin Omonuwa street, </p>
													Off Ire Akari Estate, Isolo, Lagos. Nigeria</p>
												</div>


			
			






												<div class="col-md-3 agileinfo_map_color_grid_left">
													<h4><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Mail Us</h4>
													<p><a href=""> info@eddietechnologiesltd.com</a></p>
													
												</div>
												<div class="col-md-3 agileinfo_map_color_grid_left">
													<h4><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Phone</h4>
													<p>+2348023105039</p>
													<p>+2348085852049</p>
												</div>
												<div class="col-md-3 agileinfo_map_color_grid_left">
													<h4><span class="glyphicon glyphicon-search" aria-hidden="true"></span>Social</h4>
													<div class="connect-social">  
														<ul>
															<li><a href="https://www.facebook.com/#!/Eddie-Technologies-Nigeria-Limited-477713195938883/" class="social-button facebook"><i class="fa fa-facebook"></i></a></li>
															<!-- <li><a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a></li>
															<li><a href="#" class="social-button linkedin"><i class="fa fa-linkedin"></i></a></li> -->
														</ul>
													</div>
												</div>
												<div class="clearfix"> </div>
											</div>
										</div>

	<div class="container">	
			<div class="agileits_agile_about_mail">
				<form action="" method="post">
					<div class="col-md-6 agileits_agile_about_mail_left">
						<input type="text" name="name" placeholder="Name*" value="<?php echo ((isset($_POST['name'])?$name:''));?>" >
					<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 agileits_agile_about_mail_left">
						<input type="text" name="subject" placeholder="Subject*" value="<?php echo ((isset($_POST['subject'])?$subject:''));?>" >
					<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 agileits_agile_about_mail_left">
						<input type="email" name="email" placeholder="Email*" value="<?php echo ((isset($_POST['email'])?$email:''));?>" >
					<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 agileits_agile_about_mail_left">
						<input type="text" name="phone" placeholder="Phone" value="<?php echo ((isset($_POST['phone'])?$phone:''));?>" >
					<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
					<textarea name="message" placeholder="Message*..." ><?php echo ((isset($_POST['message'])?$message:''));?></textarea>
					<div class="submit">
						<input type="submit" value="Submit" name="submit">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //contact -->

<!-- map -->
<!-- <div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.47339870626!2d-0.2417004386729234!3d51.52855824202755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sin!4v1497263047247"></iframe>
</div> -->
<!-- map -->

<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-4 footerleft">
			<h3>Menu</h3>
		<ul id="try">
			<li><a href="index.html">Home</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="gallery.html">Portfolio</a></li>
			<li><a href="contact.php">Contact Us</a></li>
		</ul>
		</div>
		<div class="col-md-4 footermiddle">
			<h3>Get in touch</h3>
			
			<p>5, Godwin Omonuwa street, </p>
			<p>Off Ire Akari Estate, Isolo, Lagos. Nigeria</p>
			
			<p class="phone">phone: +2348023105039, +2348085852049</p>
			<!-- <p class="phone">Fax: +0(21) 334 5678</p> -->
			<p class="phone">Mail: <a href="">info@eddietechnologiesltd.com</a></p>
		</div>
		<div class="col-md-4 footerright">
			<div class="col-md-3 agileinfo_map_color_grid_left">
				<h3>Social</h3>
				<div class="connect-social">  
					<ul>
						<li><a href="https://www.facebook.com/#!/Eddie-Technologies-Nigeria-Limited-477713195938883/" class="social-button facebook"><i class="fa fa-facebook"></i></a></li>
						<!-- <li><a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="social-button linkedin"><i class="fa fa-linkedin"></i></a></li> -->
					</ul>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //footer -->

<!-- copyright -->
<div class="wthree_copy_right">
	<div class="container">
		<p>© 2017 EDDIE TECHNOLOGIES NIGERIA LIMITED. All rights reserved </p>
			
	</div>
</div>
<!-- //copyright -->

<!-- Default-JavaScript-File -->
	
<!-- //Default-JavaScript-File -->
	
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
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
<!-- //here ends scrolling icon -->

</body>
<!-- //Body -->
</html>