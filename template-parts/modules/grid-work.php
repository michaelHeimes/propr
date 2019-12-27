<div class="module-work">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <?php if( $title = get_sub_field('title') ): ?>
                    <h2><?php echo $title ?></h2>
                <?php endif; ?>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-7">
                <?php if( $description = get_sub_field('subtitle') ): ?>
                <div class="content">
                    <p class="section-description"><?php echo $description ?></h2>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row module-work-items justify-content-lg-center">
            <?php foreach( get_sub_field('list_work') as $work ): ?>
                <div class="grid-item col-lg-6 col-md-9"><?php
                    switch($work['grid_type']){
                        case 'blank': continue; break;
                        case 'work': ?>
                            <div class="grid-item-image"><?php
                                if( $url = $work['url']): ?>
                                    <a href="<?php echo $work['url'] ?>"><?php
                                endif; ?>
                                <?php if($work_img = $work['image']): ?>
                                    <img class="img-fluid" src="<?php echo $work_img['url']; ?>" alt="<?php echo $work_img['alt']; ?>" /><?php
                                endif; ?>
                                <?php if( $url = $work['url']): ?>
                                    </a><?php
                                endif; ?>

                            </div>
                            <div class="grid-item-details">
                                <?php if( $url = $work['url']): ?>
                                    <a href="<?php echo $work['url']; ?>">
                                <?php endif; ?>
                                    <h3><?php echo $work['title']; ?></h3>
                                <?php if( $url = $work['url']): ?>
                                    </a><?php
                                endif; ?>
                                <h4><?php echo $work['services']; ?></h4>
                            </div><?php
                            break;
                        case 'text': ?>
                            <div class="grid-item-text">
                                <?php echo $work['content']; ?>
                            </div> <?php
                            break;
                        case 'newsletter': ?>
                            <?php get_template_part( 'template-parts/modules/newsletter', 'signup' ); 
                        break;
                        case 'image': ?>
                            <div class="grid-item-image"><?php
                                if( $url = $work['url']): ?>
                                    <a href="<?php echo $work['url'] ?>"><?php
                                endif; ?>
                                <?php if($work_img = $work['image']): ?>
                                    <img class="img-fluid" src="<?php echo $work_img['url']; ?>" alt="<?php echo $work_img['alt']; ?>" /><?php
                                endif; ?>
                                <?php

                                if( $url = $work['url']): ?>
                                    </a><?php
                                endif; ?>

                            </div>
                            <?php break; 
                    } ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>