<div class="module-section-logo-grid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10">
                <ul class="grid-list">
                    <?php foreach( get_sub_field('logo') as $logo ): ?>
                    <?php $image = $logo['image'] ?>
                        <li><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>