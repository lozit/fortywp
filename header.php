<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Forty by HTML5 UP</title>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <!-- bloginfo('template_url') permet d'insérer le chemin vers le repertoire du template -->
        <!-- on peut utiliser aussi echo get_template_directory_uri(); -->
        <!-- on laisse ce css ici car il est à l'intérieur d'une balise noscript -->
		<noscript><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/noscript.css" /></noscript>
        <?php wp_head(); ?>
    </head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="index.html" class="logo"><strong>Forty</strong> <span>by HTML5 UP</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.html">Home</a></li>
							<li><a href="landing.html">Landing</a></li>
							<li><a href="generic.html">Generic</a></li>
							<li><a href="elements.html">Elements</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="#" class="button primary fit">Get Started</a></li>
							<li><a href="#" class="button fit">Log In</a></li>
						</ul>
					</nav>
