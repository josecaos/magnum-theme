<?php
/*
Template Name: installations
*/

get_header();

?>

<section class="detail-product">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <?php
        while (have_posts()):
          the_post();

          echo wpautop(get_the_content());

        endwhile;
        ?>
        <!-- <h2>Instalaciones</h2>
        <p>Conócenos</p>
        <ul>
        <li>Instalaciones y automatizaciones de audio y video profesional.  </li>
        <li>Servicios integrales.  </li>
        <li>La mejor y más alta tecnología en equipos de audio y video profesional.  </li>
        <li>Proyecto “llave en mano”.  </li>
        <li>Instalaciones dentro y fuera de la República mexicana.</li>
        <li>Magnum cuenta con años de experiencia en el diseño e instalación de dichas soluciones y con personal altamente capacitado y especializado. </li>
      </ul> -->
      <?php
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
          <img src="<?php echo get_template_directory_uri(); ?>/images/sections/instalations/magnum-instalaciones-01.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sections/instalations/magnum-instalaciones-02.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sections/instalations/magnum-instalaciones-03.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sections/instalations/magnum-instalaciones-04.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sections/instalations/magnum-instalaciones-05.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sections/instalations/magnum-instalaciones-06.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
