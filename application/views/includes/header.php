<?php echo doctype('html5'); ?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $page_title; ?></title>
		<?php echo meta('viewport', 'width=device-width, initial-scale=1.0'); ?>
		<?php echo meta('description', ''); ?>
		<?php echo meta('author', ''); ?>
		<?php echo link_tag('assets/css/bootstrap.css'); ?>
		<?php echo link_tag('assets/css/app.css'); ?>
		<?php echo link_tag('assets/css/bootstrap-responsive.css'); ?>
		<?php if(isset($css_file)) { echo link_tag('assets/css/' . $css_file . '.css'); } ?>
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?php
			$link = array(	'rel' => 'shortcut icon',
							'href' => 'assets/img/favicon.ico');
			echo link_tag($link);
			$link = array(	'rel' => 'apple-touch-icon',
							'href' => 'assets/img/apple-touch-icon.png');
			echo link_tag($link);
			$link = array(	'rel' => 'apple-touch-icon',
							'href' => 'assets/img/apple-touch-icon-precomposed.png');
			echo link_tag($link);
			$link = array(	'rel' => 'apple-touch-icon',
							'href' => 'assets/img/apple-touch-icon-57x57-precomposed.png',
							'sizes' => '57x57');
			echo link_tag($link);
			$link = array(	'rel' => 'apple-touch-icon',
							'href' => 'assets/img/apple-touch-icon-72x72-precomposed.png',
							'sizes' => '72x72');
			echo link_tag($link);
			$link = array(	'rel' => 'apple-touch-icon',
							'href' => 'assets/img/apple-touch-icon-114x114-precomposed.png',
							'sizes' => '114x114');
			echo link_tag($link);
		?>
	</head>
	<body>
    <div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="<?php echo site_url(); ?>">CI Bootstrap</a>
					<div class="nav-collapse">
						<ul class="nav">
							<li class="active">
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#about">About</a>
							</li>
							<li>
								<a href="#contact">Contact</a>
							</li>
						</ul>
						<p class="navbar-text pull-right">
							Logged in as <a href="#">username</a>
						</p>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="content" id="main-content">