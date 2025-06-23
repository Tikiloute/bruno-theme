<?php
function bruno_theme_setup() {
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'bruno-theme'),
    ));
}
add_action('after_setup_theme', 'bruno_theme_setup');

function bruno_theme_enqueue_assets() {
    // style.css à la racine du thème (obligatoire pour WP)
    wp_enqueue_style('bruno-style', get_stylesheet_uri());

    // ton vrai style dans /assets/css/main.css
    wp_enqueue_style('bruno-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');

    // script JS menu burger
    wp_enqueue_script('bruno-menu-toggle', get_template_directory_uri() . '/assets/js/menu-toggle.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'bruno_theme_enqueue_assets');
