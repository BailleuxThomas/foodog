<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php
include 'pub.php';
?>


<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

					<?php understrap_post_nav(); ?>



				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<div class="container bodyshare">
				<div class="row">
					<div class="col-sm-12 col-lg-12">
						<ul>
							<li class="COMMENT"><a href=""><i class="far fa-comment"></i>0 COMMENT</a></li>
							<li class="FACE"><a href=""><i class="fab fa-facebook-f"></i>SHARE</a></li>
							<li class="TWEET"><a href=""><i class="fab fa-twitter"></i>TWEET</a></li>
							<li class="PINIT"><a href=""><i class="fab fa-pinterest"></i>PIN IT</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<h2>Subscribe to The Digest Newletter</h2>
			<span>Get health and wellness tips about your dog delivered to your inbox</span>
			
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-lg-12">
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Your email SIGN UP" aria-label="Your email SIGN UP"
								aria-describedby="basic-addon2">
							<div class="input-group-append">
								<button type="button" class="btn btn-danger">SIGN UP</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-lg-12">
						<span class="previous2"><span>
								< </span>PREVIOUS ARTICLE</span> <span class="title">SUPERFOODS IN YOR KITCHEN: PUMPKINS FOR <br>DOGS
							</span>
					</div>
				</div>
			</div>
			
			<div class="container previous1">
				<div class="row">
					<div class="col-sm-1 col-lg-1">
						<span class="logofarmersdog">THE FARMER'S DOG</span> <!-- LOGO -->
					</div>
			
					<div class="col-sm-11 col-lg-11">
						<span class="title2">The Farmer's Dog</span><br>
						<span class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab illo modi distinctio, eius
							explicabo dicta quaerat sint accusantium provident vitae! Facere nulla natus similique laborum sit eos
							sint pariatur voluptatibus!</span>
						<span class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab illo modi distinctio, eius
							explicabo dicta quaerat sint accusantium provident vitae! Facere nulla natus similique laborum sit eos
							sint pariatur voluptatibus!</span>
						<span class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab illo modi distinctio, eius
							explicabo dicta quaerat sint accusantium provident vitae! Facere nulla natus similique laborum sit eos
							sint pariatur voluptatibus!</span>
			
					</div>
				</div>
			</div>
			
			
			<?php
				if( is_active_sidebar( 'rechercher' ) ):
				dynamic_sidebar( 'rechercher' );
				endif;
			?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

			
		</div><!-- .row -->

	</div><!-- #content -->

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<?php
// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
	comments_template();
endif;
?>
		</div>
	</div>
</div>

</div><!-- #single-wrapper -->


<?php get_footer(); ?>