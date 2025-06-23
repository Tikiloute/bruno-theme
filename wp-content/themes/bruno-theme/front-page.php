<?php get_header(); ?>

<div class="homepage-content content-wrapper bordered">

    <section class="hero">
        <div class="hero-inner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/face.jpg" alt="Bruno Etcheverry" class="hero-photo">
            <h1>Bruno Etcheverry</h1>
            <p>Conseiller immobilier indépendant affilié IAD France</p>
        </div>
    </section>

  <?php
    while (have_posts()) : the_post();
      the_content(); // Elementor injectera ici ton contenu personnalisé
    endwhile;
  ?>
</div>

<?php get_footer(); ?>
