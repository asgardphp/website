<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<?php $controller->getContainer()['html']->printTitle() ?>
		<?php $controller->getContainer()['html']->printDescription() ?>
		<?php $controller->getContainer()['html']->printKeywords() ?>
		<base href="<?php echo $controller->request->url->base() ?>" />
		<?php $controller->getContainer()['html']->printJSInclude() ?>
		<?php $controller->getContainer()['html']->printCSSInclude() ?>
		<?php $controller->getContainer()['html']->printJSCode() ?>
		<?php $controller->getContainer()['html']->printCSSCode() ?>
		<?php $controller->getContainer()['html']->printCode() ?>
		<link rel="icon" href="favicon.ico" />

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Libs CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css" media="screen">
		<link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css" media="screen">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" media="screen">
		<link rel="stylesheet" href="vendor/isotope/jquery.isotope.css" media="screen">
		<link rel="stylesheet" href="vendor/mediaelement/mediaelementplayer.css" media="screen">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">
		<link rel="stylesheet" href="css/theme-animate.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css" media="screen">
		<link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css" media="screen">

		<!-- Responsive CSS -->
		<link rel="stylesheet" href="css/theme-responsive.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Prettify CSS -->
		<link rel="stylesheet" href="css/prettify.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr.js"></script>

		<!--[if IE]>
			<link rel="stylesheet" href="css/ie.css">
		<![endif]-->

		<!--[if lte IE 8]>
			<script src="vendor/respond.js"></script>
		<![endif]-->

		<!-- Add Colorbox -->
		<link rel="stylesheet" href="vendor/colorbox/colorbox.css" type="text/css" media="screen" />
	</head>
	<body class="sticky-menu-active">
	<?php echo $content ?>
	</body>
</html>