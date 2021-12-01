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