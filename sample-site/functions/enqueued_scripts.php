<?php


/**
 * Enqueue scripts and styles. Use this to add js files/packages/other
 * @return void
 */
function sample_scripts() {
	
	// MAIN CSS
	wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/main.css' ) );

	// FONTS
	wp_enqueue_style( 'fa-fonts', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css', false );
	
	// MAIN JS
	wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);
}
add_action( 'wp_enqueue_scripts', 'sample_scripts' );