<?php
// Insertion des feuilles de style et des scripts
function custom_front_scripts() {
    // wp_enqueue_style permet de charger des fichiers css
    // il prend 5 arguments
    // le premier, c'est un nom unique (par exemple : 'layout')
    // le second, c'est le chemin vers le fichier
    // le troisième, c'est pour définir si cette feuille de style a des dépendances à d'autres feuilles.
    // Si c'est le cas, la feuille de style sera chargée après ses dépendances
    // le quatrième, c'est un numéro de version. 
    // Si on le change, les navigateurs rechargeront votre CSS (au lieu de prendre une version cache)
    // le cinquième permet de spécifier le media css de la feuille de style (ici : 'all')

    wp_enqueue_style( 'style', get_stylesheet_uri() ,array('main'),'1.0','all');
    // => charge le style.css qui est vide pour le moment, mais que l'on utilisera
    // si on a besoin de modifier du css
    // On charge le fichier après les autres
    // On remarque que l'on peut utiliser la fonction get_stylesheet_uri pour spécifier le chemin
    // L'utilisation du troisième argument permet de dire que cette feuille de style
    // doit être chargée après la feuille de style 'main'

    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css',false,'1.0','all');
    // => Charge le style /assets/css/main.css

   
    // wp_enqueue_script permet de charger des fichiers javascript
    // il prend 5 arguments
    // le premier, c'est un nom unique (par exemple : 'scrolly')
    // le second, c'est le chemin vers le fichier
    // le troisième, c'est pour définir des dépendances à d'autres scripts.
    // Si c'est le cas, le script sera chargée après ses dépendances
    // le quatrième, c'est un numéro de version. 
    // Si on le change, les navigateurs rechargeront votre script (au lieu de prendre une version cache)
    // le cinquième permet de spécifier le media css de la feuille de style (ici : 'all')
    wp_enqueue_script( 'monjquery', get_template_directory_uri() . '/assets/js/jquery.min.js', false, 1.0, true);
    wp_enqueue_script( 'scrolly', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js', 'monjquery', 1.0, true);
    wp_enqueue_script( 'scrollex', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js', 'monjquery', 1.0, true);
    wp_enqueue_script( 'browser', get_template_directory_uri() . '/assets/js/browser.min.js', false, 1.0, true);
    wp_enqueue_script( 'breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js', false, 1.0, true);
    wp_enqueue_script( 'util', get_template_directory_uri() . '/assets/js/util.js', false, 1.0, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', false, 1.0, true);
}
add_action('wp_enqueue_scripts', 'custom_front_scripts' );

// Déclaration des zones de menu
function register_my_menu() {
    register_nav_menus(
        array(
        // à gauche, l'identifiant du menu
        // à droite le nom pour l'administration de wordpress
        'menu-principal' => __( 'Menu Principal' ),
        'menu-footer' => __( 'Menu Footer' ),
        )
        );
 }
 add_action( 'init', 'register_my_menu' );