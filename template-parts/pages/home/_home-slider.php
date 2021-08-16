<?php 
/*
 * Home: Slider
 */
defined( 'ABSPATH' ) || exit;

$field = $args['field'];

?>

<?php if( $field['list'] ) : ?>
    <div class="main-slider">
        <div class="main-slider__container">
            <div class="main-slider__content owl-carousel">

                <?php $i = 1; foreach ( $field['list'] as $item ) : ?>

                <div class="main-slider__slide <?= ($i == 1) ? 'active' : '' ?>" data-pos="<?= $i ?>" style="background: url('<?= wp_get_attachment_image_url($item['image'], 'full') ?>') no-repeat;">
                    <div class="container">
                        <div class="main-slider__content-main">
                            <?= $item['text'] ?>
                        </div>
                    </div>
                </div>

                <?php $i++; endforeach; ?>

            </div>
            <div class="container main-slider__nav">

                <ul class="main-slider__list">

                    <?php $i = 1; $b = 0; foreach ( $field['list'] as $item ) : ?>
                    <li>
                        <a href="<?= $b ?>" data-pos="<?= $i ?>">
                            <div class="main-slider__img"
                                 style="background: url('<?= kama_thumb_src( [ 'w' => 256, 'h' => 144, 'attach_id' => $item['image'] ] ) ?>') no-repeat;">
                                <?= kama_thumb_img( [ 'w' => 256, 'h' => 144, 'attach_id' => $item['image'] ] ) ?>
                            </div>
                            <div class="main-slider__text">
                                <?= $item['title_thumb'] ?>
                                <div class="main-slider__text-over"></div>
                            </div>
                        </a>
                    </li>
                    <?php $i++; $b++; endforeach; ?>
                </ul>

            </div>
        </div>
    </div>
<?php endif; ?>
