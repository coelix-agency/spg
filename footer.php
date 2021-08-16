<?php
defined( 'ABSPATH' ) || exit;
/**
 * The footer for our theme
 * @package kt
 */
?>
        </main>


        <?php
            /**
             * footer_parts hook
             *
             * @hooked spg_footer_TagFooterForm - 10
             * @hooked spg_footer_TagFooterOpen - 20
             * @hooked spg_footer_TagFooterInner - 30
             * @hooked spg_footer_TagFooterClose - 100
             *
             */
            do_action('footer_parts');
        ?>

    </div>

    <?php wp_footer(); ?>

</body>
</html>
