<?php $image = get_sub_field('image'); ?>

<section class="section-post-main-image">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
            </div>
        </div>
    </div>
</section>