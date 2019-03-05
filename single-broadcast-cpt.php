<?php
get_header();
?>

<section class="detail-product">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <?php
        while (have_posts()):
          the_post();

          echo the_content();
          ?>

        <?php endwhile; ?>
        <?php
        if (get_locale() == 'es_MX'):
          ?>
          <a class="btn-default" href="<?php echo get_page_link(49) ?>">Contactar</a>
          <?php
          elseif (get_locale() == 'en_US'):
            ?>
            <a class="btn-default" href="<?php echo get_page_link(77) ?>">Contact us</a>
          <?php endif; ?>

        </br>
          <div class="boton-regresa col-12">
            <a href="" onclick="regresa()"><< Regresa a los productos</a>
          </div>
        </div>

        <div class="col-6">
          <img src="<?php echo get_the_post_thumbnail_url();?>">
        </div>

      </div>
    </div>
  </section>




  <?php get_footer(); ?>
