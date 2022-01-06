<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tippy.js/2.5.3/themes/light.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
	<link rel="stylesheet" href="https://use.typekit.net/wqq0bzd.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>

	<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tippy.js/2.5.3/tippy.all.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.0/parsley.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.3.2/rangeslider.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ouibounce/0.0.12/ouibounce.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>

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

	<?php if ( get_field( 'favicon', 'option' ) ) : ?> <link rel="shortcut icon" href="<?php the_field( 'favicon', 'option' ); ?>" /> <?php endif; ?>
	<?php wp_head(); ?>

	</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'firstpage' ); ?></a>
	<header id="masthead" class="site-header">
		<?php get_template_part( 'template-parts/navbar/navbar-default' ); ?>
	</header><!-- #masthead -->

	<?php  get_template_part( 'template-parts/banner/banner' ); ?>

	<div id="content" class="site-content">