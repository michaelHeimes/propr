<div class="module-select-work module-our-services">
    <div class="container">
	    
        <div class="row top">
	        
            <div class="heading-copy-wrap col-md-12 col-sm-12">
	            
                <?php if( $heading = get_sub_field('heading') ): ?>
                    <div class="section-title">
                        <h2><?php echo $heading ?></h2>
                    </div>
                <?php endif; ?>
                                
                <?php if( $copy = get_sub_field('copy') ): ?>
                    <div class="copy-wrap">
                        <?php echo $copy ?>
                    </div>
                <?php endif; ?>                
         
            </div>
            
        </div>
        
        <div class="projects-wrap row align-items-stretch">
        <?php if( have_rows('services') ):?>
        	<?php while ( have_rows('services') ) : the_row();?>	
        	
        	<?php if( have_rows('single_service') ):?>
        		<?php while ( have_rows('single_service') ) : the_row();?>	
        		
        		<div class="single-project col-sm-12 col-md-4">
            		
            		<div class="inner">
            			            		
					<?php $image = get_sub_field('image'); 
					$image_size = 'select-work';
					$image_url = $image['sizes'][$image_size];
					if($image): //dont output an empty image tag ?>
						<div class="img-wrap">
							<img src="<?php echo $image_url; ?>" width="<?php echo $image['sizes']['select-work-width']; ?>" height="<?php echo $image['sizes']['select-work-height']; ?>" alt="<?php echo $image['caption']; ?>" />
						</div>
					<?php endif; ?>
					
						<div class="bottom">
							<?php if( $title = get_sub_field('title') ): ?>
			                    <h3><span><?php echo $title ?></span></h3>
			                <?php endif; ?>
		
							<?php if( $copy = get_sub_field('copy') ): ?>
			                    <p><?php echo $copy ?></p>
			                <?php endif; ?>	
						</div>
						
            		</div>
            		
            		
        		</div>
        	
        		<?php endwhile;?>
        	<?php endif;?>
        
        	<?php endwhile;?>
        <?php endif;?>			
        
        </div>

    </div>
</div>  