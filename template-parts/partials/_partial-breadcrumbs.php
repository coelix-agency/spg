<?php
/*
 * Partial: Breadcrumbs
 */
defined( 'ABSPATH' ) || exit;
?>
<?php if (function_exists('rank_math_the_breadcrumbs')) : ?>
<div class="container">
    <?= rank_math_the_breadcrumbs() ?>
</div>
<?php endif; ?>