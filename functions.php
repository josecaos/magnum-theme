<?php
add_filter( 'show_admin_bar', '__return_false' );

add_theme_support( 'menus' );
// Dependencias
add_action( 'wp_enqueue_scripts', 'dependencias' );

function dependencias() {
  wp_enqueue_style( 'cdn-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:700,400|Roboto:300,300i,400,400i,700,700i');
  wp_enqueue_style( 'wp-styles', get_template_directory_uri() . '/style.css');
  wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/css/style.min.css');
  wp_enqueue_style( 'custom-styles', get_template_directory_uri() . '/css/custom.css');
  //
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/libs/jquery.min.js' );
  wp_enqueue_script( 'home-js', get_template_directory_uri() . '/js/controllers/home.js', array('jquery') );
  wp_enqueue_script( 'home-js', get_template_directory_uri() . '/js/controllers/slider.js', array('jquery') );
  wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery') );

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
function add_analytics() { ?>
  <!-- <script>

  </script> -->
  <?php
}
