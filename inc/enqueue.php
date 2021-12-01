<?php 
/* Enqueue scripts and styles. */
function firstpage_scripts() {
    wp_enqueue_style( 'firstpage-googlefont', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i,800', false );
    wp_enqueue_style( 'firstpage-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css', false );
    wp_enqueue_style( 'firstpage-slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', false );
    wp_enqueue_style( 'firstpage-fancy', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css', false );
    wp_enqueue_style( 'firstpage-animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css', false );
    wp_enqueue_style( 'firstpage-style',  get_template_directory_uri() . '/style.css?time=' . filemtime(get_stylesheet_directory() . "/style.css") );
    
	wp_enqueue_script( 'firstpage-navigation', get_template_directory_uri() . '/js/defaults/navigation.js', array(), '20151215', true );
    wp_enqueue_script( 'firstpage-skip-link-focus-fix', get_template_directory_uri() . '/js/defaults/skip-link-focus-fix.js', array(), '20151215', true );
    
    wp_enqueue_script( 'fontAwesomeKit', 'https://kit.fontawesome.com/6021be3dfe.js', null, null, true );
    wp_enqueue_script( 'jQuery-UI', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', null, null, true );
    wp_enqueue_script( 'matchHeight', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js', null, null, true );
    wp_enqueue_script('firstpage-popperJS', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), null, false);
    wp_enqueue_script('firstpage-bootsrapJS', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js', array(), null, false);
    wp_enqueue_script('firstpage-slickJS', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array(), null, true);
    wp_enqueue_script('firstpage-fancyJS', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js', array(), null, true);
    wp_enqueue_script('firstpage-wowJS', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array(), null, false);
    wp_enqueue_script( 'firstpage-mainJS',  get_template_directory_uri() . '/js/main.js?time=' . filemtime(get_stylesheet_directory() . "/js/main.js"), array(), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'firstpage_scripts' );

