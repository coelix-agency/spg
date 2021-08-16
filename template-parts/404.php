<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package winatlab
 */

get_header();
?>
<!-- 404 -->
<section id="page-404">
    <!-- container -->
    <div class="container">
        <!-- title -->
        <div class="page-404-title">
            <span>4</span>
            <div class="img-wrapper">
                <img
                    src="<?= get_template_directory_uri() ?>/assets/images/icons/plate.png"
                    alt="<?= get_bloginfo('name') ?>"
                    title="<?= get_bloginfo('name') ?>"
                >
            </div>
            <span>4</span></div>
        <!-- end title -->
        <!-- subtitle -->
        <div class="page-404-subtitle">
            Page NotFound
        </div>
        <!-- end subtitle -->

    </div>
    <!-- end container -->
</section>
<!-- end 404 -->
<?php
get_footer();
