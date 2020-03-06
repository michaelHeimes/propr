<div class="module-how-to-hire <?php if( $color = !get_sub_field('background_color') ): ?>no-bg-color<?php endif;?>">
    <div class="container">
	    
        <div class="row" <?php if( $color = get_sub_field('background_color') ): ?>style="background-color:<?php echo $color; ?>"<?php endif; ?>>
	        
	        <div class="left col-sm-12 col-md-7">
	        
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

                <?php if( $service_list = get_sub_field('service_list') ): ?>
                    <div class="service-list-wrap">
                        <?php echo $service_list ?>
                    </div>
                <?php endif; ?>  
                
				<?php 
				$link = get_sub_field('more_link');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
				    <a class="arrow-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><img src="/wp-content/themes/propr/assets/img/Arrow-Black.svg"/></a>
				<?php endif; ?>
			         
            </div>
                    
	        
	        <?php if( have_rows('expanded_service_rows') ):?>
			<div class="right col-sm-12 col-md-5">	       
				<div class="section-title"><h2>Services</h2></div> 
	        	<?php while ( have_rows('expanded_service_rows') ) : the_row();?>	
	        	
	        	<?php if( have_rows('single_service') ):?>
	        		<?php while ( have_rows('single_service') ) : the_row();?>	
	        		
		        		
		        		<div class="single-service-row-wrap">
			        		
			        		<div class="single-service-row">
	        		
				        		<div class="icon-wrap">
				            		
									<?php 
									$image = get_sub_field('icon');
									if( !empty( $image ) ): ?>
									    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
				            		
				        		</div>
				        		
				        		<div class="text-wrap">
									
									<?php if( $heading = get_sub_field('heading') ): ?>
					                    <h3><?php echo $heading ?></h3>
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
			</div>
	        <?php endif;?>

        </div>

    </div>
</div>  