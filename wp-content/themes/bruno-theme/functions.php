<?php
function bruno_theme_enqueue_scripts() {
    // style.css (obligatoire, WordPress l'utilise comme feuille de style principale)
    wp_enqueue_style('bruno-style', get_stylesheet_uri());

    // styles personnalisés dans assets/css/main.css
    wp_enqueue_style('bruno-main-style', get_template_directory_uri() . '/assets/css/main.css', [], '1.0');
}
add_action('wp_enqueue_scripts', 'bruno_theme_enqueue_scripts');
