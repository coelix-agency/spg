<?php
/*
Template Name: Contact Page
Template Post Type: page
*/

get_header();
/**
 * Telephones
 */
$telephones = get_field( 'phone_list', get_the_ID() );

/**
 * E-mail
 */
$email = get_field( 'email', get_the_ID() );
?>

    <?php
    /**
     * Hook: spg_header_page.
     *
     * @hooked spg_header_page_breadcrumbs - 10
     * @hooked spg_header_page_title - 15
     */
    do_action( 'spg_header_page' );
    ?>

    <div class="contacts-block">
        <div class="container">
            <div class="contacts-block__container">
                <div class="contacts-block__left">
                    <?= the_content() ?>

                    <?php if( $telephones ) : ?>
                        <div class="contacts-block__links">
                            <div class="contacts-block__icon">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 12.5C15.75 12.5 14.55 12.3 13.43 11.93C13.2542 11.874 13.0664 11.8667 12.8868 11.909C12.7072 11.9513 12.5424 12.0415 12.41 12.17L10.21 14.37C7.37119 12.9262 5.06378 10.6188 3.62 7.78L5.82 5.57C5.95245 5.44434 6.04632 5.28352 6.0906 5.1064C6.13488 4.92928 6.12773 4.7432 6.07 4.57C5.69065 3.41806 5.49821 2.2128 5.5 1C5.5 0.45 5.05 0 4.5 0H1C0.45 0 0 0.45 0 1C0 10.39 7.61 18 17 18C17.55 18 18 17.55 18 17V13.5C18 12.95 17.55 12.5 17 12.5ZM16 9H18C18 6.61305 17.0518 4.32387 15.364 2.63604C13.6761 0.948211 11.3869 0 9 0V2C12.87 2 16 5.13 16 9ZM12 9H14C14 6.24 11.76 4 9 4V6C10.66 6 12 7.34 12 9Z" fill="black"></path>
                                </svg>
                            </div>
                            <?php
                            foreach ( $telephones as $item ) :
                                echo '<a href="tel:' . $item['phone'] . '" class="contacts-block__phone">' . $item['phone'] . '</a>';
                            endforeach;
                            ?>
                        </div>
                    <?php endif; ?>

                    <?php if( ! empty( $email ) ) : ?>
                        <div class="contacts-block__links">
                            <div class="contacts-block__icon"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 0.950012C4.48 0.950012 0 5.43001 0 10.95C0 16.47 4.48 20.95 10 20.95H15V18.95H10C5.66 18.95 2 15.29 2 10.95C2 6.61001 5.66 2.95001 10 2.95001C14.34 2.95001 18 6.61001 18 10.95V12.38C18 13.17 17.29 13.95 16.5 13.95C15.71 13.95 15 13.17 15 12.38V10.95C15 8.19001 12.76 5.95001 10 5.95001C7.24 5.95001 5 8.19001 5 10.95C5 13.71 7.24 15.95 10 15.95C11.38 15.95 12.64 15.39 13.54 14.48C14.19 15.37 15.31 15.95 16.5 15.95C18.47 15.95 20 14.35 20 12.38V10.95C20 5.43001 15.52 0.950012 10 0.950012ZM10 13.95C8.34 13.95 7 12.61 7 10.95C7 9.29001 8.34 7.95001 10 7.95001C11.66 7.95001 13 9.29001 13 10.95C13 12.61 11.66 13.95 10 13.95Z" fill="black"></path>
                                </svg>
                            </div>
                            <a href="mailto:<?= $email ?>" class="contacts-block__email"><?= $email ?></a>
                        </div>
                    <?php endif; ?>

                </div>
                <div class="contacts-block__right">

                    <?= do_shortcode( '[contact-form-7 id="213" title="Contacts Feedback" html_class="contacts-block__form"]' ) ?>

                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
