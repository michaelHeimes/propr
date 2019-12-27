<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="post-inline-cta">
                <div class="row justify-content-sm-center justify-content-lg-start">
                    <div class="col-sm-10 col-lg-6 offset-lg-1">
                    <?php if($title = get_sub_field('title')): ?>
                        <h4><?php echo $title; ?></h4>
                    <?php endif; ?>
                    </div>
                    <div class="col-sm-10 col-lg-3 offset-lg-1 inline-cta-actions">
                        <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-lg btn-rounded btn-shadow"><?php the_sub_field('button_label'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>