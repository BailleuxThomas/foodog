<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod('understrap_container_type');
?>

<?php
include 'debug.php';
include 'pub.php';
?>

<?php if (is_front_page() && is_home()): ?>
<?php get_template_part('global-templates/hero');?>
<?php endif;?>

<div class="wrapper" id="index-wrapper">
	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">
		<div class="row">
			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part('global-templates/left-sidebar-check');?>
			<main class="site-main" id="main"> <!-- #main -->


				<div class="col-sm-12">
					<div class="row">
						<div class="footertitle">
						</div>
						<?php

$recentPosts = new WP_Query();

$sticky = get_option('sticky_posts');

$args = array(

    'order' => 'DSC',

    'orderby' => 'date',

    'post__in' => $sticky,

);

$recentPosts->query($args);

?>
					</div>
				</div>
				<div class="col-sm-12 amain">
					<div class="row">
							<?php $i = 0;while ($recentPosts->have_posts() && $i < 1): $recentPosts->the_post();?>
											<?php if (has_post_thumbnail()): ?>
											<div class="col-sm-6">
												<a href="" title=»<?php the_title_attribute();?> » >
													<?php the_post_thumbnail(‘large’);?></a>
													<h3><?php the_category();?>
														<a href="" title=»<?php the_title_attribute();?> »>
													<?php the_title();?></a></h3>
													<?php endif?>
						<?php $i++;endwhile?>
						</div>

						<div class="col-sm-6">
							<div class="row">
								<?php $i = 0;while ($recentPosts->have_posts() && $i < 4): $recentPosts->the_post();?>
													<div class="col-sm-6 imgmain">
														<?php if (has_post_thumbnail()): ?>
														<a href="" title=»<?php the_title_attribute();?> » >
															<?php the_post_thumbnail(‘thumbnail’);?></a>
															<h3><a href="" title=»<?php the_title_attribute();?> »>
															<?php the_title();?></a></h3></div>
													<?php endif?>
								<?php $i++;endwhile?>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-6">
				<p class="mainfeaturedposts">FEATURED POSTS</p>
					<div class="row">
						<?php
// Define featured posts query
$featured_query = new WP_Query(array(
    'posts_per_page' => 3,
    'category_name' => 'featured',
));
// Open featured posts loop
if ($featured_query->have_posts()):

    while ($featured_query->have_posts()): $featured_query->the_post();

        // Featured posts loop markup goes here
        ?>
						    <div class="featureportfolio<?php echo $i++; ?>">

						        <a href="<?php the_permalink()?>" rel="bookmark" class="title imgimg">
						<?php the_post_thumbnail('large');?></a>
						    </div>
						    <?php

// Close featured posts loop
    endwhile;
endif;

// Clear/spacer DIV
?>
<div class="clear"></div>
					</div>
				</div>
				<div class="col-sm-6">
				<p class="pfeaturednurition">FEATURED NUTRITION |</p>
					<div class="row">
						<?php
// Define featured posts query
$featured_query = new WP_Query(array(
    'posts_per_page' => 3,
    'category_name' => 'featured',
));
// Open featured posts loop
if ($featured_query->have_posts()):

    while ($featured_query->have_posts()): $featured_query->the_post();

        // Featured posts loop markup goes here
        ?>
						    <div class="featureportfolio<?php echo $i++; ?>">
							<div class="info">
						       <a href="<?php the_permalink()?>" rel="bookmark" class="title"><?php the_title();?></a>
						    </div>
						        <a href="<?php the_permalink()?>" rel="bookmark" class="title"></a><?php if (is_category() || is_archive()) {
            the_excerpt();
        } else {
            the_content();
        }?><a class="ashare" href="#"><i class="fas fa-angle-right"></i> SHARE</a>
						    </div>
							<?php

// Close featured posts loop
    endwhile;
endif;

// Clear/spacer DIV
?>
					</div>
				</div>
			</div>
		</div>
	</div>


<div class="container">
	<div class="col-sm-12">
		<div class="row">
			<?php
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$args = array(
					'post_type' 		=> 'post',
					'posts_per_page' 	=> 6,
					'paged'				=> $paged,
					'ignore_sticky_posts' => true, /* will not show featured posts first */
					'orderby' => 'date', /* 'modified' last modified 'date' would order by published date */
					'order' => 'DESC',);
				$query = new WP_Query( $args );
			?>
			<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="col-lg-6">
			<?php the_post_thumbnail('TOUFTOUF'); ?>
			<p class="lafinduindex"></p>
			<a href="<?php the_permalink(); ?>" class="link-title"><p class="text-center"><?php the_title(); ?></p></a>
		</div>
<?php endwhile; endif; ?>






	</main><!-- #main -->


	<!-- The pagination component -->
	<?php understrap_pagination();?>

	<!-- Do the right sidebar check -->
	<?php get_template_part('global-templates/right-sidebar-check');?>

</div><!-- .row -->

<?php dynamic_sidebar('right-sidebar');?>

</div><!-- #right-sidebar -->
</div>
</div><!-- #content -->

</div><!-- #index-wrapper -->




<?php get_footer();?>