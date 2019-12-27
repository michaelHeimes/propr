<?php
/**
 * Post Type Declaration
 */
$labels = array(
	'name' => 'Case Studies',
	'singular_name' => 'Case Study',
	'add_new' => 'Add New',
	'add_new_item' => 'Add New Case Study',
	'edit_item' => 'Edit Case Study',
	'new_item' => 'New Case Study',
	'view_item' => 'View Case Study',
	'search_items' => 'Search Case Studies',
	'not_found' => 'No Case Studies Found',
	'not_found_in_trash' => 'No Case Studies Found in Trash',
	'menu_name' => 'Case Studies'
);

$args = array(
	'labels' => $labels,
	'description' => '',
	'public' => true,
	'exclude_from_search' => false,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_nav_menus' => false,
	'show_in_menu' => true,
	'show_in_admin_bar' => true,
	'menu_position' => 10,
	'menu_icon' => 'dashicons-images-alt2',
	'capability_type' => 'post',
	'hierarchical' => false,
	'supports' => array( 'title', 'thumbnail' ),
	'taxonomies' => array(),
	'has_archive' => true
);

register_post_type( 'casestudy', $args );

/**
 * Custom Title Placeholder
 */
function casestudy_change_title_placeholder( $title ){
     $screen = get_current_screen();
     if ( $screen->post_type == 'casestudy' ) {
          $title = 'Enter case study title here';
     }
     return $title;
}
add_filter('enter_title_here', 'casestudy_change_title_placeholder');
