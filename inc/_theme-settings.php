<?php
defined( 'ABSPATH' ) || exit;
/**
* Theme Settings
*/
if ( ! function_exists( 'spg_setup' ) ) :

    function spg_setup() {

	    /**
	     * @add_theme_support
	     */
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', array( 'search-form' ) );

        /**
         * Remove Thumbnails
         */
        remove_image_size( 'thumbnail-100x100' );
        remove_image_size( 'thumbnail-150x150' );
        remove_image_size( 'thumbnail-300x300' );

        /**
         * REMOVE EMOJI ICONS
         */
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('wp_print_styles', 'print_emoji_styles');

        /**
         * Enable shortcodes in text widgets
         */
        add_filter('widget_text','do_shortcode');

        /**
         * Enable Except Text All Page
         */
        add_post_type_support( 'page', array('excerpt') );

    }
    spg_setup();

endif;

/**
 * Loads the child theme textdomain.
 */
function spg_child_theme_setup() {
	load_child_theme_textdomain( 'spg', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'spg_child_theme_setup' );

/**
 * SVG Upload
 * @add_filter
 * @upload_mimes
 * @spg_myme_types
 */
add_filter('upload_mimes', 'spg_myme_types', 1, 1);
function spg_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; // поддержка SVG
    return $mime_types;
}
/**
 * ACF Google API KEY
 * @add_action
 * @acf/init
 * @spg_acf_init
 */
add_action('acf/init', 'spg_acf_init');
function spg_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyCSqQeiH6f0iSnHMZ0-WMAcZKkS3dKjEqQ');
}

/**
 * Template Directory
 * @archive_template
 * @add_filter
 * @spg_archive_template
 */
add_filter( 'archive_template', 'spg_archive_template' ) ;
function spg_archive_template( $template ) {
    $template = TEMPLATEPATH . '/template-parts/archive.php';
    return $template;
}

/**
 * Template Directory
 * @single_template
 * @add_filter
 * @spg_single_template
 */
add_filter('single_template', 'spg_single_template' );
function spg_single_template($template){
    $template = TEMPLATEPATH . '/template-parts/single.php';
    return $template;
}

/**
 * Template Directory
 * @404_template
 * @add_filter
 * @spg_single_template
 */
add_filter('404_template', 'spg_404_template' );
function spg_404_template($template){
	$template = TEMPLATEPATH . '/template-parts/404.php';
	return $template;

}

/**
 * Search Redirect
 */
function spg_change_search_url() {

    if ( is_search() && ! empty( $_GET['s'] ) ) :

        wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) );
        exit();

    endif;
}
add_action( 'template_redirect', 'spg_change_search_url' );

/**
 * ADMIN PANEL: Hide Menu
 * @add_action
 * @admin_menu
 * @spg_remove_admin_menu_links
 */
add_action('admin_menu', 'spg_remove_admin_menu_links', 999);
function spg_remove_admin_menu_links() {

    global $menu;

}

/**
 * Disable Auto Update Plugins
 * @is_admin
 */
if( is_admin() ){
    remove_action( 'admin_init', '_maybe_update_core' );
    remove_action( 'admin_init', '_maybe_update_plugins' );
    remove_action( 'admin_init', '_maybe_update_themes' );
    remove_action( 'load-plugins.php', 'wp_update_plugins' );
    remove_action( 'load-themes.php', 'wp_update_themes' );
    add_filter( 'pre_site_transient_browser_'. md5( $_SERVER['HTTP_USER_AGENT'] ), '__return_true' );
}
