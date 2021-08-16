<?php 
/*
 * Page: Text
 */
defined( 'ABSPATH' ) || exit;
?>


<!-- Text -->
<div class="text_page">

    <?= get_template_part( 'template-parts/partials/_partial', 'pagehead' ); ?>

    <!-- Text -->
    <section>

        <!-- container -->
        <div class="container-fluid">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-sm-12">

                    <!-- content -->
                    <div class="text_page__content">

                        <?= the_content() ?>

                    </div>
                    <!-- end content -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End text -->

</div>
<!-- End text -->
