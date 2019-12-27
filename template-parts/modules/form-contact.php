<div class="module-section-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 form-block">
                        <h3>Try Our User Friendly Contact Form</h3>
                        <?php $form = get_sub_field('form');
                                gravity_form($form, false, true, false, '', true, 1); ?>
                    </div>
                <div class="col-md-6">
                    <?php  ?>
                    <?php
                        if( have_rows('images') ):
                            while ( have_rows('images') ) : the_row();
                                get_template_part( 'partials/block/image' );
                            endwhile;
                        else :
                        endif;
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>