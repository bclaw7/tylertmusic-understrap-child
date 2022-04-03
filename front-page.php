<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
// get_template_part( 'global-templates/hero' );

?>
<div id="carouselExampleInterval" class="carousel slide container-xxl" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
            <img src="/wp-content/themes/tylertmusic-understrap-child/images/tyler-t-kinneyfamilyfarm.jpg"
                class="d-block w-100" alt="Tyler T. live at the Swing Station">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="/wp-content/themes/tylertmusic-understrap-child/images/tyler-t-aggie.jpg" class="d-block w-100"
                alt="Tyler T. live at the Aggie">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="/wp-content/themes/tylertmusic-understrap-child/images/tyler-t-lubbock.jpg" class="d-block w-100"
                alt="Tyler T. live in Lubbock">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="wrapper" id="page-wrapper">



    <div class="<?php echo esc_attr( $container ); ?> home-container" id="content" tabindex="-1">

        <div class="row">

            <!-- Do the left sidebar check -->
            <?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

            <main class="site-main" id="main">

                <?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				}
				?>

            </main><!-- #main -->

            <!-- Do the right sidebar check -->
            <?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();