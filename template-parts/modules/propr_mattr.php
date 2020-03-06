<div class="module-propr-mattr">
    <div class="container">
	    
        <div class="row">
	        
	        <div class="left col-sm-12 col-md-6">
	        
<!--
				<?php $image = get_sub_field('image'); 
				$image_size = 'propr-mattr';
				$image_url = $image['sizes'][$image_size];
				if($image): //dont output an empty image tag ?>
					<img src="<?php echo $image_url; ?>" width="<?php echo $image['sizes']['propr-mattr-width']; ?>" height="<?php echo $image['sizes']['propr-mattr-height']; ?>" alt="<?php echo $image['caption']; ?>" />
				<?php endif; ?>
-->

				<?php 
				$image = get_sub_field('image');
				if( !empty( $image ) ): ?>
				    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			         
            </div>
                    
	        
			<div class="right col-sm-12 col-md-6">	 
				
				<div class="section-title">
					<h2>Propr Mattr</h2>   
				</div>   
	
				<?php
				$post_object = get_sub_field('post');
				if( $post_object ): 
					$post = $post_object;
					setup_postdata( $post );				
				?>
				
				<h3><?php the_title(); ?></h3>
				
				<a class="arrow-link" href="<?php the_permalink(); ?>">Continue Reading<img src="/wp-content/themes/propr/assets/img/Arrow-Pink.svg"/></a>
				
			    <?php wp_reset_postdata();?>
			
				<?php endif; ?>
	        	
			</div>

        </div>

    </div>
</div>  