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
        <img src="<?php echo get_template_directory_uri();?>/images/global/magnum-logo-circulo-white.png" alt="">
      </a>
      <div>
        <a class="active" href="">en</a>
        <p>/</p>
        <a href="">es</a>
        <input type="checkbox">
        <div class="icon">
          <img src="<?php echo get_template_directory_uri();?>/images/global/magnum-menu.png" alt="">
        </div>
        <ul class="active">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri();?>/images/global/magnum-menu.png" alt="">
          </div>
          <li><a href="about-us.html">
            Nosotros
          </a>
        </li>
          <li class="active"><a href="broadcast.html">
            Broadcast
          </a>
        </li>
          <li><a href="p-streaming.html">
            Producción y Streaming
          </a>
        </li>
          <li><a href="shop.html">
            Magnum Shop</a></li>
          <li><a href="service.html">
            Centro de Servicio
          </a>
        </li>
          <li><a href="acoustic.html">
            Acondicionamiento Acústico
          </a>
        </li>
          <li><a href="instalations.html">
            Instalaciones
          </a>
        </li>
          <li><a href="live.html">
            Magnum Live
          </a>
        </li>
          <li><a href="contact.html">
            Contacto
          </a>
        </li>
        </ul>
      </div>
    </div>
  </section>
