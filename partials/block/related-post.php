<?php $post_object = get_sub_field('related_article'); ?>                       
<?php 
        if( $post_object ): ?>

        <?php

            // override $post
            $post = $post_object;
            setup_postdata( $post ); 
        
            ?>

<?php 
    $author = get_the_author();
    $image = get_field('thumbnail');
?>
<div class="col-md-6 col-sm-10">
    <div class="post-card">
        <div class="post-card-wrapper">
            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
            <?php if($subtitle = get_field('subtitle')): ?>
                <h3><?php echo $subtitle; ?></h3>
            <?php endif; ?>
            <p class="author">By: <?php echo $author; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php the_date('m/Y'); ?></p>
            <div class="post-card-thumb">
                <?php if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

            
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>