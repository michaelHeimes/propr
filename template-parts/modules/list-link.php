<?php $columns = get_sub_field('columns') ? get_sub_field('columns') : 4; ?>

<div class="module-links">
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
            <div class="col-md-8 col-sm-12">
                <div class="row">
                    <?php foreach( get_sub_field('list_links') as $link ): ?>
                        <div class="grid-item col-md-<?php echo floor( 12/$columns ); ?>"><?php
                            if( $url = $link['url'] ): ?>
                                <a href="<?php echo $url; ?>"><?php
                            endif;

                            echo $link['text'];

                            if( $url ): ?>
                                </a><?php
                            endif; ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>