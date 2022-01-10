<?php
/**
 * Template Name: Who We are
 *
 * @package ROI_Blank_Theme
 */

get_header(); ?>

<section id="content" class="site__content" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-blocks/block', 'loop-content' ); ?>
	<?php endwhile; ?>
</section>

<div id="pop-up-message-form" style="display: none;">
  <div class="embed-popup-message-form">
    <div class="proposal-popup">
        <!-- Free Proposal Form -->
        <form class="fp-form" action="/thank-you" method="POST">
            <h2>Enter your details</h2>
            <div class="form-mid row">
                <div class="col-12 mb-2">
                    <input type="text" class="form-control" name="lead_name" placeholder="First Name*" required="" />
                </div>
                <div class="col-12 mb-2">
                    <input type="tel" class="form-control" name="lead_phone" placeholder="Phone*" required="" />
                </div>
                <div class="col-12 mb-2">
                    <input type="email" class="form-control" name="lead_email" placeholder="Email*" data-parsley-error-message="Please enter a valid email address" data-parsley-trigger="change" required="" />
                </div>
                <div class="col-12 mb-2">
                    <textarea class="form-control" name="lead_message" rows="5" placeholder="Message*"></textarea>
                </div>

                <div class="col-12 mt-2">
                    <input type="hidden" name="lead_formname" value="" />
                    <input type="hidden" name="lead_language" value="en" />
                    <input type="hidden" name="lead_formtype" value="" />
                    <button type="submit" class="form-control btn fp-btn fp-btn-orange fp-btn-shadow" >GET A FREE PROPOSAL</button>
                </div>
            </div>
        </form>
        <!-- End of Form -->
    </div>
</div>
</div>

<script>
	tippy(".showpopupmessage", {
    html: ".embed-popup-message-form",
    arrow: true,
    trigger: "click",
    interactive: true,
    arrow: true,
    placement: "bottom",
    flip: false,
    animation: "shift-toward",
    inertia: true,
    distance: 15,
    arrowTransform: "scaleX(1.5)",
  });
</script>


<?php get_footer(); ?>