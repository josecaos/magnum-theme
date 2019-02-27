<?php
/*
Template Name: Shop
*/
get_header();

?>

<section class="detail-product">
  <div class="container">
    <div class="row">
      <div class="col-12"></div>
    </div>
    <div class="row">
      <div class="col-6 center">
        <?php

        while (have_posts()):
          the_post();

          echo wpautop(get_the_content());

        endwhile;

        if (get_locale() == 'es_MX'):
          ?>
          <a class="btn-default" href="<?php echo get_page_link(49); ?>  ">Contactar</a>
          <?php
          elseif (get_locale() == 'en_US'):
            ?>
            <a class="btn-default" href="<?php echo get_page_link(77); ?>  ">Contact</a>
            <?php
          endif;
          ?>

        </div>
      </div>
    </div>
  </section>
  
  <?php get_footer(); ?>
