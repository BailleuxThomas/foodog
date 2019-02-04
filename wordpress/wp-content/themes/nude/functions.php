<?php

/**
 * Setup the Nude theme.
 * 
 * @since 1.0
 */
function nude_setup() {

	// Set the text domain
	load_theme_textdomain( 'nude', get_template_directory() . '/languages' );

	// Add theme support
	add_theme_support( 'html5' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-background', array( 'default-color' => 'eeeeee' ) );

	// Set the content width
	$GLOBALS['content_width'] = 768;

	/**
	 * Fires after the theme setup.
	 * 
	 * @since 1.0
	 */
	do_action( 'nude_theme_setup' );

	register_nav_menus( array(
		'main-menu' => 'Menu principal',
		'footer-menu' => 'Footer menu',
		'social' => 'menu social'
	));
	
	add_theme_support('post-thumbnails');
	add_image_size('single-post', 350, 250);
	add_image_size('footer-post', 100, 100);
	add_image_size('Hero-one', 520, 320);
	add_image_size('Hero-post', 180, 160);
}

add_action( 'after_setup_theme', 'nude_setup', 10, 0 );

