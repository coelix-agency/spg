<?php
defined( 'ABSPATH' ) || exit;

/**
 * Breadcrumbs
 * @spg_header_page
 * @spg_header_page_breadcrumbs
 */
add_action( 'spg_header_page', 'spg_header_page_breadcrumbs', 10 );
function spg_header_page_breadcrumbs() {
    get_template_part('template-parts/partials/_partial', 'breadcrumbs');
}

/**
 * Title Page
 * @spg_header_page
 * @spg_header_page_breadcrumbs
 */
add_action( 'spg_header_page', 'spg_header_page_title', 15 );
function spg_header_page_title() {
    get_template_part('template-parts/partials/_partial', 'page_title');
}
