<?php
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['name']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['name']);
	}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'andrea@narancs.net'; //Put your own email address here
		$subject = "$name - request from portfolio.narancs.net";
		$body = "$comments";
		$headers = "From: $name <".$email.'>' . "\r\n" . 'Reply-to: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="author" content="AndreaVarga" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>Andrea Varga</title>

	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/colors.css" />
	<link rel="stylesheet" type="text/css" href="css/superfish.css" />
	<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.1.css" />
</head>

<body>
	<div id="wrap">
	
		<div id="header" class="clearfix">
		
			<div id="logo">
				<span><a href="index.html">Andrea Varga</a></span>
			</div>
			
			<ul id="nav" class="sf-menu">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="column-layouts.html">CV</a>
					<ul>

						
						<li><a href="cv-short.html">CV short</a></li>
						<li><a href="cv-full.html">CV full</a></li>
					</ul>
				</li>
				<li><a href="portfolio.php">Portfolio</a></li>

				<li><a href="contact.php">Contact</a></li>
			</ul><!--nav ends-->
			
		</div><!--header ends-->
		
		<div id="mini-header"></div><!--mini-header ends-->		
		
		<div id="content" class="clearfix">
			
			<div class="two-thirds">
				<h2>Contact me</h2>
				<p></p>
				<?php if(isset($hasError)) { //If errors are found ?>
					<p class="error">Please fill in all fields correctly.</p>
				<?php } ?>
				<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
					<p class="success">Message successfully sent!<br />Thanks <em><?php echo $name;?></em>. We'll get in touch with you soon.</p>
				<?php } ?>
				<form id="contact-form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<fieldset>
						<p><input type="text" value="" name="name" id="name" /><label for="name">Name</label></p>
						<p><input type="text" value="" name="email" id="email" /><label for="email">E-mail</label></p>
						<p><textarea rows="10" cols="65" name="message" id="message"></textarea></p>						
						<p><input type="submit" value="Submit" class="submit" name="submit" /></p>
					</fieldset>
				</form>
			</div>
			
			<div class="one-third last">	
				<!--<h3>Address</h3>-->
				<ul class="contact-info">
					<!--<li class="address">Your street 12-34, City</li>-->
					<li class="phone">+40-744-825262</li>
					<li class="email">andi [at] narancs [dot] net</li>
				</ul>
				
			</div>
			<div class="clearfix"></div>
			
		</div><!--content ends-->
		
		<div id="mini-footer"></div><!--mini-footer ends-->
		
		<div id="footer" class="clearfix">
			<ul class="social right">
				<li><a href="#"><img alt="facebook" src="images/social-icons/facebook_16.png" /></a></li>
				<li><a href="#"><img alt="twitter" src="images/social-icons/twitter_16.png" /></a></li>
				<li><a href="#"><img alt="flickr" src="images/social-icons/flickr_16.png" /></a></li>
				<li><a href="#"><img alt="linkedin" src="images/social-icons/linkedin_16.png" /></a></li>
				<li><a href="#"><img alt="facebook" src="images/social-icons/tumblr_16.png" /></a></li>
			</ul>
			<span>Bridge - HTML theme &copy; 2010 <a href="http://themeforest.net/user/AndreaVarga">AndreaVarga</a></span>
		</div><!--footer ends-->
		
	</div><!--wrap ends-->
	
	<!-- jQuery Scripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/hoverIntent.js"></script>
	
	<!-- Cufon font replacement -->
	<script type="text/javascript" src="js/cufon-yui.js" ></script>
	<script type="text/javascript" src="js/Sansation_300.font.js"></script>
	
	<!-- Superfish dropdown menu -->
	<script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/supersubs.js"></script>

	<!-- Fancybox - image popup -->
	<script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.1.js"></script>

	<!-- Sliders -->
	<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
	<script type="text/javascript" src="js/coin-slider.js"></script>
	
	<!-- Custom javasript -->
	<script type="text/javascript" src="js/custom.js"></script>
	
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>