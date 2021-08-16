<?php
defined( 'ABSPATH' ) || exit;

/**
 * CSS files
 * @add_action
 * @wp_enqueue_scripts
 * @spg_styles
 */
add_action( 'wp_enqueue_scripts', 'spg_styles' );
function spg_styles() {
	/**
	 * Enqueue Style
	 * @wp_enqueue_style
	 */
    wp_enqueue_style( 'fonts-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', [], null );
    wp_enqueue_style( 'bundle-kt', TEMPLATE_PATH . '/assets/css/bundle.css', [], '2.4.6' );


}
/**
 * JS files
 * @add_action
 * @wp_enqueue_scripts
 * @spg_scripts
 */
add_action( 'wp_enqueue_scripts', 'spg_scripts' );
function spg_scripts() {

	/**
	 * Enqueue Script
	 * @wp_enqueue_script
	 */

    wp_enqueue_script( 'bundle-modules-kt', TEMPLATE_PATH . '/assets/js/bundle.js', ['jquery'], '1.1.6', true );
    wp_enqueue_script( 'bundle-script-kt', TEMPLATE_PATH . '/assets/js/script.js', ['jquery'], '1.1.6', true );

}

/**
 * Remove CSS
 * @wp_enqueue_scripts
 * @spg_dequeue_style
 * @wp_dequeue_style
 * @wp_dequeue_script
 */
add_action( 'wp_enqueue_scripts', 'spg_dequeue_style' );
function spg_dequeue_style() {

    /*
     * Contact Form
     */
    wp_dequeue_style( 'contact-form-7' );
	/*
	 * JS
	 */
    wp_deregister_script( 'wp-embed' );
    wp_dequeue_script( 'wp-embed-js' );
	wp_dequeue_script( 'wc_price_slider' );
	wp_dequeue_script( 'wc-chosen' );
	wp_dequeue_script( 'prettyPhoto' );
	wp_dequeue_script( 'prettyPhoto-init' );
	wp_dequeue_script( 'jquery-blockui' );
	wp_dequeue_script( 'jquery-placeholder' );
	wp_dequeue_script( 'fancybox' );
	wp_dequeue_script( 'jqueryui' );
	wp_dequeue_script( 'flexslider' );
	wp_dequeue_script( 'zoom' );
	wp_dequeue_script( 'photoswipe' );
    wp_dequeue_style( 'dashicons' );
    wp_dequeue_style( 'tawcvs-frontend' );
    wp_dequeue_style( 'dashicons' );
}
