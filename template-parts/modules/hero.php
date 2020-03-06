<div class="module-hero" style="<?php if( $background_color = get_sub_field('background_color') ){ echo 'background-color: ' . $background_color . ';'; } ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12 <?php if( $background_color && is_hex_dark($background_color) ){ echo 'dark'; } ?>">
                <?php if( $title = get_sub_field('title') ): ?>
                    <h2><?php echo $title ?></h2>
                <?php endif; ?>
                <?php if( $sub_title = get_sub_field('subtitle') ): ?>
                    <h3><?php echo $sub_title ?></h3>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>