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

// Création de la configuration pour choisir une couleur de fond du header
function cd_customizer_settings( $wp_customize ) {
    // La section c'est le premier niveau (le premier lien cliquable)
    // 'couleurs' est l'identifiant de la section
    $wp_customize->add_section( 'couleurs' , array(
        // Le nom de la section
        'title'      => 'Couleurs',
        // la priorité permet de classer les sections.
        // Plus le chiffre est petit, plus la section est affiché au début
        'priority'   => 30,
    ) );
    // On crée un setting, c'est à dire quelque chose qui est réglable
    // ici, c'est un reglage de couleur ('background_color)
    $wp_customize->add_setting( 'background_color' , array(
        // valeur par defaut
        'default'     => '#2a2f4a',
        // pour dire de rafraichir la page une fois la couleur selectionnée
        'transport'   => 'refresh',
    ) );
    // On fait maintenant le lien entre le réglage et la section
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
        // le texte qui est affiché avant le réglage
        'label'        => 'Couleur de fond du header',
        // la section
        'section'    => 'couleurs',
        // le réglage
        'settings'   => 'background_color',
    ) ) );
}
add_action( 'customize_register', 'cd_customizer_settings' );

// La valeur de couleur que l'on a réglée va être injectée dans la page HTLM dans une balise <style>
function cd_customizer_css(){
    // Le code html que l'on met dans le header :
    ?>
         <style type="text/css">
             #header { background: #<?php echo get_theme_mod('background_color', '#43C6E4'); ?> !important; }
         </style>
    <?php
}
add_action( 'wp_head', 'cd_customizer_css');