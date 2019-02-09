<?php
/*
Template Name: Shop
*/
get_header();


while (have_posts()):
  the_post();

  echo get_the_content();

endwhile;
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
