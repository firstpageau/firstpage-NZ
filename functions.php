<?php
define('THEME_DIR_PATH', get_template_directory());
define('THEME_DIR_URI', get_template_directory_uri());
require get_template_directory() . '/inc/default-setup.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/acf-functions.php';
/********/
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

//datepicker
function wpse_enqueue_datepicker() {
    // Load the datepicker script (pre-registered in WordPress).
    wp_enqueue_script( 'jquery-ui-datepicker' );
    // You need styling for the datepicker. For simplicity I've linked to Google's hosted jQuery UI CSS.
    wp_register_style( 'jquery-ui', 'https://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css' );
    wp_enqueue_style( 'jquery-ui' );
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_datepicker' );

//enqueue admin style
function enqueue_admin_style() {
	if(is_admin()) {
		wp_enqueue_style( 'custom-admin-style', get_template_directory_uri() . '/lib/css/custom-admin-style.css?time=' . filemtime(get_stylesheet_directory() . "/lib/css/custom-admin-style.css") );
	}
}
add_action('init', 'enqueue_admin_style');

// wordpress login logo change
function login_css() {
	wp_enqueue_style( 'login_css', get_template_directory_uri() . '/lib/css/custom-admin-style.css?time=' . filemtime(get_stylesheet_directory() . "/lib/css/custom-admin-style.css") );
}
add_action('login_head', 'login_css');

/*** Remove Query String from Static Resources ***/
function remove_cssjs_ver( $src ) {
	if( strpos( $src, '?ver=' ) )
	$src = remove_query_arg( 'ver', $src );
	return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );


add_filter('the_content', 'add_to_context',1);
function add_to_context($data) {
    $config = array(
        'site_name'         => 'firstpage',
        'site_phone'        => '1300 479 226',
        'site_email'        => 'info@firstpage.com.au',
        'site_address'      => 'Lv 6, 534 Church Street,<br />Cremorne VIC 3121',
        'session_value'     => '$2000',
        'session_value_alt' => '$2000',
        'review_id'         => '',
        'gtm_id'            => '',
        'gtag_id'           => '',
        'gtag_label'        => '',
        'map_api_key'   => 'AIzaSyDrvVkXhmGglK_A80mh_1grmeBAcMJCG0o',
        'map_location'  => json_encode(
            array( 
                'lat'     => -37.828710,
                'lng'     => 144.997180,
                'name'    => 'First Page',
                'address' => 'Lv 6, 534 Church Street, Cremorne VIC 3121'
            )
        ),
    );

    $output = array_merge($config, $data);
    return $output;
}

function my_scripts() {
    // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri() . '/js/defaults/custom-script.js' );
	wp_enqueue_script( 'custom-script' );
	wp_register_script( 'map', get_template_directory_uri() . '/js/defaults/map.js' );
	wp_enqueue_script( 'map' );
	wp_register_script( 'navigation', get_template_directory_uri() . '/js/defaults/navigation.js' );
	wp_enqueue_script( 'navigation' );
    wp_register_script( 'strategy-forms', get_template_directory_uri() . '/js/defaults/strategy-forms.js' );
	wp_enqueue_script( 'strategy-forms' );
    wp_register_script( 'strategy-form-free-proposal', get_template_directory_uri() . '/js/defaults/strategy-form-free-proposal.js' );
	wp_enqueue_script( 'strategy-form-free-proposal' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

// This theme uses wp_nav_menu() in two locations.  
register_nav_menus( array(  
'primary_navigation' => __( 'First Page Primary Navigation', 'firstpage' ),
'mobile_google_ads' => __( 'Mobile Google Ads Navigation', 'firstpage' ),
'mobile_social' => __( 'Mobile Social Navigation', 'firstpage' ),
'mobile_other_services' => __( 'Other Services Navigation', 'firstpage' ),
'mobile_free_tools' => __( 'Mobile Free Tools Navigation', 'firstpage' ),
'mobile_about_us' => __( 'Mobile About Us Navigation', 'firstpage' ),
'footer_services_menu' => __( 'Footer Services Navigation', 'firstpage' ),
'footer_company_menu' => __( 'Footer Company Navigation', 'firstpage' ),
) ); 