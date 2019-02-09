<?php
/*
Template Name: Magnum Live
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
       <div class="col-12">
         <h2>Magnum Live</h2>
         <p>Transmisión en vivo</p>
       </div>
     </div>
     <div class="row">
       <div class="col-7 center">
         <iframe allowfullscreen src="//player.ooyala.com/static/v4/stable/4.16.8/skin-plugin/iframe.html?ec=EzbG5hNzE6cKEayWpLu82nNPgds-DkvC&amp;pbid=a834f509d1554fadb7a44c4ed7f81dc4&amp;pcode=53MWkyOo5FSWOtoaK67vo_zmd6kS"></iframe>
       </div>
     </div>
   </div>
 </section>
 -->


<?php get_footer(); ?>
