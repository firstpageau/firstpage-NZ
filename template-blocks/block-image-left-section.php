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

<div class="<?php echo $animation; ?> block block--image-left <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>" style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;" data-<?php the_sub_field('layout'); ?>="true">
	
	<?php if($layout == 'full-width'): ?>
		<div class="container">
	<?php endif; ?>

		<div class="block-image-left-section">
			<section class="section-paragraph section-paragraph-home">
					<div class="row no-gutters align-items-center flex-column-reverse flex-lg-row">
						<div class="col-12 col-md-6 image-container-left">
							<?php 
							$image = get_sub_field('left_long_image');
							if( !empty( $image ) ): ?>
							<img src="<?php echo $image['url']; ?>"  srcset="<?php echo $image['url']; ?>, <?php echo $image['url']; ?>" class="img-fluid d-xxl-inline-block d-none d-lg-inline-block" alt="<?php echo $image['alt']; ?>" />
							<?php endif; ?>
						</div>
						<div class="col-12 col-md-6 text-container">
                            <h2><?php the_sub_field('long_image_heading'); ?></h2>
                            	<?php 
							$image = get_sub_field('left_long_image');
							if( !empty( $image ) ): ?>
							<img src="<?php echo $image['url']; ?>"  srcset="<?php echo $image['url']; ?>, <?php echo $image['url']; ?>" class="img-fluid d-xxl-inline-block d-block d-lg-none pb-4" alt="<?php echo $image['alt']; ?>" />
							<?php endif; ?>
                            <div class="text-center-content">
						        <?php the_sub_field('long_image_content'); ?>
                            </div>
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

  //Form Handle
  $(document).on("click", 'form.fp-form button[type="submit"]', function () {
  var $this = $(this);
  var $form = $this.closest("form.fp-form");

  if ($form.length > 0) {
    $form.parsley().validate();

    if ($form.parsley().isValid()) {
      var $currentstep = $form.find(".form-step:visible");
      var $thankyou = $form.find(".form-thankyou");
      console.log("123");

      // Add Spinner
      //$this.append(' <i class="fa fa-spinner fa-spin"></i>');
      $this.html('Generating... <i class="fa fa-spinner fa-spin"></i>');
      //console.log('*** Form 1 ***');

      // Send Ajax
      $.ajax({
        url: wpSiteUrl + "/action/hubspot/submit.php",
        type: "post",
        dataType: "json",
        data: $form.serialize() + "&lead_sitename=" + wpSiteName,
        success: function (data) {
          $this.html('Redirecting... <i class="fa fa-spinner fa-spin"></i>');

          var result = data.result;
          // Regardless if it's successful, otherwise: if (result == "success") {

          window.dataLayer = window.dataLayer || [];
          window.dataLayer.push({
            event: "formSubmissionSucess",
            eventCategory: "Form Submission",
            eventAction: formPath,
            eventLabel: "Submitted-" + pathname,
          });

          // Check Product Type
          if ($form.find("input[name=lead_producttype]").val() == "traffic") {
            var cookieName = "fp_float_form";
            var cookieVal = "1";
            var cookieDur = 180;

            // Save in cookie to prevent further popups
            createCookie(cookieName, cookieVal, cookieDur);
          }

          // If Redirect URL exists
          if (!!$form.attr("action")) {
            window.location.href = $form.attr("action");

            // If Thank You step exists
          } else if ($thankyou.length > 0) {
            $currentstep.fadeOut("fast", function () {
              $thankyou.fadeIn();
            });

            if (
              typeof gaIdLabel !== "undefined" &&
              typeof gtag !== "undefined"
            ) {
              gtag("event", "conversion", { send_to: gaIdLabel });
            }
          }

          return false;
        },
      });

      return false;
    }
  }
});
</script>