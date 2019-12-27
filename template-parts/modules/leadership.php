<section class="section-leadership">
    <div class="leadership-image slanted-img-reverse">
        <?php $image = get_sub_field('image'); ?>
        <img src="<?php echo $image['url']; ?>" alt="">
    </div>
    <div class="leadership-content">
        <?php 
            if( $content = get_sub_field('content') ){
                echo $content;
            }
        ?>
    </div>
</section>