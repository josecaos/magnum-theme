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

        <?php endwhile;


        if (get_locale() == 'es_MX'):
          $link_back = "<< Regresa a los productos";
          ?>
          <a class="btn-default" href="<?php echo get_page_link(49) ?>">Contactar</a>
          <?php
          elseif (get_locale() == 'en_US'):
            $link_back = "<< Back to Products";
            ?>
            <a class="btn-default" href="<?php echo get_page_link(77) ?>">Contact us</a>
          <?php endif; ?>

        </br>
          <div class="boton-regresa col-12">
            <a onclick="regresa()"><?php echo $link_back; ?> </a>
          </div>
        </div>

        <div class="col-6">
          <img src="<?php echo get_the_post_thumbnail_url();?>">
        </div>

      </div>
    </div>
  </section>




  <?php get_footer(); ?>
