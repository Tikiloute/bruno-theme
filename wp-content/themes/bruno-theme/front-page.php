<?php get_header(); ?>

<div class="homepage-content">
  <?php

  if(!empty(get_the_content())){
        the_content();
  }

  ?>
</div>

<?php get_footer(); ?>
