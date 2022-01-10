<?php
/**
 * Template Name: Careers
 *
 * @package ROI_Blank_Theme
 */

get_header(); ?>

<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 text-center text-lg-left">
                <h1>Interested in joining a company with an unbeatable culture?</h1>
                <p>Join a company that doesn’t take shortcuts or treat you like a number. We help each other win and that’s why we are the fastest growing digital marketing agency in APAC.</p>
                <a href="#vacancies" class="btn fp-btn fp-btn-orange show-popup-form-3">VIEW OUR OPPORTUNITIES</a>
            </div>
        </div>
    </div>
</section>

<section id="content" class="site__content" role="main">

    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-blocks/block', 'loop-content' ); ?>
    <?php endwhile; ?>

</section>
   

<?php get_footer(); ?>