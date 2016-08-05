<?php
//*************************Do not interfere this part***********************************************************
if($_POST['submit']){
	$flag=0;
	$to = "bookings@spectalmanagement.com";
	//$to="abhinavagrawal1995@gmail.com";
	$subject = "New message from website";
	$txt = "This is an automatically generated email from the contact us form on spectalmanagement.com\r\nName: " . $_POST['name'] . "\r\nEmail: " . $_POST['email'] . "\r\nMessage: " . $_POST['msg'];
	$headers = "From: contactus@spectalmanagement.com";
	//$headers = "From: abhinavagrawal.in";
	if(mail($to,$subject,$txt,$headers))
		$flag=1;
	else{
		var_dump($txt);
		die("error");
	}
}
//*************************************************************************************************************
?>

<!DOCTYPE HTML>
<!--
	Spectal Talent Management
	By Abhinav Agrawal | abhinavagrawal.in
-->
<html>
	<head>
		<title>Spectal Talent Management</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<meta property="og:title" content="Spectal Management" />
		<meta property="og:type" content="Talent Management" />
		<meta property="og:url" content="http://www.spectalmanagement.com" />
		<meta property="og:description" content="We are an artist management agency that brands artists and takes under the wing the task of getting them what they deserve. Be it management of bookings, dealing with the press, or ensuring social media presence: we at Spectal thrive to be the ultimate support structure of our artists in the industry they belong to. If you want to boost your career with just the right amount of exposure, you've got to be a part of our Spectrum of Talent. Allow us to show how we can serve you." />
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
		<script type="text/javascript" src="assets/js/modernizr.custom.28468.js"></script>
		<link href='assets/css/fonts/economica.css' rel='stylesheet' type='text/css'>
		<link href='assets/css/hover.css' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="assets/css/vegas.css">
		<link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Fira+Sans:700' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	</head>
	<body>

		<!-- Header -->
			<header id="header">

				<!-- Logo -->
					<h1 id="logo"><div style="width: 100%;height: auto;">
					<img style="opacity: 0.4;" src="images/logo.png">
					</div></h1>

				<!-- Nav -->
					<nav id="nav" >
						<ul>
							<li><a href="#intro" class="hvr-float-shadow">Intro</a></li>
							<li><a href="#about" class="hvr-float-shadow">About Us</a></li>
							<li><a href="#services" class="hvr-float-shadow">Services</a></li>
							<li><a href="#artists" class="hvr-float-shadow">Artists</a></li>
							<li><a href="#work" class="hvr-float-shadow">Gallery</a></li>
							<li><a href="#formscroll" class="hvr-float-shadow">Contact</a></li>
						</ul>
					</nav>

			</header>


		<!-- Intro -->
			<section id="vegass">
				<section id="intro" class="main style1 dark fullscreen">
				<div class="content container">
					<header>
						<h2>Ambition. Creation. Conviction.</h2>
					</header>
					
					<footer>
						<a href="#about" class="button style2 down">More</a>
					</footer>
				</div>
				</section>
			</section>

		<!-- About -->
			<section id="about" class="main style1 dark fullscreen">
				<div class="content container">
					<header>
						<h2>About Us</h2>
					</header>
					<strong><p>We are an artist management agency that brands artists and takes under the wing the task of getting them what they deserve.</p><p>Be it management of bookings, dealing with the press, or ensuring social media presence: we at Spectal thrive to be the ultimate support structure of our artists in the industry they belong to.</p><p>If you want to boost your career with just the right amount of exposure, you've got to be a part of our Spectrum of Talent. Allow us to show how we can serve you.</p></strong>
				</div>
			</section>

		<section id="services" class="main style1 dark fullscreen">
			<h2>Services</h2>
			<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2 style="font-size: 1.5em;">Talent Representation</h2>

					<p>We manage a diversified pool of talent to act as the perfect guiding agent for artists. From running shows to ensuring media coverage across various platforms, Spectal, as an artist management firm, makes itself responsible for the sound growth of the artists’ career.</p>
					<!--<div class="da-img"><img src="images/2.png" alt="image01" /></div>-->
				</div>
				<div class="da-slide">
					<h2 style="font-size: 1.2em;">Brand Association and Integration</h2>
					<p>Our understanding of a varied set of clientele provides us with a unique ability to associate with brands - ones that aspire to hit a certain audience. Through orchestrating befitting relations, we give them the right platforms, ranging from festivals to clubs and closed performances. Not only do we create such associations, we curate them to expand opportunities and explore new avenues.</p>
				</div>
				<nav class="da-arrows">
					<span class="da-arrows-prev" id="services-prev"></span>
					<span class="da-arrows-next" id="services-next"></span>
				</nav>
			</div>
			</section>

			<!-- Two -->
			<section id="artists" class="main style1 dark fullscreen">
				<h2>Artists</h2>
				<div id="da-slider2" class="da-slider content container">
					<div class="da-slide">
						<h2 style="font-size: 1.5em;">The Local Train</h2>
						<p>The Local Train is redefining the genre of Hindi Rock with their edgy videos and contagious tracks. The band's first album Aaalas ka Pedh, released in fall 2015 became the highest selling independent album of the year. In the last season, the band catered to a strong demand of 50+ shows, at some of the most prestigious stages of the country.With approximately 2.5 million views (and still going strong) on YouTube, the band is currently working on their second album.</p>
					</div>
					<!--Uncomment here to add 2nd artist (remove this line)
					<div class="da-slide">
						<h2>Artist 2</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					
					<nav class="da-arrows">
						<span class="da-arrows-prev" id="artist-prev"></span>
						<span class="da-arrows-next" id="artist-next"></span>
					</nav>
					and remove this line-->
				</div>
			</section>

		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content container">
					<header>
						<h2>Gallery</h2>
						<!--<p>This is another way I came up with. The large images auto resize to fit in the screen when clicked, so it'll be easily viewed on any device. We can also go back to the horizontal scrolling gallery if there are a lot of images.</p>-->
					</header>

					<!-- Lightbox Gallery  -->
						<div class="container 75% gallery">
							<div class="row 0% images">
								<div class="4u 12u(mobile)"><a href="images/fulls/01.jpg" class="image fit from-left"><img src="images/thumbs/01.jpg" title="Reverberate." alt="" /></a></div>
								<div class="4u 12u(mobile)"><a href="images/fulls/02.jpg" class="image fit from-right"><img src="images/thumbs/02.jpg" title="Illuminate." alt="" /></a></div>
								<div class="4u 12u(mobile)"><a href="images/fulls/03.jpg" class="image fit from-left"><img src="images/thumbs/03.jpg" title="Lights. Stage. Magic." alt="" /></a></div>
							</div>
							<div class="row 0% images">
								
								<div class="4u 12u(mobile)"><a href="images/fulls/04.jpg" class="image fit from-right"><img src="images/thumbs/04.jpg" title="Reds, blues and other musical hues." alt="" /></a></div>
								<div class="4u 12u(mobile)"><a href="images/fulls/05.jpg" class="image fit from-left"><img src="images/thumbs/05.jpg" title="Immersion." alt="" /></a></div>
								<div class="4u 12u(mobile)"><a href="images/fulls/06.jpg" class="image fit from-right"><img src="images/thumbs/06.jpg" title="Levitate." alt="" /></a></div>
							</div>
						</div>

				</div>
			</section>

			


		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content container">
					<header>
						<h2>
						<?php 
							if($flag==1) 
								echo "Your message has been sent.";
							
							else
								echo "Say Hello.";
						?>
						</h2>
					</header>
					<div class="box container 75%" id="formscroll">

					<!-- Contact Form -->
							<form method="post" action="index.php#contact" >
								<div class="row 50%">
									<div class="6u 12u(mobile)"><input type="text" name="name" placeholder="Name" required /></div>
									<div class="6u 12u(mobile)"><input type="email" name="email" placeholder="Email" required /></div>
								</div>
								<div class="row 50%">
									<div class="12u"><textarea name="msg" placeholder="Message" rows="3" required></textarea></div>
								</div>
								<div class="row">
									<div class="12u">
										<ul class="actions">
											<li><input type="submit" value="Send Message" name="submit" /></li>
										</ul>
									</div>
								</div>
							</form>

					</div>
				</div>
</section>
<!-- Footer -->
			<footer id="footer">

				<!-- Icons -->
					<ul class="actions">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/Spectal-Management-1477596392547676/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-youtube"><span class="label">Youtube</span></a></li>
					</ul>

				<!-- Menu -->
					<ul class="menu">
						<li>&copy; Spectal Talent Management</li><li style="font-size: 0.6em;">Developer: <a href="http://abhinavagrawal.in">Abhinav Agrawal</a></li>
					</ul>

			</footer>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/vegas.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script type="text/javascript" src="assets/js/jquery.cslider.js"></script>
			<script type="text/javascript">
				$("#vegass").vegas({
					delay: 5000,
				    timer: false,
				    shuffle: true,
				    transition: 'zoomOut',
				    transitionDuration: 1000,
				    slides: [
				        { src: "images/home1.jpg" },
				        { src: "images/home2.jpg" },
				        { src: "images/home3.jpg" },
				        { src: "images/home4.jpg" },
				        { src: "images/home5.jpg" }
				    ]
				});
			</script>
			<script type="text/javascript">
				$(function() {
				
					$('#da-slider').cslider();
					
				});
				$(function() {
				
					$('#da-slider2').cslider();
					
				});
			</script>
			<script>
				imgarr=['images/artist1.jpg'];
				i=0;

				$("#artist-prev").click(function(){ 
					if(i==0)
						i=imgarr.length;
					i--;
					$("#artists").css('background-image', 'url("'+imgarr[i]+'")');
				});
				$("#artist-next").click(function(){ 
					i++;
					if(i==imgarr.length)
						i=0;
					$("#artists").css('background-image', 'url("'+imgarr[i]+'")');
				});
			</script>
			<script>
				servarr=['images/service1.jpg','images/service2.jpg'];
				j=0;

				$("#services-prev").click(function(){ 
					if(j==0)
						j=servarr.length;
					j--;
					$("#services").css('background-image', 'url("'+servarr[j]+'")');
				});
				$("#services-next").click(function(){ 
					j++;
					if(j==servarr.length)
						j=0;
					$("#services").css('background-image', 'url("'+servarr[j]+'")');
				});
			</script>

			<script type="text/javascript">
				$(function(){

			        $("#logo").mouseenter(function() {
			             	$("#logo").css({
			             	                transition : 'color 1s ease-in-out',
			             	                "color": "green"
			             	            });
			             });

			        $("#logo").mouseout(function() {
			             	$("#logo").css({
			             	                transition : 'color 1s ease-in-out',
			             	                "color": "red"
			             	            });  
			            });

			    });
			</script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>

