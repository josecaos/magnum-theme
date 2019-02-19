<!DOCTYPE html>
<html lang="es-mx">
<head>
  <title><?php bloginfo('name');?></title>
  <meta http-equiv="content-type" content="charset=utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/images/global/favicon.png">
  <?php wp_head(); ?>
</head>

<body class="bg-magnum-circle">

  <section class="header">
    <div class="container">
      <a href="<?php echo home_url();?>">
        <img src="<?php echo get_template_directory_uri();?>/images/global/magnum-logo-blanco.png" alt="">
        <img src="<?php echo get_template_directory_uri();?>/images/global/magnum-logo-blanco.png" alt="">
      </a>

      <div>

        <a id="english" href="<?php echo get_site_url();?>/en">En</a>
        <p>/</p>
        <a id="espanol" href="<?php echo get_site_url();?>">Es</a>
        <input type="checkbox">
        <div class="icon">
          <img src="<?php echo get_template_directory_uri();?>/images/global/magnum-menu.png" alt="">
        </div>

        <?php
        // que idioma es?
        if (get_locale() == 'es_MX'):
          ?>
          <script type="text/javascript">
          jQuery(document).ready(() => {
            jQuery("#english").removeClass("locale_active")
            jQuery("#espanol").addClass("locale_active")
          })
        </script>
          <ul class="active">
            <div class="icon">
              <img src="<?php echo get_template_directory_uri();?>/images/global/magnum-menu.png" alt="">
            </div>
            <li>
              <a href="<?php echo get_page_link(42);?>">
                Nosotros
              </a>
            </li>
            <li class="active">
              <a href="<?php echo get_page_link(6);?>">
                Broadcast
              </a>
            </li>
            <li><a href="<?php echo get_page_link(40);?>">
              Producción y Streaming
            </a>
          </li>
          <li>
            <a href="<?php echo get_page_link(34);?>">
              Tienda
            </a>
          </li>
          <li>
            <a href="<?php echo get_page_link(47);?>">
              Centro de Servicio
            </a>
          </li>
          <li>
            <a href="<?php echo get_page_link(44);?>">
              Acondicionamiento Acústico
            </a>
          </li>
          <li>
            <a href="<?php echo get_page_link(37);?>">
              Instalaciones
            </a>
          </li>
          <li>
            <a href="<?php echo get_page_link(32);?>">
              Magnum En Vivo
            </a>
          </li>
          <li>
            <a href="<?php echo get_page_link(49);?>">
              Contacto
            </a>
          </li>
        </ul>

        <?php

        elseif (get_locale() == 'en_US'):

          ?>
          <script type="text/javascript">
          jQuery(document).ready(() => {
            jQuery("#espanol").removeClass("locale_active")
            jQuery("#english").addClass("locale_active")
          })
          </script>
          <ul class="active">
            <div class="icon">
              <img src="<?php echo get_template_directory_uri();?>/images/global/magnum-menu.png" alt="">
            </div>
            <li>
              <a href="<?php echo get_page_link(66);?>">
                About Us
              </a>
            </li>
            <li class="active">
              <a href="<?php echo get_page_link(83);?>">
                Broadcast
              </a>
            </li>
            <li><a href="<?php echo get_page_link(62);?>">
              Production and Streaming
            </a>
          </li>
          <li>
            <a href="<?php echo get_page_link(55);?>">
              Magnum Shop
            </a>
          </li>
          <li>
            <a href="<?php echo get_page_link(80);?>">
              Service Center
            </a>
          </li>
          <li>
            <a href="<?php echo get_page_link(89);?>">
              Acoustic&nbsp; conditioning
            </a>
          </li>
          <li>
            <a href="<?php echo get_page_link(74);?>">
              Installations
            </a>
          </li>
          <li>
            <a href="<?php echo get_page_link(70);?>">
              Magnum Live
            </a>
          </li>
          <li>
            <a href="<?php echo get_page_link(77);?>">
              Contact
            </a>
          </li>
        </ul>
        <?php
      endif;
      ?>

    </div>
  </div>
</section>
