<div class="module-four-column">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 module-title">
                <?php if($title = get_sub_field('title')): ?>
                    <h3><?php echo $title; ?></h3>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
        <?php if( have_rows('columns') ): ?>
            <?php while( have_rows('columns') ): the_row(); ?>
                <div class="col-xl-3 content-block">
                <?php if($subtitle = get_sub_field('subtitle')): ?>
                    <h4><?php echo $subtitle; ?></h4>
                <?php endif; ?>
                <?php if($content = get_sub_field('content')): ?>
                    <h4><?php echo $content; ?></h4>
                <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</div>