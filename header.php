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

					<?php
						// On insere un menu à l'aide de wp_nav_menu
						wp_nav_menu ( array (
						// ce menu correspond à l'emplacement 'menu-principal'
						// défini dans functions.php
						'theme_location' => 'menu-principal' , 
						// Le type de container global
						// ici on veut que le menu soit dans une nav
						'container'       => 'nav',
						// La class du conteneur global, ici on laisse vide
						'container_class' => '',
						// l'ID du conteneur global, ici on met 'menu'
						'container_id'    => 'menu',
						// la classe du menu (qui est un 'ul')
						'menu_class'      => 'links',
						// l'ID du menu
						'menu_id'         => '',
						// à l'interieur de chaque élément li, juste après le <li>
						'before'          => '',
						// à l'interieur de chaque élément li, juste avant le </li>
						'after'           => '',
						// à l'interieur de chaque élément a, juste après le <a href...>
						'link_before'     => '',
						// à l'interieur de chaque élément a, juste avant le </a>
						'link_after'      => '',
						//niveau de profondeur d’affichage. 1 n’affiche que le 1er niveau. 
						// 0 affiche tout. -1 permet de tout afficher sur un seul niveau.
						'depth'           => 0
						) );
					?>
