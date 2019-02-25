<?php
/*
Template Name: Shop
*/
get_header();


while (have_posts()):
  the_post();

  echo get_the_content();

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

    <!--
    <section class="detail-product">
    <div class="container">
    <div class="row">
    <div class="col-12"></div>
  </div>
  <div class="row">
  <div class="col-6 center">
  <h2>MAGNUM SHOP</h2>
  <h1>PRÓXIMAMENTE</h1>
  <h3>Adquiere productos de audio y video profesional</h3><a class="btn-default" href="contact.html">Contactar</a>
</div>
</div>
</div>
</section>
-->
<?php get_footer(); ?>
