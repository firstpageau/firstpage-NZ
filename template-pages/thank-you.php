<?php
/**
 * Template Name: Thankyou
 *
 * @package ROI_Blank_Theme
 */

get_header(); ?>

    <section class="section-office-hours section-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 offset-md-1 mb-5">
                    <h3 class="mb-4">Office</h3>
                    <p><a href="https://www.google.com/maps/place/First+Page+-+%231+%F0%9F%8F%85Digital+Marketing+%26+SEO+Agency/@-37.8285184,144.997028,15z/data=!4m5!3m4!1s0x0:0xd19eee9ef63d8720!8m2!3d-37.8285485!4d144.99728" title="The SEO Agency Melbourne - Lv 6, 534 Church Street,
Richmond Melbourne VIC 3121"><?php the_field('address', 'option'); ?></a></p>
                    <p>
                        <strong>Phone</strong><br />
                        <a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a>
                    </p>
                    <p>
                        <strong>Email</strong><br />
                        <a href="mailto:<?php the_field('email', 'option'); ?>" class="blue"><?php the_field('email', 'option'); ?></a>
                    </p>
                </div>

                <div class="col-12 col-md-5 mb-5">
                    <h3 class="mb-4">Hours of Operation</h3>
                    <table class="table">
                        <tr>
                            <th scope="row">Monday</th>
                            <td>09:00am - 05:30pm</td>
                        </tr>
                        <tr>
                            <th scope="row">Tuesday</th>
                            <td>09:00am - 05:30pm</td>
                        </tr>
                        <tr>
                            <th scope="row">Wednesday</th>
                            <td>09:00am - 05:30pm</td>
                        </tr>
                        <tr>
                            <th scope="row">Thursday</th>
                            <td>09:00am - 05:30pm</td>
                        </tr>
                        <tr>
                            <th scope="row">Friday</th>
                            <td>09:00am - 05:30pm</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Map -->
    <div id="office-map"></div>
    <script>var map_location = JSON.parse('{<?php echo $map_location; ?>}')</script>
    <script src="/wp-content/themes/firstpage/js/map.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?v=3&key=<?php echo $map_api_key; ?>&callback=initMap"></script>

    <section class="section-worldwide-locations section-white">
        <div class="container">
            <h3>Worldwide Locations</h3>
            <div class="row">
            <?php if( have_rows('worldwide_locations', 'option') ): ?>
				<?php while( have_rows('worldwide_locations', 'option') ): the_row(); ?>
                <div class="col-12 col-md-4">
                    <div class="location-box">
                        <h5><?php echo get_sub_field('country_name', 'option'); ?></h5>
                        <p>
                            <?php echo get_sub_field('address', 'option'); ?>
                        </p>
                    </div>
                </div>
                <?php endwhile; ?>
			<?php endif; ?>
            </div>
        </div>
    </section>

    <section id="content" class="site__content" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-blocks/block', 'loop-content' ); ?>
        <?php endwhile; ?>

    </section>
   
    <script>
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            event: "thankyoupageforads",
            eventCategory: "Form Submission",
            eventAction: "Free Proposal Form Thank You Page",
            eventLabel: "Submitted",
        });
    </script>

    
<?php get_footer(); ?>