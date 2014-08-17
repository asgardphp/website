
		<div class="body">
			<header id="header">
				<div class="container">
					<h1 class="logo logo-sticky-active">
						<a href="">
							<img alt="Porto" width="72" height="54" data-sticky-width="82" data-sticky-height="40" src="img/logo.png" style="display: inline-block; top: 28px;">
							<span style="display: inline-block; top: 30px; position: relative; left: 10px;">Asgard</span>
						</a>
					</h1>
					<button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
						<i class="icon icon-bars"></i>
					</button>
				</div>
				<div class="navbar-collapse nav-main-collapse collapse">
					<div class="container">
						<nav class="nav-main mega-menu">
							<ul class="nav nav-pills nav-main" id="mainMenu">
								<li>
									<a href="">Home</a>
								</li>
								<li>
									<a href="docs/quickstart">Quickstart</a>
								</li>
								<li class="dropdown">
									<a class="dropdown-toggle" href="docs">
										Documentation
										<i class="icon icon-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										<li class="dropdown-submenu">
											<a href="docs/introduction">Presentation</a>
											<ul class="dropdown-menu">
												<li><a href="docs/introduction#introduction">Introduction</a></li>
												<li><a href="docs/introduction#requirements">Requirements</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="docs/framework">Framework</a>
											<ul class="dropdown-menu">
												<li><a href="docs/framework">Project</a></li>
												<li><a href="docs/framework-modules">Modules</a></li>
												<li><a href="docs/framework-commands">Commands</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="docs/">HTTP</a>
											<ul class="dropdown-menu">
												<li><a href="docs/http-requestresponse">Request &amp; Response</a></li>
												<li><a href="docs/http-controllers">Controllers</a></li>
												<li><a href="docs/http-utils">Utils</a></li>
												<li><a href="docs/http-commands">Commands</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="docs/">ORM</a>
											<ul class="dropdown-menu">
												<li><a href="docs/orm-relations">Relations</a></li>
												<li><a href="docs/orm-datamapper">DataMapper</a></li>
												<li><a href="docs/orm-ormbehavior">ORM Behavior</a></li>
												<li><a href="docs/orm-commands">Commands</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="docs/">DB</a>
											<ul class="dropdown-menu">
												<li><a href="docs/db-db">Database</a></li>
												<li><a href="docs/db-dal">DAL</a></li>
												<li><a href="docs/db-schema">Schema</a></li>
												<li><a href="docs/db-commands">Commands</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="docs/">More</a>
											<ul class="dropdown-menu">
												<li><a href="docs/admin">Admin</a></li>
												<li><a href="docs/autoloader">Autoloader</a></li>
												<li><a href="docs/bag">Bag</a></li>
												<li><a href="docs/cache">Cache</a></li>
												<li><a href="docs/config">Config</a></li>
												<li><a href="docs/container">Container</a></li>
												<li><a href="docs/data">Data</a></li>
												<li><a href="docs/email">Email</a></li>
												<li><a href="docs/entity">Entity</a></li>
												<li><a href="docs/entityform">Entity Form</a></li>
												<li><a href="docs/form">Form</a></li>
												<li><a href="docs/hook">Hook</a></li>
												<li><a href="docs/migration">Migration</a></li>
												<li><a href="docs/validation">Validation</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="download">Download</a>
								</li>
								<li>
									<a href="libraries">Libraries</a>
								</li>
								<li>
									<a href="about">About</a>
								</li>
								<li>
									<a href="community">Community</a>
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
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<p>© Asgard Copyright 2014. All Rights Reserved.</p>
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

		<!-- Google Analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-51732580-1', 'asgardphp.com');
		  ga('send', 'pageview');

		</script>