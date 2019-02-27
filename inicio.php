
<section class="hm-landing">
  <?php
if (get_locale() == 'es_MX' ):
  $txt = "Nosotros";
   ?>
  <div class="container">
    <div id="inicio-nosotros">
      <div>
        <h1>
          <a href="<?php echo get_page_link(42);?>">
            <img src="<?php echo get_template_directory_uri();?>/images/sections/home/magnum-logo-circulo.png" alt="">
          </a>
          <a class="float-more" href="<?php echo get_page_link(42);?>">
            <img src="<?php echo get_template_directory_uri();?>/images/global/magnum-more.png" alt="">
          </a>
          <a class="index-about-text hide" href="<?php echo get_page_link(42);?>">
            <p class=""><?php echo $txt; ?></p>
          </a>
        </h1>
      </div>
    </div>
    <div>
      <div>
        <h2>
          <a href="<?php echo get_page_link(6);?>">Broadcast
          </a>
        </h2>
      </div>
      <img src="<?php echo get_template_directory_uri();?>/images/sections/home/magnum-broadcast.png" alt="">
    </div>
    <div>
      <div>
        <h2>
          <a href="<?php echo get_page_link(32);?>">En vivo</a>
        </h2>
      </div>
    </div>
    <div>
      <div>
        <h2>
          <a href="<?php echo get_page_link(37);?>">Instalaciones
          </a>
        </h2>
      </div>
    </div>
    <div>
      <div>
        <h2>
          <a href="<?php echo get_page_link(40);?>">Producción <br>& Streaming
          </a>
        </h2>
      </div>
      <img src="<?php echo get_template_directory_uri();?>/images/sections/home/magnum-produccion.png" alt="">
    </div>
    <div>
      <div>
        <h2>
          <a href="<?php echo get_page_link(47);?>">Centro de servicio
          </a>
        </h2>
      </div>
      <img src="<?php echo get_template_directory_uri();?>/images/sections/home/magnum-centro-de-servicio.png" alt="">
    </div>
    <div>
      <div>
        <h2>
          <a href="<?php echo get_page_link(34);?>">Tienda Magnum</a>
        </h2>
      </div>
    </div>
    <div>
      <div>
        <h2>
          <a href="<?php echo get_page_link(49);?>">Contacto
          </a>
        </h2>
      </div>
    </div>
    <div>
      <div>
        <h2>
          <a href="<?php echo get_page_link(34);?>">Tienda <br>Magnum
          </a>
        </h2>
      </div>
      <img src="<?php echo get_template_directory_uri();?>/images/sections/home/magnum-shop.png" alt="">
    </div>
    <div>
      <div>
        <h2>
          <a href="<?php echo get_page_link(37);?>">Instalaciones
          </a>
        </h2>
      </div>
      <img src="<?php echo get_template_directory_uri();?>/images/sections/home/magnum-shop.png" alt="">
    </div>
    <div>
      <div>
        <h2>
          <a href="<?php echo get_page_link(44);?>">Acondicionamiento<br>acústico
          </a>
        </h2>
      </div>
      <img src="<?php echo get_template_directory_uri();?>/images/sections/home/magnum-shop.png" alt="">
    </div>
  </div>

<?php
elseif (get_locale() == 'en_US'):
$txt = "About Us";
 ?>
 <div class="container">
   <div id="inicio-about">
     <div>
       <h1>
         <a href="<?php echo get_page_link(66);?>">
           <img src="<?php echo get_template_directory_uri();?>/images/sections/home/magnum-logo-circulo.png" alt="">
         </a>
         <a class="float-more" href="<?php echo get_page_link(66);?>">
           <img src="<?php echo get_template_directory_uri();?>/images/global/magnum-more.png" alt="">
         </a>
         <a class="index-about-text hide" href="<?php echo get_page_link(66);?>">
           <p class=""><?php echo $txt; ?></p>
         </a>
       </h1>
     </div>
   </div>

   <div>
     <div>
       <h2>
         <a href="<?php echo get_page_link(83);?>">Broadcast
         </a>
       </h2>
     </div>
     <img src="<?php echo get_template_directory_uri();?>/images/sections/home/magnum-broadcast.png" alt="">
   </div>
   <div>
     <div>
       <h2>
         <a href="<?php echo get_page_link(70);?>">Live</a>
       </h2>
     </div>
   </div>
   <div>
     <div>
       <h2>
         <a href="<?php echo get_page_link(74);?>">Installations
         </a>
       </h2>
     </div>
   </div>
   <div>
     <div>
       <h2>
         <a href="<?php echo get_page_link(62);?>">Production <br>& Streaming
         </a>
       </h2>
     </div>
     <img src="<?php echo get_template_directory_uri();?>/images/sections/home/magnum-produccion.png" alt="">
   </div>
   <div>
     <div>
       <h2>
         <a href="<?php echo get_page_link(80);?>">
           Service<br>Center
         </a>
       </h2>
     </div>
     <img src="<?php echo get_template_directory_uri();?>/images/sections/home/magnum-centro-de-servicio.png" alt="">
   </div>
   <div>
     <div>
       <h2>
         <a href="<?php echo get_page_link(55);?>">Magnum Shop</a>
       </h2>
     </div>
   </div>
   <div>
     <div>
       <h2>
         <a href="<?php echo get_page_link(77);?>">Contact
         </a>
       </h2>
     </div>
   </div>
   <div>
     <div>
       <h2>
         <a href="<?php echo get_page_link(55);?>">Magnum <br>shop
         </a>
       </h2>
     </div>
     <img src="<?php echo get_template_directory_uri();?>/images/sections/home/magnum-shop.png" alt="">
   </div>
   <div>
     <div>
       <h2>
         <a href="<?php echo get_page_link(74);?>">Installations
         </a>
       </h2>
     </div>
     <img src="<?php echo get_template_directory_uri();?>/images/sections/home/magnum-shop.png" alt="">
   </div>
   <div>
     <div>
       <h2>
         <a href="<?php echo get_page_link(89);?>">Acoustic<br>conditioning
         </a>
       </h2>
     </div>
     <img src="<?php echo get_template_directory_uri();?>/images/sections/home/magnum-shop.png" alt="">
   </div>
 </div>
<?php endif; ?>
</section>
