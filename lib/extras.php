//add gravity forms jQuery to footer 
add_filter("gform_init_scripts_footer", __NAMESPACE__ . "\\init_scripts");
function init_scripts() {
return true;
} 




/**
 * Register xtra image sizes
 */
add_action( 'after_setup_theme', __NAMESPACE__ . "\\newfish_theme_setup" );
function newfish_theme_setup() {
  add_image_size( 'full-width-slider', 2500, 600, true ); // 300 pixels wide (and unlimited height)
  add_image_size( 'site-width', 1200, 370, true );
  add_image_size( 'mobile-width', 500, 350, true ); // (cropped)
}




/**
 * Newfish Branding
 */
function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/dist/styles/login.css' );
}
add_action( 'login_enqueue_scripts',  __NAMESPACE__ . '\\my_login_stylesheet' );

function my_login_logo_url() {
    return 'http://newfish.nl';
}
add_filter( 'login_headerurl',  __NAMESPACE__ . '\\my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Newfish Webdevelopment';
}
add_filter( 'login_headertitle',  __NAMESPACE__ . '\\my_login_logo_url_title' );
