<?php
function broadcast() {
  // etiquetas backend
  $labels = array(
    'name'                => _x( 'Productos Magnum', 'Post Type General Name', 'magnum-theme' ),
    'singular_name'       => _x( 'Producto', 'Post Type Singular Name', 'magnum-theme' ),
    'menu_name'           => __( 'Broadcast &nbsp; Magnum', 'magnum-theme' ),
    'parent_item_colon'   => __( 'Producto padre', 'magnum-theme' ),
    'all_items'           => __( 'Todos los Productos', 'magnum-theme' ),
    'view_item'           => __( 'Ver Producto', 'magnum-theme' ),
    'add_new_item'        => __( 'Agrega Producto', 'magnum-theme' ),
    'add_new'             => __( 'Nuevo Producto', 'magnum-theme' ),
    'edit_item'           => __( 'Edita Producto', 'magnum-theme' ),
    'update_item'         => __( 'Actualiza Producto', 'magnum-theme' ),
    'search_items'        => __( 'Busca Producto', 'magnum-theme' ),
    'not_found'           => __( 'No existe', 'magnum-theme' ),
    'not_found_in_trash'  => __( 'No existe en la basura', 'magnum-theme' ),
  );

  // Set other options for Custom Post Type

  $args = array(
    'label'               => __( 'Productos', 'magnum-theme' ),
    'description'         => __( 'Productos magnum', 'magnum-theme' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'thumbnail' ),
    // 'taxonomies'          => array( '' ),
    'menu_icon'           => 'dashicons-welcome-add-page',
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 2,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );

  // Registra
  register_post_type( 'broadcast-cpt', $args );

}
add_action( 'init', 'broadcast', 0 );
