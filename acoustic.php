<?php
/*
Template Name: Acondicionamiento Acustico
*/

get_header();
?>


<section class="detail-product">
  <div class="container">
    <div class="row">

      <div class="col-6">
        <?php
        while (have_posts()): the_post();

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
      <div class="col-6">
        <div class="carrousel">
          <img src="<?php echo get_template_directory_uri();?>/images/sections/acoustic/magnum-acoustic-01.png" alt="">
          <img src="<?php echo get_template_directory_uri();?>/images/sections/acoustic/magnum-acoustic-02.png" alt="">
          <img src="<?php echo get_template_directory_uri();?>/images/sections/acoustic/magnum-acoustic-03.png" alt="">
          <img src="<?php echo get_template_directory_uri();?>/images/sections/acoustic/magnum-acoustic-04.png" alt="">
          <img src="<?php echo get_template_directory_uri();?>/images/sections/acoustic/magnum-acoustic-05.png" alt="">
          <img src="<?php echo get_template_directory_uri();?>/images/sections/acoustic/magnum-acoustic-06.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>


<?php

get_footer();
