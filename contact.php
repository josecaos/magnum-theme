<?php
/*
Template Name: Contacto
*/

get_header();

?>
<section>
  <div class="container">
    <div class="row contact-form">
      <div class="col-6">

        <?php
        while (have_posts()):
          the_post();

          echo wpautop(get_the_content());

        endwhile;
        ?>

        <div class="">

          <?php
          if (get_locale() == 'es_MX'):

            echo do_shortcode('[contact-form-7 id="51" title="Magnum Form"]');

            elseif (get_locale() == 'en_US'):

              echo do_shortcode('[contact-form-7 id="103" title="Magnum Form English"]');

            endif;
            ?>

          </div>

        </div>

        <div class="col-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30112.76642495479!2d-99.182539!3d19.365004000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xef815053a51058ad!2sMAGNUM+S.D.!5e0!3m2!1ses!2smx!4v1512859667053" style="border:0;" allowfullscreen="" alt="" width="" height="445" frameborder="0"></iframe>
        </div>

      </div>
    </div>
  </div>
</section>
<!--
<section>
<div class="container">
<div class="row contact-form">
<div class="col-6">
<h2>CONTACTO</h2>
<p>Déjanos tus datos para contactarnos contigo</p>
<div class="">
<?php //echo do_shortcode('[contact-form-7 id="51" title="Magnum Form"]'); ?>
</div>
<div class="col-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30112.76642495479!2d-99.182539!3d19.365004000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xef815053a51058ad!2sMAGNUM+S.D.!5e0!3m2!1ses!2smx!4v1512859667053" width="" height="445" frameborder="0" style="border:0;" allowfullscreen="" alt=""></iframe>
</div>
</div>
</div>
</section>
-->



<?php get_footer(); ?>
