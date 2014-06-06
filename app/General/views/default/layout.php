
		<div class="body">
			<header id="header">
				<div class="container">
					<h1 class="logo logo-sticky-active">
						<a href="">
							<img alt="Porto" width="111" height="54" data-sticky-width="82" data-sticky-height="40" src="img/logo.png" style="display: inline-block; width: 84px; height: 54px; top: 28px;">
							<span style="display: inline-block; top: 30px; position: relative; left: 10px;">Asgard</span>
						</a>
					</h1>
					<!-- <div class="search">
						<form id="searchForm" action="page-search-results.html" method="get">
							<div class="input-group">
								<input type="text" class="form-control search" name="q" id="q" placeholder="Search...">
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="icon icon-search"></i></button>
								</span>
							</div>
						</form>
					</div> -->
					<!-- <nav>
						<ul class="nav nav-pills nav-top">
							<li>
								<a href="about-us.html"><i class="icon icon-angle-right"></i>About Us</a>
							</li>
							<li>
								<a href="contact-us.html"><i class="icon icon-angle-right"></i>Contact Us</a>
							</li>
							<li class="phone">
								<span><i class="icon icon-phone"></i>(123) 456-7890</span>
							</li>
						</ul>
					</nav> -->
					<button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
						<i class="icon icon-bars"></i>
					</button>
				</div>
				<div class="navbar-collapse nav-main-collapse collapse">
					<div class="container">
						<!-- <ul class="social-icons">
							<li class="facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook">Facebook</a></li>
							<li class="twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter">Twitter</a></li>
							<li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin">Linkedin</a></li>
						</ul> -->
						<nav class="nav-main mega-menu">
							<ul class="nav nav-pills nav-main" id="mainMenu">
								<li>
									<a href="">Home</a>
								</li>
								<li>
									<a href="doc/quickstart">Quickstart</a>
								</li>
								<li class="dropdown">
									<a class="dropdown-toggle" href="#">
										Documentation
										<i class="icon icon-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li><a href="about-us.html">..</a></li>
										<li><a href="about-us.html">..</a></li>
										<li><a href="about-us.html">..</a></li	>
									</ul>
								</li>
								<li>
									<a href="download">Download</a>
								</li>
								<li>
									<a href="about">About</a>
								</li>
								<li>
									<a href="contact">Contact</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>

			<div role="main" class="main">
	<?php echo $content ?>
			</div>

			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Get in Touch</span>
						</div>
						<!-- <div class="col-md-3">
							<div class="newsletter">
								<h4>Newsletter</h4>
								<p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
			
								<div class="alert alert-success hidden" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>
			
								<div class="alert alert-danger hidden" id="newsletterError"></div>
			
								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
									<div class="input-group">
										<input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit">Go!</button>
										</span>
									</div>
								</form>
							</div>
						</div> -->
						<div class="col-md-3">
							<h4>Latest Tweet</h4>
							<div id="tweet" class="twitter" data-account-id="">
								<p>Please wait...</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-details">
								<h4>Contact</h4>
								<ul class="contact">
									<!-- <li><p><i class="icon icon-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</p></li>
									<li><p><i class="icon icon-phone"></i> <strong>Phone:</strong> (123) 456-7890</p></li> -->
									<li><p><i class="icon icon-envelope"></i> <strong>Email:</strong> <a href="mailto:michel_AT_hognerud">michel_AT_hognerud.net</a></p></li>
								</ul>
							</div>
						</div>
						<!-- <div class="col-md-2">
							<h4>Follow Asgard</h4>
							<div class="social-icons">
								<ul class="social-icons">
									<li class="twitter"><a href="http://www.twitter.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Twitter">Twitter</a></li>
									<li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Linkedin">Linkedin</a></li>
								</ul>
							</div>
						</div> -->
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<p>© Asgard Copyright 2014. All Rights Reserved.</p>
							</div>
							<div class="col-md-4">
								<nav id="sub-menu">
									<ul>
										<!-- <li><a href="page-faq.html">FAQ's</a></li> -->
										<!-- <li><a href="sitemap.html">Sitemap</a></li> -->
										<li><a href="contact-us.html">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Libs -->
		<script src="vendor/jquery.js"></script>
		<script src="vendor/jquery.appear.js"></script>
		<script src="vendor/jquery.easing.js"></script>
		<script src="vendor/jquery.cookie.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.js"></script>
		<script src="vendor/jquery.validate.js"></script>
		<script src="vendor/jquery.stellar.js"></script>
		<script src="vendor/jquery.knob.js"></script>
		<script src="vendor/jquery.gmap.js"></script>
		<script src="vendor/twitterjs/twitter.js"></script>
		<script src="vendor/isotope/jquery.isotope.js"></script>
		<script src="vendor/owl-carousel/owl.carousel.js"></script>
		<script src="vendor/jflickrfeed/jflickrfeed.js"></script>
		<script src="vendor/magnific-popup/magnific-popup.js"></script>
		<script src="vendor/mediaelement/mediaelement-and-player.js"></script>

		<script type="text/javascript" src="vendor/colorbox/jquery.colorbox-min.js"></script>
		
		<!-- Home Page JS -->
		<script src="vendor/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.js"></script>
		<script src="vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
		<script src="js/views/view.home.js"></script>
		
		<!-- Theme Initializer -->
		<script src="js/theme.plugins.js"></script>
		<script src="js/theme.js"></script>
		
		<!-- Custom JS -->
		<script src="js/custom.js"></script>

		<!-- PrettyPrint JS -->
		<script src="js/prettify/run_prettify.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script type="text/javascript">
		
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-12345678-1']);
			_gaq.push(['_trackPageview']);
		
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		
		</script>
		 -->