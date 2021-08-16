<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package winatlab
 */

if(is_page('test')) :
    /*
     * Page: Test
     */
    get_template_part( 'template-parts/pages/_page', 'test' );
elseif(is_page('contacts')) :
    /*
     * Page: Contacts
     */
    get_template_part( 'template-parts/pages/_page', 'contacts' );
elseif(is_page('blog')) :
	/*
	 * Page: Blog
	 */
	get_template_part( 'template-parts/pages/_page', 'blog' );
else:
    /*
     * Page: Text
     */
    get_template_part( 'template-parts/pages/_page', 'text' );
endif;
?>
