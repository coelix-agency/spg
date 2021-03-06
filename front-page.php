<?php
defined( 'ABSPATH' ) || exit;
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package umico
 */
get_header();

while ( have_posts() ) : // Start of the loop.

    the_post();

    /**
     * Sections
     */
    $sections = get_field( 'home', get_the_ID() );

    if( $sections ) :
        foreach ( $sections as $section ) :

            get_template_part(
                'template-parts/pages/home/_home',
                $section['acf_fc_layout'],
                [
                    'field' => $section
                ]
            );

        endforeach;
    endif;

endwhile; // End of the loop.

get_footer();
