<div class="module-two-column <?php if ($custom_class = get_sub_field('custom_class')){ echo $custom_class; }; ?>" <?php if( $color = get_sub_field('background_color') ): ?>style="background-color:<?php echo $color; ?>"<?php endif; ?>>
    <div class="container">
        <?php if( $title = get_sub_field('title') ): ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2><?php echo $title ?></h2>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if( $description = get_sub_field('subtitle') ): ?>
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <p class="section-description"><?php echo $description ?></h2>
                </div>
            </div>
        <?php endif; ?>
        <div class="row <?php if( get_sub_field('background_color') && is_hex_dark( get_sub_field('background_color') ) ){ echo 'dark'; } ?>">
            <div class="col-12 col-lg-6 col-sm-10 <?php if( get_sub_field('center_vertical') ){ echo 'center-vertical'; } ?>">
                <div class="content-wrapper <?php if( get_sub_field('center_vertical') ){ echo 'center-vertical'; } ?>">
                    <?php if( $left = get_sub_field('content_left') ): ?>
                        <?php echo $left; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6 col-sm-10 col-12 <?php if( get_sub_field('center_vertical') ){ echo 'center-vertical'; } ?>">
                <div class="content-wrapper <?php if( get_sub_field('center_vertical') ){ echo 'center-vertical'; } ?>">
                    <?php if( $right = get_sub_field('content_right') ): ?>
                        <?php echo $right; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>