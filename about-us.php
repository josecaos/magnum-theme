<?php
/*
Template Name: About Us
*/

get_header();

?>

 <section class="our-brands">
   <div class="container">
     <div class="row">

<?php
while (have_posts()):
  the_post();

  echo wpautop(get_the_content());

endwhile;
 ?>
       <!--

       <h2>Nosotros</h2>
       <p>Conócenos</p>
       <div class="slider-container row slider-about-us">
         <div class="slider-titles col-3">
           <ul>
             <li class="active"><a href="">MAGNUM</a></li>
             <li><a href="">MISIÓN</a></li>
             <li><a href="">VISIÓN</a></li>
             <li><a href="">PROYECTOS</a></li>
           </ul>
         </div>
         <div class="slider-elements col-9">
           <div class="active">
             <p><strong>Magnum</strong> es una empresa Mexicana fundada en 1981, con mas de 30 años de experiencia en la implementación de soluciones integrales de audio y video profesional, transmisión y almacenamiento de contenido vía redes 3G/4G e internet, servicios de doblaje y grabación para los mercados broadcast, vivo, de post-producción, proveyendo soporte técnico a través de un centro de servicio autorizado de todas las marcas y productos que representa.</p>
             <p>Entre los mercados que <strong>Magnum</strong> atiende, actualmente, se encuentran:</p>
             <ul>
               <li>Compañías de televisión</li>
               <li>Compañías de radio</li>
               <li>Universidades</li>
               <li>Compañías generadoras de contenido y noticias</li>
               <li>Estudios de grabación y doblaje</li>
               <li>Compañías disqueras</li>
               <li>Compañías de post-producción de audio para video</li>
               <li>Agencias de publicidad digital</li>
               <li>Centros comerciales</li>
               <li>Centros de entretenimiento y re-creación</li>
               <li>Casinos</li>
               <li>Sector gobierno</li>
               <li>Sector seguridad</li>
             </ul>
           </div>
           <div>
             <p><strong>Proveer al mercado broadcast, vivo y de post-producción de México y el resto de América de la mejor y mas alta tecnología,</strong> junto con servicio y soporte técnico personal a todos sus productos y soluciones integrales; maximizando el valor de inversión de sus clientes para generar la cantidad correcta de ingresos que cumpla con las expectativas de sus inversionistas mientras provee la oportunidad a su capital humano de desarrollar y cumplir sus metas profesionales. Trabajando, siempre, bajo el marco de la Ley.</p>
           </div>
           <div>
             <p>Para 2020 <strong>Magnum será una empresa líder en integraciones de audio y video profesional en México</strong> con bases financieras solidas para ofrecer a sus clientes soluciones de la mas alta tecnología y calidad </p>
           </div>
           <div>
             <p>Conoce algunos de nuestros principales proyectos a lo largo de la historia de Magnum</p><br><strong>Olimpiadas</strong>
             <p>Renta y soporte en sitio de sistemas portátiles de transmisión de audio y video vía 3G/4G para la transmisión de contenido en tiempo real</p><strong>Milenio Televisión</strong>
             <p>Venta, instalación y puesta en marcha del equipo completo de audio y video profesional del canal, así como el acondicionamiento acústico de sus estudios.</p><strong>Play City</strong>
             <p>Venta, instalación y puesta en marcha de los de sistemas de audio y video de los salones.</p><strong>Wal-Mart</strong>
             <p>Venta, instalación y puesta en marcha de sistemas de video comercial en las tiendas departamentales.</p><strong>Foro TV</strong>
             <p>Venta, instalación y puesta en marcha del equipo completo de audio y video profesional del canal.</p><strong>Live-U</strong>
             <p>Puesta en marcha de la infraestructura de sistemas portátiles de transmisión de audio y video vía 3G/4G en México.</p><strong>Mundiales de football FIFA</strong>
             <p>Renta y soporte en sitio de sistemas portátiles de transmisión de audio y video vía 3G/ 4G para la transmisión de contenido en tiempo real.</p><strong>Instituto Mexicano de la Radio</strong>
             <p>Integración “Llave en mano” de una Unidad Móvil de transmisión y producción de radio.</p><strong>Producción y streaming</strong>
             <p>Renta de circuitos cerrados y transmisión en vivo por internet de eventos deportivos, políticos y culturales.</p>
           </div>
         </div>
       </div>
     -->
     </div>
   </div>
 </section>


 <?php get_footer(); ?>
