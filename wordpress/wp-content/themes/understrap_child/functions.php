<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

register_nav_menus( array(
    'main-menu' => 'Menu principal',
    'footer-menu' => 'Footer menu',
    'social' => 'menu social'
));

register_sidebar( array(
    'name'          => __( 'top3', 'single' ),
    'id'            => 'top3',
    'description'   => __( 'Description de la zone de widgets.', 'dossierdevotretheme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="widget-title th3">',
    'after_title'   => '</div>',
) );

register_sidebar( array(
    'name'          => __( 'commentary', 'single' ),
    'id'            => 'commentary',
    'description'   => __( 'Description de la zone de widgets.', 'dossierdevotretheme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="widget-title th3">',
    'after_title'   => '</div>',
) );

add_theme_support('post-thumbnails');
add_image_size('single-post', 350, 250);
add_image_size('footer-post', 100, 100);
add_image_size('Hero-one', 520, 320);
add_image_size('Hero-post', 180, 160);
add_image_size('TOUFTOUF', 300, 200);

register_sidebar( array(
    'name'          => __( 'recherche', 'header' ),
    'id'            => 'rechercher',
    'description'   => __( 'Description de la zone de widgets.', 'dossierdevotretheme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="widget-title th3">',
    'after_title'   => '</div>',
) );

//Parametrer l'extrait
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 39 );
function wpdocs_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );