<div class="thank-you-message">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-12">
            <?php if($thankYouMessage = get_sub_field('message')): ?>
                <h3><?php echo $thankYouMessage; ?></h3>
            <?php endif; ?>
            </div>
            <div class="col-lg-8 col-sm-12">
            <?php if($image = get_sub_field('image')): ?>
                <img src="<?php echo $image['url']; ?>" alt="">
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>