<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kt
 */

get_header();

get_template_part( 'template-parts/single', get_post_type() );

get_footer();
