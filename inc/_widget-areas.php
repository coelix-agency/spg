<?php
defined( 'ABSPATH' ) || exit;
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @add_action
 * @widgets_init
 * @spg_widgets_init
 */
add_action( 'widgets_init', 'spg_widgets_init' );
function spg_widgets_init() {

    /**
     * Footer: Меню
     * @register_sidebar
     */
    register_sidebar( array(
        'name'          => esc_html__( 'Footer: Меню Left', 'spg' ),
        'id'            => 'footer-menu-left',
        'class'         => '',
        'description'   => esc_html__( 'Add widgets here.', 'spg' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
        'before_sidebar' => '<div>',
        'after_sidebar'  => '</div>',
    ) );



}

