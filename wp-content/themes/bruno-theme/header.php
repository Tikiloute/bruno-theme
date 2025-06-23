<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php wp_title('|', true, 'right'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="site-logo">
    <a href="<?php echo home_url(); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-blanc.png" alt="Logo">
    </a>
  </div>
  
  <nav class="site-nav" role="navigation" aria-label="Menu principal">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">☰</button>
    <?php wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_id'        => 'primary-menu',
        'menu_class'     => 'menu',
        'container'      => false,
    )); ?>
  </nav>
</header>
