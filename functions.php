<?php
add_filter( 'show_admin_bar', '__return_false' );

add_theme_support('post-thumbnails');
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
  wp_enqueue_script( 'slider-js', get_template_directory_uri() . '/js/plugins/slick.min.js', array('jquery') );
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

//Broadcast cpt
include_once "cpts/broadcast-cpt.php";
//
//cpts
function cpt($cpt_slug,$paginado,$post_num=8,$orderby='ID') {
  // esto  en la pag del wp query pasarlo por parametro $paginado
  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  //
  return array(
    'post_type' => $cpt_slug,
    'posts_per_page' => $post_num,
    'paged' => $paginado,
    'orderby' => $orderby,
    'order'   => 'DESC',
  );
}
add_action( 'init', 'add_category_taxonomy_to_events' );
function add_category_taxonomy_to_events() {
	register_taxonomy_for_object_type( 'category', 'broadcast-cpt' );
}

// extra field in category
add_action ( 'edit_category_form_fields', 'add_cat_fields');
function add_cat_fields( $tag ) {    //check for existing featured ID
    $t_id = $tag->term_id;
    $cat_meta = get_option( "category_$t_id");
?>
<tr class="form-field">
<th scope="row" valign="top">
  <label for="extra1">
  <?php _e('URL de la Categoría'); ?>
</label>
</th>
<td>
<input type="text" name="Cat_meta[extra1]" id="Cat_meta[extra1]" size="25" style="width:60%;" value="<?php echo $cat_meta['extra1'] ? $cat_meta['extra1'] : ''; ?>">
<br />
        <span class="description"><?php _e('URL de la marca'); ?></span>
    </td>
</tr>

<?php
}
// save extra category extra fields hook
add_action ( 'edited_category', 'save_extra_category_fileds');
// save extra category extra fields callback function
function save_extra_category_fileds( $term_id ) {
    if ( isset( $_POST['Cat_meta'] ) ) {
        $t_id = $term_id;
        $cat_meta = get_option( "category_$t_id");
        $cat_keys = array_keys($_POST['Cat_meta']);
            foreach ($cat_keys as $key){
            if (isset($_POST['Cat_meta'][$key])){
                $cat_meta[$key] = $_POST['Cat_meta'][$key];
            }
        }
        //save the option array
        update_option( "category_$t_id", $cat_meta );
    }
}
