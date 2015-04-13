<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>

	<!-- Site meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Matt Trask & Justin Rector">
	<title><?php echo $data['title'].' - '.SITETITLE; //SITETITLE defined in app/core/config.php ?></title>

	<!-- CSS -->
	<?php
		helpers\assets::css(array(
			'//cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css',
			'//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
			helpers\url::template_path() . 'css/style.css'
		));
	?>


</head>
<body id="body">

	<nav id="nav">
		<div class="nav-wrapper">
			<a href="home" class="brand-logo">SuitSwap</a>
			<a href="#" class="button-collapse" data-activates="mobile-demo"><i class="mdi-navigation-menu"></i></a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="about">About Us</a></li>
				<li><a href="services">Services</a></li>
				<li><a href="donate">Donate</a></li>
				<li><a href="contact">Contact Us</a></li>
			</ul>
		</div>
	</nav>
