<?php

function theme_setup() {

	// Enable support for post thumbnails on posts and pages
	add_theme_support('post-thumbnails');

	add_action( 'after_setup_theme', 'aw_custom_add_image_sizes' );

	function aw_custom_add_image_sizes() {
		add_image_size( 'small', 300, 9999 ); // 300px wide unlimited height
		add_image_size( 'medium-small', 450, 9999 ); // 300px wide unlimited height
		add_image_size( 'xl', 1200, 9999 ); // 1200px wide unlimited height
		add_image_size( 'xxl', 2000, 9999 ); // 2000px wide unlimited height
		add_image_size( 'xxxl', 3000, 9999 ); // 3000px wide unlimited height
		add_image_size( 'recent_post', 640, 640 );

	}

	add_filter( 'image_size_names_choose', 'aw_custom_add_image_size_names' );
	function aw_custom_add_image_size_names( $sizes ) {
	return array_merge( $sizes, array(
		'small' => __( 'Small' ),
		'medium-small' => __( 'Medium Small' ),
		'xl' => __( 'Extra Large' ),
		'xxl' => __( '2x Extra Large' ),
		'xxxl' => __( '3x Extra Large' ),
		'recent_post' => __( 'Recent Post' ),
	) );
	}

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array('comment-list', 'search-form', 'comment-form', 'gallery', 'caption') );

	// Add default posts and comments RSS feed links to head
	add_theme_support('automatic-feed-links');

	// Register commonly used menus
	register_nav_menus(array(
		'primary-navigation' => 'Primary Navigation',
		'sub-primary-navigation' => 'Sub Primary Navigation',
		'secondary-navigation' => 'Secondary Navigation'
	));

	// Disables the admin bar
	add_filter('show_admin_bar', '__return_false');

	// Cleanup Head
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

	// Include custom post types, custom taxonomies, and general includes
	$includes = array_merge(
		glob( get_theme_root() . '/' . get_template() . '/taxonomies/*.php'), // All taxonomies
		glob( get_theme_root() . '/' . get_template() . '/types/*.php'), // All custom post types
		glob( get_theme_root() . '/' . get_template() . '/includes/*.php') // All includes
	);

	// Ignore files starting with an underscore
	if( $includes ) {
		foreach( $includes as $include ) {
			$exploded_path = explode('/', $include );
			$filename = end( $exploded_path );
			if ( strpos( $filename, '_') !== 0 ) {
				include_once( $include );
			}
		}
	}

}
add_action( 'after_setup_theme', 'theme_setup' );

function set_globals() {

	if( ! is_admin() ){

		$settings = get_field('page_elements');

		if( is_array( $settings ) && ! empty( $settings ) ){

			foreach( $settings as $setting ){
				$GLOBALS[ 'theme_' . $setting ] = true;
			}

		} else {

			$GLOBALS['theme_show_header'] = true;
			$GLOBALS['theme_show_footer_contact'] = true;

		}
	}

	$is_dashboard_page = get_field('dashboard') ? true : false;

	if( $is_dashboard_page && ! is_user_logged_in() ){
		wp_redirect(home_url());
    	exit();
	}
}
add_action( 'get_header', 'set_globals' );


function auto_redirect_after_logout(){
	wp_redirect( home_url() );
	exit();
}
add_action('wp_logout','auto_redirect_after_logout');

function remove_read_wpse(){
	if( function_exists('remove_cap') ){
 		remove_cap( 'subscriber', 'read' );
	}
}
add_action( 'admin_init', 'remove_read_wpse' );

function hide_admin_wpse() {
  if (current_user_can('subscriber')) {
    add_filter('show_admin_bar','__return_false');
  }
}
add_action('wp_head','hide_admin_wpse');

function add_dark_class( $classes ) {
    $classes[] = 'dark';
    return $classes;
}


function acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyD_LfJMtbj3qp8CZaCr3QpBYflEHeY1IyU';
	return $api;
}

add_filter('acf/fields/google_map/api', 'acf_google_map_api');

add_action('admin_menu', 'remove_built_in_roles');

function remove_built_in_roles() {
    global $wp_roles;

    $roles_to_remove = array('contributor', 'author', 'editor');

    foreach ($roles_to_remove as $role) {
        if (isset($wp_roles->roles[$role])) {
            $wp_roles->remove_role($role);
        }
    }
}

function convertToReadableSize($size)
{
  $base = log($size) / log(1024);
  $suffix = array("B", "KB", "MB", "GB", "TB");
  $f_base = floor($base);
  return round(pow(1024, $base - floor($base)), 1) . $suffix[$f_base];
}

// removes the `profile.php` admin color scheme options
remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );

if ( ! function_exists( 'cor_remove_personal_options' ) ) {
  /**
   * Removes the leftover 'Visual Editor', 'Keyboard Shortcuts' and 'Toolbar' options.
   */
  function cor_remove_personal_options( $subject ) {
    $subject = preg_replace( '#<h3>Personal Options</h3>.+?/table>#s', '', $subject, 1 );
    return $subject;
  }

  function cor_profile_subject_start() {
    ob_start( 'cor_remove_personal_options' );
  }

  function cor_profile_subject_end() {
    ob_end_flush();
  }
}
add_action( 'admin_head-profile.php', 'cor_profile_subject_start' );
add_action( 'admin_footer-profile.php', 'cor_profile_subject_end' );

function is_hex_dark( $hex ) {

	$hex = ltrim($hex, '#');

	$r = hexdec(substr($hex,0,2));
	$g = hexdec(substr($hex,2,2));
	$b = hexdec(substr($hex,4,2));

	if($r + $g + $b > 382){
		return false;
	}else{
	    return true;
	}
}

// Enable ACF Options
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

add_image_size( 'recent-thumb', 9999, 9999 );
add_image_size( 'select-work', 840, 640 );
add_image_size( 'propr-mattr', 1440, 800 );

