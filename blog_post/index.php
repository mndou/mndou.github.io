<?php
	include 'information.php';
?>

<!DOCTYPE HTML>
<!--
	Strata by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Blog/Portfolio</title>
		<link rel="icon" type="image/x-icon" href="images/luffy s.png">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="#" class="image avatar"><img src="images/luffy s.png" alt=""  width="125" height="125"/></a>
					<h1><strong>Rodriguez Portfolio</strong>, for CCS 0043L<br />
					Powered by <a href="http://html5up.net">HTML 5 UP</a>.</h1>
				</div>
			</header>

		<!-- Main -->
			<div id="main">

				<!-- One -->
					<section id="one">
						<header class="major">
							<h2>Machine Problem Two | Portfolio</h2>
						</header>
						<p><strong>Jasper</strong> is a student who loves anime. Passionate about anime, anime and anime. 
							</br>Provided in this website are the details of the student and some specific information about 
							</br>the individual for the purpose of presentation.
							</br>Contents are filled using PHP arrays.
						</p>
					</section>

				<!-- Two -->
					<section id="two">
						<h2>Education and Technical Skills</h2>
						<div class="row">
							<?php
								$j=0;
								for ($i=0; $i<6; $i++) {
										echo '<article class="col-6 col-12-xsmall work-item">';
										echo '<a href="'.$blog_data[$i][$j+2].'"class="image fit thumb"><img src="'.$blog_data[$i][$j+2].'"alt="" /></a>';
										echo '<h3>'.$blog_data[$i][$j].'</h3>';
										echo '<p>'.$blog_data[$i][$j+1].'</p>';																	
										echo '</article>';
								}
							?>														
						</div>																
					</section>				
		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="https://motherfuckingwebsite.com/" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://motherfuckingwebsite.com/" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="https://motherfuckingwebsite.com/" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="https://motherfuckingwebsite.com/" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; HTML 5 up</li>				
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>