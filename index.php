<!DOCTYPE HTML>
<html>
	<head>
		<title>Ghena Elwefati's Portfolio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

		
		<style>
			#typed-text {
			  border-right: 0.08em solid white; /* Change cursor color to white */
			  white-space: nowrap;
			  overflow: hidden;
			  width: 15ch;
			  animation: typing 3s steps(40, end), blink-caret 0.75s step-end infinite;
			}
		  
			@keyframes typing {
			  from {
				width: 0;
			  }
			}
		  
			@keyframes blink-caret {
			  from, to {
				border-color: transparent;
			  }
			  50% {
				border-color: white; /* Change cursor color to white */
			  }
			}
		  </style>
		  

	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<!-- <span class="logo"><img src="images/mypic.jpg" alt="" width="100px"/></span> -->
						<h3>Hello! my name is</h3>
					
						<h1><span id="typed-text">Ghena Elwefati </span></h1>
						<p style="color:white;">Systems Science Master's graduate with Software Engineering Background</p>
						<p style="color:white;">
						G.wefati@gmail.com</p>
						<!-- <a href="www.linkedin.com/in/ghena-e-946079262" class="active" style="color:white;">@GhenaElwefati</a> -->
						<!-- <div>
							<a href="www.linkedin.com/in/ghena-e-946079262"  target="_blank" class="active" style="color:white;"></a>
							  <img src="images/linkedin-logo.png" alt="LinkedIn Logo" width="20" height="20">
							  GhenaElwefati
							
						  </div> -->

						<script>
						const textToType = "Ghena Elwefati";
						const typedTextElement = document.getElementById("typed-text");
						
						function typeText(text, element) {
						  let i = 0;
						  const typingInterval = setInterval(() => {
							element.textContent = text.slice(0, i);
							i++;
						
							if (i > text.length) {
							  clearInterval(typingInterval);
							}
						  }, 200); // Adjust typing speed here (milliseconds)
						}
						
						typeText(textToType, typedTextElement);
						</script>
						
					

					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro" class="active">About me</a></li>
							<li><a href="#second">Skills</a></li>

							<li><a href="#first">Projects</a></li>
							
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2 style="font-weight: 350;">About me...</h2>
										</header>
										<p style="text-align: justify; text-justify: inter-word;color:black;">
											I am a systems science and engineering master’s graduate, with experience in web development, strong background in programming using PHP, Java, JavaScript, HTML5, CSS3, and C. Developing responsive projects with Bootstrap framework and Bootstrap studio and the ability to manage and work with MySQL databases using phpMyAdmin. As well as writing SQL queries. I am proficient with G Suite, Microsoft Office Suite including Word, Outlook,
											Excel, and PowerPoint.</p>
										<!-- <ul class="actions">
											<li><a href="generic.html" class="button">Learn More</a></li>
										</ul> -->
									</div>
									<span class="image"><img src="images/mypic.jpg" alt="" /></span>
								</div>
							</section>

						<!-- Second Section -->
						<section id="second" class="main special">
							<header class="major">
								<h2 style="font-weight: 350;">Skills</h2>
								<!-- <p>Donec imperdiet consequat consequat. Suspendisse feugiat congue<br />
								posuere. Nulla massa urna, fermentum eget quam aliquet.</p> -->
							</header>
							<ul class="statistics">
								<li class="style1">
									<span> <img src="images/HTML5_badge.png" alt="HTML5 Logo" width="55" height="55"></span>
									<h3 style="color: black!important;">HTML5</h3>
								</li>
								<li class="style2">
									<span> <img src="images/css3_badge.png" alt="CSS3 Logo" width="55" height="55"></span>
									<h3 style="color: black!important;">CSS3</h3>

								</li>
								<li class="style3">
									<span> <img src="images/OIP.jpeg" alt="JS Logo" width="55" height="55"></span>
									<h3 style="color: black!important;">Javascript</h3>

								</li>
								<li class="style5">
									<span> <img src="images/bootstrap-logo-vector.svg" alt="Bootstrap Logo" width="55" height="55"></span>
									<h3 style="color: black!important;">Bootstrap</h3>

								</li> 
								<li class="style4">
									<span> <img src="images/R.png" alt="PHP Logo" width="55" height="55"></span>
									<h3 style="color: black!important;">PHP</h3>

								</li>
								
								<li class="style5">
									<span> <img src="images/sql.png" alt="SQL Logo" width="55" height="55"></span>
									<h3 style="color: black!important;">SQL</h3>

								</li>
								<li class="style5">
									<span> <img src="images/java.jpeg" alt="JAVA Logo" width="55" height="55"></span>
									<h3 style="color: black!important;">Java</h3>

								</li>
							</ul>
							<!-- <p class="content">Nam elementum nisl et mi a commodo porttitor. Morbi sit amet nisl eu arcu faucibus hendrerit vel a risus. Nam a orci mi, elementum ac arcu sit amet, fermentum pellentesque et purus. Integer maximus varius lorem, sed convallis diam accumsan sed. Etiam porttitor placerat sapien, sed eleifend a enim pulvinar faucibus semper quis ut arcu. Ut non nisl a mollis est efficitur vestibulum. Integer eget purus nec nulla mattis et accumsan ut magna libero. Morbi auctor iaculis porttitor. Sed ut magna ac risus et hendrerit scelerisque. Praesent eleifend lacus in lectus aliquam porta. Cras eu ornare dui curabitur lacinia.</p>
							<footer class="major">
								<ul class="actions special">
									<li><a href="generic.html" class="button">Learn More</a></li>
								</ul>
							</footer> -->
						</section>


						<!-- First Section -->
							<section id="first" class="main special">
								<header class="major">
									<h2 style="font-weight: 350;">Projects</h2>
								</header>
								<ul class="features">
									
									<li>
										<a href="Slides/index.php" style="text-decoration: none;" target="_blank"  id="imgLink">
										<!-- <span class="icon major style3" style="border-radius: 0%;"> -->
										<img src="images/slidesscreen.png" alt="PHP Logo"  height="200" id="projectsImg"></a>
										<h3><b>Slides</b></h3>
										<p style="text-align: justify;">
											Platform that offers some diverse services in the field of presentations ( PowerPoint )
											Helps you show your offer in the best way. Built using <b>HTML5, CSS3, JS, PHP, Bootstrap.</b>
										</p>
									</li> 
									<li>
									
										<!-- <span class="icon major style3" style="border-radius: 0%;"> -->
										<a href="FSEWebsite/indexen.php" style="text-decoration: none;" target="_blank" id="imgLink">
										<img src="images/fsescreen.png" alt="PHP Logo" height="200" id="projectsImg"></a>
										<h3><b>Fun Size English</b></h3>
										<p style="text-align: justify;">
											Website that deliver English language courses to teach basic communication skills to beginners and improve skills of those who have English language competences in different levels.
											Built using <b>HTML5, CSS3, JS, PHP, Bootstrap, and SQL</b> to store students information for courses registration.
											
										</p>
									</li>
									<!-- <li>
										<span class="icon major style5 fa-gem"></span>
										<h3>Dolor nullam</h3>
										<p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
									</li> -->
								</ul>
								<!-- <footer class="major">
									<ul class="actions special">
										<li><a href="generic.html" class="button">Learn More</a></li>
									</ul>
								</footer> -->
							</section>


						<!-- Get Started -->
							<!-- <section id="cta" class="main special">
								<header class="major">
									<h2>Congue imperdiet</h2>
									<p>Donec imperdiet consequat consequat. Suspendisse feugiat congue<br />
									posuere. Nulla massa urna, fermentum eget quam aliquet.</p>
								</header>
								<footer class="major">
									<ul class="actions special">
										<li><a href="generic.html" class="button primary">Get Started</a></li>
										<li><a href="generic.html" class="button">Learn More</a></li>
									</ul>
								</footer>
							</section> -->

					</div>

				<!-- Footer -->
					<footer id="footer">
						<!-- <section>
							<h2>Aliquam sed mauris</h2>
							<p>Sed lorem ipsum dolor sit amet et nullam consequat feugiat consequat magna adipiscing tempus etiam dolore veroeros. eget dapibus mauris. Cras aliquet, nisl ut viverra sollicitudin, ligula erat egestas velit, vitae tincidunt odio.</p>
							<ul class="actions">
								<li><a href="generic.html" class="button">Learn More</a></li>
							</ul>
						</section> -->
						<section>
							<h2>Contact me</h2>
							<dl class="alt">
								
								<dd style="color:white;"><a href="#">g.wefati@gmail.com</a></dd>
							</dl>
							<!-- <ul class="icons">
								<li><a href="#" class="icon brands fa-twitter alt"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands fa-facebook-f alt"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands fa-instagram alt"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands fa-github alt"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon brands fa-dribbble alt"><span class="label">Dribbble</span></a></li>
							</ul> -->
						</section>
						<!-- <p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p> -->
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
