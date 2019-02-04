<?php
        /**
         * The header for our theme.
         *
         * Displays all of the <head> section and everything up till <div id="content">
         *
         * @package understrap
         */
        
        if ( ! defined( 'ABSPATH' ) ) {
            exit; // Exit if accessed directly.
        }
        
        $container = get_theme_mod( 'understrap_container_type' );
        ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/solid.css" integrity="sha384-+0VIRx+yz1WBcCTXBkVQYIBVNEFH1eP6Zknm16roZCyeNg2maWEpk/l/KsyFKs7G" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/fontawesome.css" integrity="sha384-jLuaxTTBR42U2qJ/pm4JRouHkEDHkVqH0T1nyQXn1mZ7Snycpf6Rl25VBNthU4z0" crossorigin="anonymous">

</head>

<body <?php body_class(); ?>>


    <!--/.Navbar-->
    <a class="skip-link sr-only sr-only-focusable" href="#content">
        <?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

    <!-- Your site title as branding in the menu -->
    <?php if ( ! has_custom_logo() ) { ?>

    <?php if ( is_front_page() && is_home() ) : ?>

    <?php else : ?>

    

    <?php endif; ?>

    <?php } else {
                 the_custom_logo();
                            } ?>
    <!-- end custom logo -->


    <div class="jumbotron jumbotron-fluid">
    <div class="site" id="page">

<!-- ******************* The Navbar Area ******************* -->
<nav class="navbar navbar-expand navup">
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse yo" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#" target="_blank"><img class="imageNav" src="http://localhost/wordpress/wp-content/themes/understrap_child/img/facebook.jpg"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" target="_blank"><img class="imageNav" src="http://localhost/wordpress/wp-content/themes/understrap_child/img/twitter.png"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" target="_blank"><img class="imageNav" src="http://localhost/wordpress/wp-content/themes/understrap_child/img/insta.jpg"></a>
            </li>
            
            <button type="button" data-toggle="modal" data-target="#infos" class="btn loupe">
                <li class="nav-item">
                    <a class="nav-link" href="#"><img class="imageNav" src="http://localhost/wordpress/wp-content/themes/understrap_child/img/loupe.png"></a>
                </li>
            </button>
            <div class="modal" id="infos">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <?php
                        if( is_active_sidebar( 'rechercher' ) ):
                        dynamic_sidebar( 'rechercher' );
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </ul>
		<!-- Links -->
		
		</div>
    <!-- Collapsible content -->

</nav>
</div><!-- #wrapper-navbar end -->
        <div class="container">
            
            <h1 class="navbar-brand mb-0 headTitre"><a class=headTitle rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                    title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
                    <?php bloginfo( 'name' ); ?></a></h1>
        </div>

        <!-- The WordPress Menu goes here -->
        <nav class="navbar navbar-expand navup2">

            <!-- Navbar brand -->
                        
            <div class="collapse navbar-collapse" id="basicExampleNav">
                
                <!-- Links -->
                <ul class="navbar-nav mr-auto yo">
                    <li class="nav-item active">
                        <a class="nav-link" href="/wordpress/index.php/category/nutrition/">Nutrition</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/wordpress/index.php/category/wellness/">Welness</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/wordpress/index.php/category/lifestyle/">Lifestyle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/wordpress/index.php/category/community/">Community</a>
                    </li>
                </ul>
            </div>
            <!-- Collapsible content -->
        </nav>
        <!--/.Navbar-->
        <?php if ( 'container' == $container ) : ?>
    </div><!-- .container -->
    <?php endif; ?>

    </div>
    <HR size= "2px" width="50%">