<div class="module-cta">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12">
                <?php if( $title = get_sub_field('title') ): ?>
                    <div class="section-title">
                        <h2><?php echo $title ?></h2>
                    </div>
                <?php endif; ?>
                <?php if( $description = get_sub_field('subtitle') ): ?>
                    <p class="section-description"><?php echo $description ?></h2>
                <?php endif; ?>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12">
                <?php if( $url = get_sub_field('button_url') ): ?>
                    <div class="cta-wrapper">
                        <a class="btn btn-white" href="<?php echo $url; ?>"><?php echo get_sub_field('button_text') ? get_sub_field('button_text') : 'Learn More' ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>