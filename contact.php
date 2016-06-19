<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>No Sidebar - Ion by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="#">Ion</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="left-sidebar.html">Left Sidebar</a></li>
						<li><a href="right-sidebar.html">Right Sidebar</a></li>
						<li><a href="no-sidebar.html">No Sidebar</a></li>
						<li><a href="#" class="button special">Sign Up</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->


			<section id="main" class="wrapper style1">
				<header class="major">
					<h2>CONTACT</h2><p>
					<ul class="alt">
										<li><i class="icon fa-map-marker"></i>   Address: De Boelelaan 1105, 1081 HV Amsterdam</li>
										<li><i class="icon fa-envelope"></i> Email: r.bharathdas(@)vu.nl</li>
										<li></li>
									</ul> </p>
				</header>
				<div class="container">
						
					<!-- One -->
						<section class="wrapper style4 special container 75%">
							<a href="#" class="image fit"><img src="images/contact.png" alt="" /></a>
							<!-- Content -->
								<div class="content">
									<?php 
										$action=$_REQUEST['action']; 

    								?>  
									<form  action="" method="POST" > 
										<input type="hidden" name="action" value="submit">
										<div class="row 50%">
											<div class="6u 12u(mobile)">
												<input type="text" name="name" placeholder="Nombre" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>"/>
											</div>
											<div class="6u 12u(mobile)">
												<input type="text" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>"/>
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<input type="text" name="subject" placeholder="Asunto" value="<?php if(isset($_POST['subject'])){echo $_POST['subject'];}?>"/>
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<textarea name="message" placeholder="Mensaje" rows="7"><?php if(isset($_POST['message'])){echo $_POST['message'];}?></textarea>
											</div>
										</div>
										<div class="row">
											<div class="6u 12u(mobile)">
												<div class="g-recaptcha" data-sitekey="6Lf5QB0TAAAAAIKMf_QpLm-EdTg4d8MHq2FJW2OF"></div>
											</div>
											<div class="6u 12u(mobile)">					
												<input type="submit" class="special" value="Enviar" />
											</div>
										</div>
									</form>
									<?php 
     								if ($action!="") { 
    									$name=$_REQUEST['name']; 
    									$email=$_REQUEST['email']; 
    									$message=$_REQUEST['message'];
    									$header = "From: marketing@lybspain.com\r\n"; 
    									$header = "Return-path: $email\r\n";
										$header.= "MIME-Version: 1.0\r\n"; 
										$header.= "Content-Type: text/html; charset=utf-8\r\n"; 
										$header.= "X-Priority: 1\r\n"; 
										$header.= "Location: http://lybspain.com\r\n";
  										if(isset($_POST['g-recaptcha-response'])){
          									$captcha=$_POST['g-recaptcha-response'];
        								} if(!$captcha){
          									echo "<br><p style='color:red'>Resuelve el captcha y demuestranos que no eres un robot</p>";
          									exit;
        								}
  										if (($name=="")||($email=="")||($message=="")||($captcha=="")){ 
        									//<p> You forgot </p>
        									 echo "<br><p style='color:red'>Todos los campos son obligatorios</p>"; 
        								} 
        								else{ 
        									$secretKey = "6Lf5QB0TAAAAAHum_dbEedV9tycQFN5fmcHLy42O";
        									$ip = $_SERVER['REMOTE_ADDR'];
        									$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
       										$responseKeys = json_decode($response,true);
        									if(intval($responseKeys["success"]) !== 1) {
          										//echo '<h2>You are spammer ! Get the @$%K out</h2>';
          										$from="From: $name<$email>\r\nReturn-path: $email"; 
        										$subject=$_REQUEST['subject'];
        										//"marketing@lybspain.com"
												mail("marketing@lybspain.com", $subject, $message, $from, $header);
	      										echo "<br><p style='color:green'>Tu mensaje se ha enviado correctamente :)<br> Nos pondremos en contacto contigo muy pronto</p>";
        									} else {
          										echo "<br><p style='color:red'>Ups! parece que no se ha enviado el e-mail. <br> Vuelve a inetntarlo dentro de unos minutos</p>";
        									}        
        									
        
        								} 
    								}   
									?> 
								</div>

						</section>
					</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row double">
						<div class="6u">
							<div class="row collapse-at-2">
								<div class="6u">
									<h3>SITE MAP</h3>
									<ul class="alt">
										<li><a href="#">Home</a></li>
										<li><a href="#">News</a></li>
										<li><a href="#">Projects</a></li>
										<li><a href="#">Publications</a></li>
										<li><a href="#">Documentation</a></li>
										<li><a href="research_team.html">Research Team</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</div>
								<div class="6u">
									<h3>CONTACT INFORMATION</h3>
									<ul class="alt">
										<li><i class="icon fa-map-marker"></i>   Address: De Boelelaan 1105, 1081 HV Amsterdam</li>
										<li><i class="icon fa-envelope"></i> Email: <img src="images/email.png"></li>
										<li></li>
									</ul>
									<ul class="icons">
								<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
								<li><a href="#" class="icon fa-github"></a></li>
							</ul>
								</div>
							</div>
						</div>

						
						<div class="6u">
							<h2>INTERACTIVE MAP</h2>
							<div class="google-maps">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2438.021279563678!2d4.863531215603716!3d52.33376005776725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c60a085c443af1%3A0x2df2d7a997eccd84!2sVU+University+Amsterdam!5e0!3m2!1sen!2snl!4v1460488612181" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<!-- <a href="#" class="image fit"><img src="images/map.png" alt="" /></a> -->
						</div>
					</div>
					<ul class="copyright">
						<li>&copy; The Swan Project. All rights reserved.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a> and Patricia Mayo Tejedor</li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a> and Patricia Mayo Tejedor</li>
					</ul>
				</div>
			</footer>

	</body>
</html>