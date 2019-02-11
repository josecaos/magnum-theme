<?php
/*
Template Name: Produccion y streaming*/

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

        <!-- <h2>PRODUCCIÓN Y STREAMING</h2>
        <p>Conócenos</p>
        <ul>
        <li>Servicios de producción y streaming integrales.</li>
        <li>Desde una cámara hasta un CCTV con 10 cámaras full HD.</li>
        <li>Transmisión simultánea a redes sociales y/o vía SDI para su ingesta a través de LiveU.</li>
        <li>Eventos deportivos, eventos sociales, eventos políticos y eventos culturales.</li>
        <li>Flexibilidad de horarios.</li>
        <li>La mejor y más alta tecnología en equipos de audio y video profesional.</li>
        <li>Magnum cuenta con años de experiencia en la producción y realización de eventos con personal altamente capacitado y especializado. </li>
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
        <img src="<?php echo get_template_directory_uri();?>/images/sections/streaming/magnum-streaming-1.png" alt="">
        <img src="<?php echo get_template_directory_uri();?>/images/sections/streaming/magnum-streaming-2.png" alt="">
        <img src="<?php echo get_template_directory_uri();?>/images/sections/streaming/magnum-streaming-3.png" alt="">
        <img src="<?php echo get_template_directory_uri();?>/images/sections/streaming/magnum-streaming-4.png" alt="">
        <img src="<?php echo get_template_directory_uri();?>/images/sections/streaming/magnum-streaming-5.png" alt="">
        <img src="<?php echo get_template_directory_uri();?>/images/sections/streaming/magnum-streaming-6.png" alt="">
      </div>
    </div>
  </div>
</div>
</section>




<?php get_footer(); ?>
