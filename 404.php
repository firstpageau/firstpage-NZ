<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package roi
 */
get_header(); ?>

<!--BEGIN custom HTML code below -->
<section class="banner not-found-section">
        <div class="container text-center ">
            <h2>Hello,</h2>
            <p>it's not me you're <br class="d-block d-sm-none">looking for</p>
            <div class="not-found-main row mt-5">
                <div class="col-12 col-md-8"> <img src="https://wordpress-684516-2302341.cloudwaysapps.com/wp-content/uploads/2021/12/404_Lionel-Richie_Final.svg" alt=""></div>
                <div class="col-12 col-md-4"><a href="/" class="btn fp-btn fp-btn-orange">Go to Homepage</a></div>


            </div>
        </div>
    </section>
<!--END custom HTML code below -->
    <style>
        footer {
            margin-top: 0;
        }
    </style>

<?php get_footer(); ?>
