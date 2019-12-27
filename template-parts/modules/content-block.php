<div class="module-content-block">
    <div class="container">
        <div class="row"> 
            <?php if( have_rows('blocks') ): ?>
                <?php 
                    $block_type = get_sub_field('block_type'); 
                    while( have_rows('blocks') ): the_row(); 
                        $select = get_sub_field_object('block_type');
                        $value = $select['value']; ?>
                        <?php if( $value == 'newsletter' ): ?>
                            <div class="col-md-6">
                                <?php get_template_part( 'partials/block/newsletter', 'signup' ); ?>
                            </div>
                        <?php endif; ?>
                        <?php if( $value == 'share' ): ?>
                            <div class="col-md-6">
                                <?php get_template_part( 'partials/block/share', 'post' ); ?>
                            </div>
                        <?php endif; ?>
                        <?php if( $value == 'related' ): ?>
                            <?php get_template_part( 'partials/block/related', 'post' ); ?>
                        <?php endif; ?>
                        <?php if( $value == 'image' ): ?>
                        <div class="col-md-6">
                            <?php get_template_part( 'partials/block/image' ); ?>
                        </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>