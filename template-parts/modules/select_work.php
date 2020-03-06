<div class="module-select-work">
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
        <?php if( have_rows('projects') ):?>
        	<?php while ( have_rows('projects') ) : the_row();?>	
        	
        	<?php if( have_rows('single_project') ):?>
        		<?php while ( have_rows('single_project') ) : the_row();?>	
        		
        		<div class="single-project col-sm-12 col-md-4">
            		
            		<a class="inner" href="<?php the_sub_field('link'); ?>">
            			            		
					<?php $image = get_sub_field('image'); 
					$image_size = 'select-work';
					$image_url = $image['sizes'][$image_size];
					if($image): //dont output an empty image tag ?>
						<img src="<?php echo $image_url; ?>" width="<?php echo $image['sizes']['select-work-width']; ?>" height="<?php echo $image['sizes']['select-work-height']; ?>" alt="<?php echo $image['caption']; ?>" />
					<?php endif; ?>
					
						<div class="bottom">
							<?php if( $title = get_sub_field('title') ): ?>
			                    <h3><span><?php echo $title ?></span></h3>
			                <?php endif; ?>
		
							<?php if( $copy = get_sub_field('copy') ): ?>
			                    <p><?php echo $copy ?></p>
			                <?php endif; ?>	
						</div>
						
            		</a>
            		
            		
        		</div>
        	
        		<?php endwhile;?>
        	<?php endif;?>
        
        	<?php endwhile;?>
        <?php endif;?>
        
        
			<?php 
			$link = get_sub_field('more_work_link');
			if( $link ): 
			    $link_url = $link['url'];
			    $link_title = $link['title'];
			    $link_target = $link['target'] ? $link['target'] : '_self';
			    ?>
			    <div class="col-sm-12"><a class="arrow-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><img src="/wp-content/themes/propr/assets/img/Arrow-White.svg"/></a></div>
			<?php endif; ?>
			
        
        </div>

    </div>
</div>  