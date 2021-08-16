<?php
defined( 'ABSPATH' ) || exit;
/**
 * The header for our theme
 * @package kt
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <?php wp_head(); ?>
</head>
<body <?= body_class() ?> >

    <div class="home site">

        <?php
        /**
         * header_parts hook
         *
         * @hooked spg_header_TagHeaderOpen - 10
         * @hooked spg_header_TagHeaderInner - 20
         * @hooked spg_header_TagHeaderClose - 30
         *
         */
        do_action('header_parts');
        ?>
        <main class="main">
