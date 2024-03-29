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