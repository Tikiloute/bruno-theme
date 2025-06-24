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

add_shortcode('actus_recentes', function() {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 10,
    );
    $query = new WP_Query($args);
    ob_start();
    if ($query->have_posts()) {
        echo '<div class="actus-grid">';
        while ($query->have_posts()) {
            $query->the_post();
            echo '<div class="actus-item">';
            if (has_post_thumbnail()) {
                echo '<div class="actus-thumb"><a href="'.get_permalink().'">'.get_the_post_thumbnail(null, 'medium').'</a></div>';
            }
            echo '<h3 class="actus-title"><a href="'.get_permalink().'">'.get_the_title().'</a></h3>';
            echo '<div class="actus-excerpt">'.wp_trim_words(get_the_excerpt(), 20).'</div>';
            echo '<a class="actus-readmore" href="'.get_permalink().'">Lire la suite</a>';
            echo '</div>';
        }
        echo '</div>';
        wp_reset_postdata();
    } else {
        echo '<p>Aucune actualité pour le moment.</p>';
    }
    return ob_get_clean();
});

// Active les images mises en avant pour les articles
add_theme_support('post-thumbnails');
