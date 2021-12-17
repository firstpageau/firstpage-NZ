<?php
	$dropdown = get_field('dropdown');
?>
<?php //Default banner ?>
<?php if($dropdown == 'Default'): ?>
<section class="banner form-space home-banner">
    <?php if ( have_rows( 'banner_slider' ) ) : ?>
    <?php while ( have_rows( 'banner_slider' ) ) : the_row(); ?>
    <?php if ( have_rows( 'banner_content' ) ) : while ( have_rows( 'banner_content' ) ) : the_row();
			$desktop = get_sub_field('banner_right_desktop_image');
			$tablet = get_sub_field('banner_right_tablet_image');
			$mobile = get_sub_field('banner_right_mobile_image');
	?>
    <div class="container banner-hero">
        <div class="banner-hero-cont">
            <?php if(get_sub_field('primary_heading')): ?>
                <h1 class="form-hide text-xs-center"><?php the_sub_field('primary_heading'); ?></h1>
            <?php endif; ?>
            <div class="banner-description">
                <?php if(get_sub_field('banner_description')): ?>
                <p class="form-hide">
                    <?php the_sub_field('banner_description'); ?>
                </p>
                <?php endif; ?>
                <div class="form-hide hero-mobile"> 
                    <img src="<?php echo $mobile['url']; ?>"
                        srcset="<?php echo $mobile['url']; ?>, <?php echo $mobile['url']; ?>"
                        alt="<?php echo $mobile['alt']; ?>" />
                </div>
            </div>
            <?php get_template_part( 'forms/form-services' ); ?>
        </div>
        <div class="text-center text-md-left awards-badges relative">
            <img src="/wp-content/themes/firstpage/img/img_banner_badges_lg.svg"
                class="img-fluid d-none d-sm-inline-block" alt="" />
            <img src="/wp-content/themes/firstpage/img/img_banner_badges_sm.svg" class="img-fluid d-sm-none" alt="" />
        </div>
        <div class="hero-img d-none d-md-block d-lg-none">
            <img src="<?php echo $tablet['url']; ?>"
                srcset="<?php echo $tablet['url']; ?>, <?php echo $tablet['url']; ?>"
                alt="<?php echo $tablet['alt']; ?>" />
        </div>
        <div class="hero-img d-none d-lg-block">
            <img src="<?php echo $desktop['url']; ?>"
                srcset="<?php echo $desktop['url']; ?>, <?php echo $desktop['url']; ?>"
                alt="<?php echo $desktop['alt']; ?>" />
        </div>
        <?php if(get_sub_field('name_tag')): ?>
            <div class="name-tag">
                <h3><b><?php the_sub_field('name_tag'); ?></b> - First Pager</h3>
            </div>
        <?php endif; ?>
    </div>
    <?php endwhile; endif; ?>
    <?php endwhile; ?>
    <?php endif; ?>
</section>
<?php endif; ?>



<?php //Right cut off location banner ?>
<?php if($dropdown == 'Right cut off - Location'): ?>
<div class="right-cut-off-banner">
<section class="banner form-space container"> 
    <?php if ( have_rows( 'banner_slider' ) ) : ?>
    <?php while ( have_rows( 'banner_slider' ) ) : the_row(); ?>
    <?php if ( have_rows( 'banner_content' ) ) : while ( have_rows( 'banner_content' ) ) : the_row();
			$desktop = get_sub_field('banner_right_desktop_image');
			$tablet = get_sub_field('banner_right_tablet_image');
			$mobile = get_sub_field('banner_right_mobile_image');
	?>
    <section class="form-space" style="">
        <div class="container banner-hero">
            <div class="banner-hero-cont">
                <h1 class="form-hide text-center text-sm-left"><?php the_sub_field('primary_heading'); ?></h1>

                <div class="banner-img-mb d-sm-none form-hide">
                    <img src="<?php echo $mobile['url']; ?>" alt="First Page" />
                </div>
                <?php get_template_part( 'forms/form-services' ); ?>
                <div class="text-center text-md-left awards-badges relative">
                    <img src="/wp-content/themes/firstpage/img/img_banner_badges_lg.svg"
                        class="img-fluid d-none d-sm-inline-block" alt="" />
                    <img src="/wp-content/themes/firstpage/img/img_banner_badges_sm.svg" class="img-fluid d-sm-none"
                        alt="" />
                </div>
            </div>
        </div>
    </section>

    <?php endwhile; endif; ?>
    <?php endwhile; ?>
    <?php endif; ?>
</section></div>
<?php endif; ?>


<?php //Full background image banner ?>
<?php if($dropdown == 'Full background image'): ?>
<section class="banner form-space home-banner">
    <?php if ( have_rows( 'banner_slider' ) ) : ?>
    <?php while ( have_rows( 'banner_slider' ) ) : the_row(); ?>
    <?php if ( have_rows( 'banner_content' ) ) : while ( have_rows( 'banner_content' ) ) : the_row();
			$desktop = get_sub_field('banner_right_desktop_image');
			$tablet = get_sub_field('banner_right_tablet_image');
			$mobile = get_sub_field('banner_right_mobile_image');
	?>
    <section class="form-space">
        <div class="container banner-hero" style="background-image: url(<?php echo $mobile['url']; ?>);">
            <div class="banner-hero-cont">
                <h1 class="form-hide text-center text-sm-left"><?php the_sub_field('primary_heading'); ?></h1>

                <div class="banner-img-mb d-sm-none form-hide">
                    <img src="<?php echo $mobile['url']; ?>" alt="First Page" />
                </div>
                <?php get_template_part( 'forms/form-services' ); ?>
                <div class="text-center text-md-left awards-badges relative">
                    <img src="/wp-content/themes/firstpage/img/img_banner_badges_lg.svg"
                        class="img-fluid d-none d-sm-inline-block" alt="" />
                    <img src="/wp-content/themes/firstpage/img/img_banner_badges_sm.svg" class="img-fluid d-sm-none"
                        alt="" />
                </div>
            </div>
        </div>
    </section>

    <?php endwhile; endif; ?>
    <?php endwhile; ?>
    <?php endif; ?>
</section>
<?php endif; ?>

<?php if($dropdown == 'Full background image with text center'): ?>
<div class="full_background_image_with_text_center">
    <?php if ( have_rows( 'banner_slider' ) ) : ?>
    <?php while ( have_rows( 'banner_slider' ) ) : the_row();
    $background_image = get_sub_field('banner_background'); ?>
    <?php if ( have_rows( 'banner_content' ) ) : while ( have_rows( 'banner_content' ) ) : the_row();
			$desktop = get_sub_field('banner_right_desktop_image');
			$tablet = get_sub_field('banner_right_tablet_image');
			$mobile = get_sub_field('banner_right_mobile_image');
	?>
    <section class="banner contact-us" style="background-image:url('<?php echo $background_image['url']; ?>');">
        <div class="container">
            <div class="quote-form">
                <div class="text-center form-thankyou">
                    <?php if(get_sub_field('secondary_text')): ?>
                        <?php the_sub_field('secondary_text'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; endif; ?>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php endif; ?>

<?php if($dropdown == 'Full background image with text left'): ?>
    <div class="full_background_image_with_text_left">
        <?php if ( have_rows( 'banner_slider' ) ) : ?>
    <?php while ( have_rows( 'banner_slider' ) ) : the_row();
    $background_image = get_sub_field('banner_background'); ?>
    <?php if ( have_rows( 'banner_content' ) ) : while ( have_rows( 'banner_content' ) ) : the_row();
			$desktop = get_sub_field('banner_right_desktop_image');
			$tablet = get_sub_field('banner_right_tablet_image');
			$mobile = get_sub_field('banner_right_mobile_image');
	?>
    <section class="banner whoWeAreSection" style="background-image:url('<?php echo $background_image['url']; ?>');">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 text-center text-md-left text-lg-left who-we-are-h1">
					<h1><?php the_sub_field('primary_heading'); ?></h1>
					<p class="subHeading"><?php the_sub_field('banner_description'); ?>
					</p>
					<button type="button" class="btn fp-btn fp-btn-orange showpopupmessage" data-tippy-interactive="true" data-tippy-theme="dark" data-tippy-placement="bottom" data-tippy-html="#pop-up-message-form" data-tippy-trigger="click">KEEN TO HEAR MORE?</button>
				</div>
			</div>
		</div>
	</section>
    <?php endwhile; endif; ?>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
<?php endif; ?>

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