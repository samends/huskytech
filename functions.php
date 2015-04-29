<?php 
// Get page by slug;
 
function get_id_by_slug($page_slug) {
	$page = get_page_by_path($page_slug);
			if ($page) {
			return $page->ID;
		}
		 else {
			return null;
		}
}

/*Adding custom javascript*/
function add_js()
{
	$current_url=get_stylesheet_directory_uri();
	$mainjs_url=$current_url.'/js/main.js';
    wp_register_script( 'main_js',$mainjs_url,array( 'jquery' ), false, true);
    wp_enqueue_script( 'main_js' );
	
	$current_url=get_stylesheet_directory_uri();
	$tap_js_url=$current_url.'/js/jquery.tap.min.js';
    wp_register_script( 'tap_js',$tap_js_url,array( 'jquery' ), false, true);
	
	$current_url=get_stylesheet_directory_uri();
	$mainjs_url=$current_url.'/platform/platform.js';
    wp_register_script( 'platform_js',$mainjs_url,array( 'jquery' ), false, true);
    /*wp_enqueue_script( 'platform_js' );
	$current_url=get_stylesheet_directory_uri();
	$mainjs_url=$current_url.'/polymer/polymer.js';
    wp_register_script( 'polymer_js',$mainjs_url,array( 'jquery' ), false, true);
    wp_enqueue_script( 'polymer_js' );*/
}
add_action( 'wp_enqueue_scripts', 'add_js' );
/*Getting Attachement by URL*/
function get_attachment_url_by_slug( $slug ) {
  $args = array(
    'post_type' => 'attachment',
    'name' => sanitize_title($slug),
    'posts_per_page' => 1,
    'post_status' => 'inherit',
  );
  $_header = get_posts( $args );
  $header = $_header ? array_pop($_header) : null;
  return $header ? wp_get_attachment_url($header->ID) : '';
}
?>