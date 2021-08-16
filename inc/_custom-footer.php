<?php
defined( 'ABSPATH' ) || exit;
/**
 * @spg_footer_TagFooterOpen
*/
add_action( 'footer_parts', 'spg_footer_TagFooterOpen', 20 );
function spg_footer_TagFooterOpen() {
	?>
  	<!-- FOOTER -->
    <footer class="footer">
	<?php
};
/**
 * @spg_footer_TagFooterInner
*/
add_action( 'footer_parts', 'spg_footer_TagFooterInner', 30 );
function spg_footer_TagFooterInner() {
	?>

    <div class="container">
        FOOTER
    </div>

	<?php
};
/**
 * @spg_footer_TagFooterClose
*/
add_action( 'footer_parts', 'spg_footer_TagFooterClose', 100 );
function spg_footer_TagFooterClose() {
	?>
  	</footer>
  	<!-- END FOOTER -->
	<?php
};
