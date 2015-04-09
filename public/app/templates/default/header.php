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
			helpers\url::template_path() . 'css/style.css',
		))
	?>


</head>
<body>

		<nav class="navbar navbar-fixed-top" role="navigation" id="nav">
			<div class="container">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navBarCollapse">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Suit Swap</a>
				</div>
			</div>
		</nav>

