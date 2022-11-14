<?php
/**
 * Partial template for content in page.php
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <header class="entry-header">

        <?php the_title( '<h1 hidden class="entry-title">', '</h1>' ); ?>

    </header><!-- .entry-header -->

    <div class="hero-img mx-auto text-center position-relative">
        <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
        <img src="/wp-content/themes/tylertmusic-understrap-child/images/logo.png" alt="logo"
            class="position-absolute top-100 start-50 translate-middle mt-5">
    </div>

    <div class="entry-content position-relative">

        <?php
		the_content();
		understrap_link_pages();
		?>

    </div><!-- .entry-content -->

    <footer class="entry-footer">

        <?php understrap_edit_post_link(); ?>

    </footer><!-- .entry-footer -->

</article><!-- #post-## -->