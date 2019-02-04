<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php understrap_site_info(); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<div class="container">
  <div class="row">
    <div class="col-sm">
	<h6>CATAGORIES</h6>
	<?php wp_nav_menu('footer-menu')?>

    </div>
    <div class="col-sm">
	<h6>POPULAR POST</h6>
    </div>
    <div class="col-sm">
	<h6>INSTAGRAM</h6>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

</body>

</html>

