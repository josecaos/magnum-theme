<?php
add_filter( 'show_admin_bar', '__return_false' );

add_theme_support( 'menus' );
// Dependencias
add_action( 'wp_enqueue_scripts', 'dependencias' );

function dependencias() {
  // wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/bower_components/slick-carousel/slick/slick.css');
  // wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/bower_components/slick-carousel/slick/slick-theme.css');
  // wp_enqueue_style( 'app-styles', get_template_directory_uri() . '/css/app.css');
  // wp_enqueue_style( 'wp-styles', get_template_directory_uri() . '/style.css');
  // wp_enqueue_style( 'cdn-fonts', 'https://fonts.googleapis.com/css?family=Allerta+Stencil|Audiowide|Bungee+Hairline|Gafata|Heebo|Iceberg|Megrim|Montserrat+Alternates|Nova+Cut|Nova+Square|Orbitron|PT+Mono|Plaster|Quantico|Share+Tech+Mono|Source+Code+Pro|Space+Mono|Stalinist+One|VT323');
  //
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.js' );
  // wp_enqueue_script( 'what-input', get_template_directory_uri() . '/bower_components/what-input/dist/what-input.js' );
  // wp_enqueue_script( 'foundation', get_template_directory_uri() . '/bower_components/foundation-sites/dist/js/foundation.js' );
  // wp_enqueue_script( 'slick-carousel', get_template_directory_uri() .'/bower_components/slick-carousel/slick/slick.js', array('jquery') );
  // wp_enqueue_script( 'masonry-js', get_template_directory_uri() .'/bower_components/masonry/dist/masonry.pkgd.js', array('jquery') );
  // wp_enqueue_script( 'imgLiquid', get_template_directory_uri() . '/bower_components/imgLiquid/js/imgLiquid-min.js', array('jquery') );
  // wp_enqueue_script( 'parallax', get_template_directory_uri() . '/bower_components/parallax.js/parallax.js', array('jquery') );
  // wp_enqueue_script( 'app-js', get_template_directory_uri() . '/js/app.js', array('jquery') );

  // wp_localize_script('app-master','ajax',array('ajax_url'=> admin_url( 'admin-ajax.php' )));

}

function registro_menu() {
  register_nav_menu('menu-header',__( 'Menú header' ));
  register_nav_menu('menu-movil',__( 'Menú movil' ));
}
add_action( 'init', 'registro_menu' );
//
// custom post types
// include_once "cpts/broadcast-cpt.php";

// analytics
add_action('wp_head', 'add_analytics');
//pegar aqui codigo google analytics
function add_analytics() { ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124425793-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-124425793-1');
  </script>
  <?php
}
