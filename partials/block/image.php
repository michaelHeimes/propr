<div class="image-block">
    <?php if ($image = get_sub_field('image')): ?>
        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
    <?php endif; ?>
</div>