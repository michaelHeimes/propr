<div class="module-home_about">
	
    <div class="container">
    
        <div class="row">
    
            <div class="left col-md-12 col-lg-6">
	            
	            <div class="inner">
    
	                <?php if( $heading = get_sub_field('heading') ): ?>
	    
	                    <h2><?php echo $heading ?></h2>
	    
	                <?php endif; ?>
	    
	                <?php if( $large_copy = get_sub_field('large_copy') ): ?>
	    
	                    <div class="lg-copy-wrap">
		                    <?php echo $large_copy ?>
		                </div>
	    
	                <?php endif; ?>
	                
	                <?php if( $small_copy = get_sub_field('small_copy') ): ?>
	    
	                    <div class="sm-copy-wrap">
		                    <?php echo $small_copy ?>
		                </div>
	    
	                <?php endif; ?>
	                
	                <?php 
					$link = get_sub_field('link');
					if( $link ): 
					    $link_url = $link['url'];
					    $link_title = $link['title'];
					    $link_target = $link['target'] ? $link['target'] : '_self';
					    ?>
					    <a class="arrow-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><img src="/wp-content/themes/propr/assets/img/Arrow-Pink.svg"/></a>
					<?php endif; ?>
					
	            </div>
    
            </div>
            
            <div class="right col-md-12 col-lg-6">
				<div class="inner pinned-space-wrap">
					<div id="space" style="<?php if( $background_image = get_sub_field('parallax_background_image') ){ echo 'background-image: url(' . $background_image . ');'; } ?>"></div>
					
					<div id="moon-wrap">
						<img id="moon" src="<?php the_sub_field('parallax_foreground_image');?>"/>
<!-- 						<img id="moon-blur" src="<?php the_sub_field('parallax_foreground_image_blurred');?>"/> -->
					</div>
					
					
				</div>
            </div>
    
        </div>
    
    </div>
    
</div>