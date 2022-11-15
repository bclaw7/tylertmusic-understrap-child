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

?>

<div class="wrapper pt-0 position-relative" id="page-wrapper">
    <div class="hero-img mx-auto text-center position-relative">
        <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
        <img src="/wp-content/themes/tylertmusic-understrap-child/images/logo.png" alt="logo"
            class="position-absolute top-100 start-50 translate-middle mt-5">
    </div>
    <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

        <div class="row">

            <main class="site-main" id="main">

                <?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'front' );

				}
				?>

            </main><!-- #main -->

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();