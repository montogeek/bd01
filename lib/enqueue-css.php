<?php
/*********************
Enqueue the proper CSS
if you use vanilla CSS.
*********************/
function reverie_css_style()
{	
	// normalize stylesheet
	wp_register_style( 'reverie-normalize-stylesheet', get_template_directory_uri() . '/css/normalize.css', array(), '' );
	
	// foundation stylesheet
	wp_register_style( 'reverie-foundation-stylesheet', get_template_directory_uri() . '/css/foundation.css', array(), '' );	
	
	// Register the main style under root directory
	wp_register_style( 'reverie-stylesheet', get_stylesheet_directory_uri() . '/style.css', array(), '', 'all' );
	
	// Google Web Fonts - Open Sans
	wp_register_style('source-sans', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro');
	wp_register_style('varela', 'http://fonts.googleapis.com/css?family=Varela');

	wp_enqueue_style( 'reverie-normalize-stylesheet' );
	wp_enqueue_style( 'reverie-foundation-stylesheet' );
	wp_enqueue_style( 'reverie-stylesheet' );
	wp_enqueue_style( 'source-sans' );
	wp_enqueue_style( 'varela' );
	
}
add_action( 'wp_enqueue_scripts', 'reverie_css_style' );
?>