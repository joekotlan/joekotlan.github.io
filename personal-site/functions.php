<?php
// Add support for Yoast <title> tags
add_theme_support( 'title-tag' );


// remove jQuery migrate
function dequeue_jquery_migrate( $scripts ) {
    if ( ! is_admin() && ! empty( $scripts->registered['jquery'] ) ) {
        $scripts->registered['jquery']->deps = array_diff(
            $scripts->registered['jquery']->deps,
            [ 'jquery-migrate' ]
        );
    }
}
add_action( 'wp_default_scripts', 'dequeue_jquery_migrate' );


// Create Options section for ACF
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
	acf_set_options_page_title( __('Sitewide Settings') );
}


// Create custom navwalker
require_once get_template_directory() . '/navwalker.php';
register_nav_menus( array(
   'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );


// Add current-menu-item class to custom post type pages
function add_current_nav_class($classes, $item) {
	global $post;
	$current_post_type = get_post_type_object(get_post_type($post->ID));
	$current_post_type_slug = $current_post_type->rewrite[slug];
	$menu_slug = strtolower(trim($item->url));
	if (strpos($menu_slug,$current_post_type_slug) !== false) {
	   $classes[] = 'current-menu-item';
	}
	return $classes;
}
add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );


// Remove classes in navwalker and add "current" class
function my_navigation_class($classes, $item){
   foreach ($classes as $name => $class) {
   	if ($class == 'menu-item' || $class == 'page_item' || $class == 'menu-item-type-post_type' || $class == 'menu-item-object-page' || $class == 'menu-item-home' || $class == 'current-menu-item' || $class == 'current_page_item' || $class == 'menu-item-has-children' || $class == 'current-menu-ancestor' || $class == 'current-menu-parent' || $class == 'current-page-parent' || $class == 'current_page_ancestor') {
      	unset($classes[$name]);
      }
      if($class == 'current-menu-item' || $class == 'current-page-ancestor' ) {
      	$classes[$name] = 'current';
      }
   }
   return $classes;
}
add_filter('nav_menu_css_class' , 'my_navigation_class' , 10 , 2);


// Move gravity forms jQuery calls to the footer
add_filter("gform_init_scripts_footer", "init_scripts");
	function init_scripts() {
	return true;
}


// Create Menus
add_action( 'init', 'register_my_menu' );
function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}


// Clean up wp_head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');


// Add custom styles to login page
function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/login.css" />';
}
add_action('login_head', 'my_custom_login');


// Enable Post Thumbnails
add_theme_support('post-thumbnails');


// Create a word count for the content
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  } 
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}


// Don't allow comments on media attachments
add_filter( 'comments_open', 'filter_media_comment_status', 10 , 2 );
function filter_media_comment_status( $open, $post_id ) {
$post = get_post( $post_id );
if( $post->post_type == 'attachment' ) {
return false;
}
return $open;
}

// Add Sandbox custom post type
$labelsSandbox = array (
	'name' => 'Sandbox',
	'singular_name' => 'Sandbox',
	'add_new' => 'Add Sandbox',
	'add_new_item' => 'Add New Sandbox',
	'edit_item' => 'Edit Sandbox',
	'new_item' => 'New Sandbox',
	'all_items' => 'All Sandbox',
	'view_item' => 'View Sandbox',
	'search_items' => 'Search Sandbox',
	'not_found' => 'No Sandbox found',
	'not_found_in_trash' => 'No Sandbox found in Trash',
	'parent_item_colon' => '',
	'menu_name' => 'Sandbox'
);

$argsSandbox = array (
	'labels' => $labelsSandbox,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => array('slug' => 'sandbox', 'with_front' => true),
	'capability_type' => 'post',
	'has_archive' => true,
	'menu_icon' => 'dashicons-admin-appearance',
	'menu_position' => 5,
 	'taxonomies' => array('category'),
	'hierarchical' => true,
	'supports' => array('title', 'editor', 'author', 'thumbnail'),
	'show_in_rest' => true
);
register_post_type('sandbox', $argsSandbox);


// Add Work custom post type
$labelsWork = array (
	'name' => 'Work',
	'singular_name' => 'Work',
	'add_new' => 'Add Work',
	'add_new_item' => 'Add New Work',
	'edit_item' => 'Edit Work',
	'new_item' => 'New Work',
	'all_items' => 'All Work',
	'view_item' => 'View Work',
	'search_items' => 'Search Work',
	'not_found' => 'No Work found',
	'not_found_in_trash' => 'No Work found in Trash',
	'parent_item_colon' => '',
	'menu_name' => 'Work'
);

$argsWork = array (
	'labels' => $labelsWork,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'rewrite' => array('slug' => 'work', 'with_front' => false),
	'capability_type' => 'post',
	'has_archive' => true,
	'menu_icon' => 'dashicons-admin-site-alt3',
	'menu_position' => 4,
 	'taxonomies' => array('category'),
	'hierarchical' => true,
	'supports' => array('title', 'editor', 'author', 'thumbnail'),
	'show_in_rest' => true
);
register_post_type('work', $argsWork);

?>