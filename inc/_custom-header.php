<?php
defined( 'ABSPATH' ) || exit;
/**
 * @spg_header_TagHeaderOpen
*/
add_action( 'header_parts', 'spg_header_TagHeaderOpen', 10 );
function spg_header_TagHeaderOpen() {
	?>
  	<!-- HEADER -->
    <header class="header">
	<?php
};
/**
 * @spg_header_TagHeaderInner
*/
add_action( 'header_parts', 'spg_header_TagHeaderInner', 20 );
function spg_header_TagHeaderInner() {
	?>

    <div class="container">
        HEADER
    </div>

	<?php
};
/**
 * @spg_header_TagHeaderClose
*/
add_action( 'header_parts', 'spg_header_TagHeaderClose', 30 );
function spg_header_TagHeaderClose() {
	?>
  	</header>
  	<!-- END HEADER -->
	<?php
};
