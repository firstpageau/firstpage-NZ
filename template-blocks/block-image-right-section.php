<?php

	$background = get_sub_field('background');
    $animation = get_sub_field('animation');
    $animation = $animation ? " wow {$animation} " : '';
	$margin = get_sub_field('margin');
	$padding = get_sub_field('padding');
	$customClass = get_sub_field('custom_class');
	$layout = get_sub_field('layout');

	$background_url = '';
	if ( $background['image'] )
		$background_url = wp_get_attachment_image_url( $background['image'], 'full' );

?>

<?php if($layout == 'normal'): ?>
<div class="container">
<?php endif; ?>

<div class="<?php echo $animation; ?> block block--testimonials <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>" style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;" data-<?php the_sub_field('layout'); ?>="true">
	
	<?php if($layout == 'full-width'): ?>
		<div class="container">
	<?php endif; ?>

		<div class="block-image-right-section">
			<section class="section-paragraph section-paragraph-home-2">
				<div class="row no-gutters align-items-center flex-column-reverse flex-md-row flex-md-row-reverse">
					<div class="col-12 col-md-6 image-container-right">
						<?php 
							$image_right = get_sub_field('right_long_image');
							if( !empty( $image_right ) ): ?>
							<?php // var_dump($image_right); ?>
							<img src="<?php echo $image_right['url']; ?>"  srcset="<?php echo $image_right['url']; ?>, <?php echo $image_right['url']; ?>" class="img-fluid d-xxl-inline-block" alt="<?php echo $image_right['alt']; ?>" />
							<?php endif; ?>
					</div>
					<div class="col-12 col-md-6 text-container">
						<?php the_sub_field('long_image_content'); ?>
						<button type="button" class="btn fp-btn fp-btn-orange showpopup" data-tippy-interactive="true" data-tippy-theme="dark" data-tippy-placement="bottom" data-tippy-html="#pop-up-form" data-tippy-trigger="click">Get a free proposal</button>
					</div>
				</div>
			</section>
		</div>
		
	<?php if($layout == 'full-width'): ?>
		</div>
	<?php endif; ?>

</div>

<?php if($layout = 'normal'): ?>
	</div>
<?php endif; ?>

<div id="pop-up-form" style="display: none;">
  <div class="embed-popup-form">
    <div class="proposal-popup">
        <!-- Free Proposal Form -->
        <form class="fp-form" action="" method="POST">
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
                    <input type="text" class="form-control" name="lead_website" placeholder="Website" data-parsley-website-check />
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
	tippy(".showpopup", {
    html: ".embed-popup-form",
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