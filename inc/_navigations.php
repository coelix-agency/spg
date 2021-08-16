<?php
defined( 'ABSPATH' ) || exit;
/**
* Navigations
 * @register_nav_menus
*/

/**
 * Register our menu.
 */
register_nav_menus( array(
	'header-menu'           => esc_html__( 'Header: Menu', 'spg' ),
    'footer-menu'           => esc_html__( 'Footer: Menu', 'spg' ),
    'sidebar-menu'          => esc_html__( 'Sidebar: Menu', 'spg' ),
));
