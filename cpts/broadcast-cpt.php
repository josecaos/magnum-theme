<?php
function broadcast() {
  // etiquetas backend
  $labels = array(
    'name'                => _x( 'Artistas', 'Post Type General Name', 'magnum-theme' ),
    'singular_name'       => _x( 'Artista', 'Post Type Singular Name', 'magnum-theme' ),
    'menu_name'           => __( 'Roto-Artistas', 'magnum-theme' ),
    'parent_item_colon'   => __( 'Artista padre', 'magnum-theme' ),
    'all_items'           => __( 'Todos los Artistas', 'magnum-theme' ),
    'view_item'           => __( 'Ver Artista', 'magnum-theme' ),
    'add_new_item'        => __( 'Agrega Artista', 'magnum-theme' ),
    'add_new'             => __( 'Nuevo Artista', 'magnum-theme' ),
    'edit_item'           => __( 'Edita Artista', 'magnum-theme' ),
    'update_item'         => __( 'Actualiza Artista', 'magnum-theme' ),
    'search_items'        => __( 'Busca Artista', 'magnum-theme' ),
    'not_found'           => __( 'No existe', 'magnum-theme' ),
    'not_found_in_trash'  => __( 'No existe en la basura', 'magnum-theme' ),
  );

  // Set other options for Custom Post Type

  $args = array(
    'label'               => __( 'Artistas', 'magnum-theme' ),
    'description'         => __( 'Artistas magnum', 'magnum-theme' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    // 'taxonomies'          => array( '' ),
    'menu_icon'           => 'dashicons-groups',
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 6,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );

  // Registra
  register_post_type( 'roto-artistas', $args );

}

add_action( 'init', 'broadcast', 0 );
