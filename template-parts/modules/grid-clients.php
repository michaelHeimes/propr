<div class="module-clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <?php if( $title = get_sub_field('title') ): ?>
                <div class="section-title">
                    <h2><?php echo $title ?></h2>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <?php if( $description = get_sub_field('subtitle') ): ?>
                    <p class="section-description"><?php echo $description ?></h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>