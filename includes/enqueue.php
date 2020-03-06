<?php

/**
 * Front End CSS
 */
function load_styles() {

	$theme = wp_get_theme();

	wp_enqueue_style( 'theme-font-acumin', '//use.typekit.net/dqb6ktk.css', array(), $theme->get('Version'), 'screen' );
	wp_enqueue_style( 'theme-bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), $theme->get('Version'), 'screen' );
	wp_enqueue_style( 'theme-fancybox', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css', array(), $theme->get('Version'), 'screen' );
	wp_enqueue_style( 'theme-fa', '//use.fontawesome.com/releases/v5.8.1/css/all.css', array(), $theme->get('Version'), 'screen' );
	wp_enqueue_style( 'theme-datatables', '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css', array(), $theme->get('Version'), 'screen' );
	wp_enqueue_style( 'theme-theme', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/main.css' ) );
}
add_action('wp_enqueue_scripts', 'load_styles');

/**
 * Front End JS
 */
function load_scripts() {

	$theme = wp_get_theme();

	/* Footer Sripts */
	wp_enqueue_script( 'jquery-theme', '//code.jquery.com/jquery-3.3.1.min.js', array(), $theme->get('Version'), false );
	wp_enqueue_script( 'popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', array(), $theme->get('Version'), true );
	wp_enqueue_script( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', array(), $theme->get('Version'), true );
	wp_enqueue_script( 'datatables', '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js', array(), $theme->get('Version'), true );
	wp_enqueue_script( 'bootstrap-dt', '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js', array(), $theme->get('Version'), true );
	wp_enqueue_script( 'fancybox', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js', array(), $theme->get('Version'), true );
	
	wp_enqueue_script( 'greensock', '//cdn.jsdelivr.net/npm/gsap@3.1.1/dist/gsap.min.js', array(), $theme->get('Version'), true );
// 	wp_enqueue_script( 'greensock-cssRule', '//cdn.jsdelivr.net/npm/gsap@3.0.4/dist/CSSRulePlugin.min.js', array(), $theme->get('Version'), true );
	wp_enqueue_script( 'scrollmagic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', array(), $theme->get('Version'), true );
	wp_enqueue_script( 'scrollmagic-gsap', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.js', array(), $theme->get('Version'), true );

	wp_enqueue_script( 'scripts', '/wp-content/themes/propr/assets/js/main.js', array(), $theme->get('Version'), true );


	// Dynamic URLs for use in scripts
	wp_localize_script( 'main', 'urls', array(
		'base' => get_bloginfo('url'),
		'theme' => get_bloginfo('template_url'),
		'ajax' => admin_url('admin-ajax.php')
	));

	// Initialize vars for JS
	wp_localize_script( 'main', 'info', array( /* IDs, etc. */ ));
}
add_action('wp_enqueue_scripts', 'load_scripts');
