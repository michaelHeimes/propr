<div class="module-media">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12">
                <?php if( $title = get_sub_field('title') ): ?>
                    <div class="section-title">
                        <h2><?php echo $title ?></h2>
                    </div>
                <?php endif; ?>
                <?php if( $description = get_sub_field('subtitle') ): ?>
                    <p class="section-description"><?php echo $description ?></h2>
                <?php endif; ?>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <?php foreach( get_sub_field('list_media') as $media ): ?>
                        <div class="grid-item col-md-<?php if( $media['full_width'] ){ echo 12 .' media-full'; } else { echo 6; } ?> col-sm-12"><?php

                            switch($media['grid_type']){
                                case 'blank': continue; break;
                                case 'image':
                                case 'video': ?>
                                    <div class="grid-item-image"><?php
                                        if( $url = $media['url']): ?>
                                            <a data-fancybox="gallery-<?php echo $module_id ?>" href="<?php echo $media['url'] ?>"><?php
                                        endif; ?>

                                        <img class="img-fluid" src="<?php echo $media['image']; ?>" /><?php

                                        if( $url = $media['url']): ?>
                                            </a><?php
                                        endif; ?>

                                    </div><?php
                                    break;
                                case 'text': ?>
                                    <div class="grid-item-text">
                                        <?php echo $media['content']; ?>
                                    </div> <?php
                                    break;
                            } ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>