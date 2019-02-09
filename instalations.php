<?php
/*
Template Name: installations
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
      <div class="col-6">
        <h2>Instalaciones</h2>
        <p>Conócenos</p>
        <ul>
          <li>Instalaciones y automatizaciones de audio y video profesional.  </li>
          <li>Servicios integrales.  </li>
          <li>La mejor y más alta tecnología en equipos de audio y video profesional.  </li>
          <li>Proyecto “llave en mano”.  </li>
          <li>Instalaciones dentro y fuera de la República mexicana.</li>
          <li>Magnum cuenta con años de experiencia en el diseño e instalación de dichas soluciones y con personal altamente capacitado y especializado. </li>
        </ul><a class="btn-default" href="contact.html">Contactar</a>
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
 -->

<?php get_footer(); ?>
