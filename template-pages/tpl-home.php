<?php
/**
 * Template Name: Home
 *
 * @package ROI_Blank_Theme
 */

get_header(); ?>

    <section id="content" class="site__content" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-blocks/block', 'loop-content' ); ?>
        <?php endwhile; ?>

    </section><!-- #content -->

<?php get_footer(); ?>
