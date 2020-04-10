<div class="module-two-col_imgs_16_9 <?php if ($custom_class = get_sub_field('custom_class')){ echo $custom_class; }; ?>">
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
        
        <div class="row">

			<?php if( have_rows('images') ):?>
				<?php while ( have_rows('images') ) : the_row();?>	
				
				
	            <div class="col-12 col-lg-6">
						
						<?php $image = get_sub_field('image'); 
						$image_size = 'two_col_16_9';
						$image_url = $image['sizes'][$image_size];
						if($image): //dont output an empty image tag ?>
							<img src="<?php echo $image_url; ?>" width="<?php echo $image['sizes']['two_col_16_9-width']; ?>" height="<?php echo $image['sizes']['two_col_16_9-height']; ?>" alt="<?php echo $image['caption']; ?>" />
						<?php endif; ?>

                </div>
				
				<?php endwhile;?>
			<?php endif;?>
            
        </div>
        
    </div>
</div>