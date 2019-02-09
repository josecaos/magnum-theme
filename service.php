<?php
/*
Template Name: Centro de Servicio
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
         <h2>CENTRO DE SERVICIO</h2>
         <p>Conócenos</p>
         <ul>
           <li>Centro de servicio técnico especializado en equipos de audio y video profesional, así como de las marcas y productos que representa Magnum.</li>
           <li>Centro de servicio autorizado de Yamaha Audio Profesional y Commercial Audio.</li>
           <li>Magnum cuenta con años de experiencia en el diagnóstico y reparación de equipos de audio y video profesional así como con personal altamente capacitado y especializado.</li>
         </ul><a class="btn-default" href="contact.html">Contactar</a>
       </div>
       <div class="col-6">
         <div class="carrousel">
           <img src="<?php echo get_template_directory_uri();?>/images/sections/service/magnum-centro-servicio-marcas_01.png" alt="">
           <img src="<?php echo get_template_directory_uri();?>/images/sections/service/magnum-centro-servicio-marcas_02.png" alt="">
           <img src="<?php echo get_template_directory_uri();?>/images/sections/service/magnum-centro-servicio-marcas_03.png" alt="">
           <img src="<?php echo get_template_directory_uri();?>/images/sections/service/magnum-centro-servicio-marcas_04.png" alt="">
           <img src="<?php echo get_template_directory_uri();?>/images/sections/service/magnum-centro-servicio-marcas_05.png" alt="">
           <img src="<?php echo get_template_directory_uri();?>/images/sections/service/magnum-centro-servicio-marcas_06.png" alt="">
         </div>
       </div>
     </div>
   </div>
 </section>
 -->



 <?php get_footer();
