<?php
/*
Template Name: Case Study
*/

get_header();?>

<div id="main-content">
	
	<div class="module-hero">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">
	                <h2><?php the_field('small_heading');?></h2>
	                <h1><?php the_field('large_heading');?></h1>
	            </div>
	        </div>
	    </div>
	</div>
	
	<div class="content">

		<div class="quote">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
			            
			            <p><?php the_field('quote_text');?></p>
			            
			            <div class="author">
				            <span class="name">— <?php the_field('quote_author');?>, </span>
				            <span class="cred"><?php the_field('authors_credential');?></span>
			            </div>
	
		            </div>
		        </div>
		    </div>		
		</div>
		
		<div class="offset-caption">
		    <div class="container">
		        <div class="row">
			        
			        <div class="img-wrap col-12 col-lg-8">
				        <?php 
						$image = get_field('ioc_image');
						if( !empty( $image ) ): ?>
						    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
			        </div>
			        
			        <div class="text-wrap col-12 col-lg-8">
				        <?php the_field('ioc_text');?>
			        </div>
			        
		        </div>
		    </div>
		</div>

		<div class="qas">
		    <div class="container">
		        <div class="row">	
			        		
					<div class="col-12 col-md-10 offset-md-2">
						
						<?php if( have_rows('q&as_1') ):?>
							<?php while ( have_rows('q&as_1') ) : the_row();?>	
							
							<?php if( have_rows('single_q&a') ):?>
								<?php while ( have_rows('single_q&a') ) : the_row();?>	
								
								<div class="single-qa">
									
									<h3><span><?php the_sub_field('question');?></span></h3>
									
									<p><?php the_sub_field('answer');?></p>
									
								</div>
							
								<?php endwhile;?>
							<?php endif;?>
						
							<?php endwhile;?>
						<?php endif;?>
						
					</div>
		
		        </div>
		    </div>
		</div>
		
		<div class="four-col-stats">
		    <div class="container">
		        <div class="row">
			        
			        <h2 class="col col-12 text-center"><?php the_field('impact_heading');?></h2>
			        
			        <div class="col col-12">
				        <div class="row">
					        	
			        	<?php if( have_rows('columns') ):?>
			        		<?php while ( have_rows('columns') ) : the_row();?>	
			        	
			        	<?php if( have_rows('single_column') ):?>
			        		<?php while ( have_rows('single_column') ) : the_row();?>	
			        		
			        		<div class="stat-col col col-6 col-md-3 col-lg-3 text-center">
			        		
					        	<div class="figure text-center"><span><?php the_sub_field('figure');?></span></div>
					        	<div class="label text-center"><span><?php the_sub_field('label');?></span></div>
				        	
			        		</div>
			        						        	
			        		<?php endwhile;?>
			        	<?php endif;?>
			        	
			        		<?php endwhile;?>
			        	<?php endif;?>
				        
				        </div>
			        </div>
			        
		        </div>
		    </div>
		</div>
		
		<div class="large-img">
			<div class="container">
			    <div class="row">
				    <div class="col col-12">
						<?php 
						$image = get_field('lg_image');
						if( !empty( $image ) ): ?>
						    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
				    </div>
				
			    </div>
			</div>
			
		</div>


		<div class="three-col-graphic">
			<div class="container">
			    <div class="row">
				    
				    <div class="left col col-12 col-md-4">
					    <h2><?php the_field('tcg_heading');?></h2>
					    
					    <div class="key-wrap">
						    
						    <?php if( have_rows('key_one') ):?>
						    	<?php while ( have_rows('key_one') ) : the_row();?>	
							    <div>
								    <span style="background-color: <?php the_sub_field('dot_color');?>;"></span>
								    <span><?php the_sub_field('label');?></span>
								</div>
						    	<?php endwhile;?>
						    <?php endif;?>

						    <?php if( have_rows('key_two') ):?>
						    	<?php while ( have_rows('key_two') ) : the_row();?>	
							    <div>
								    <span style="background-color: <?php the_sub_field('dot_color');?>;"></span>
								    <span><?php the_sub_field('label');?></span>
								</div>
						    	<?php endwhile;?>
						    <?php endif;?>

					    </div>
					    
				    </div>
				    
				    <div class="right col col-12 col-md-8">
					    
					    <div class="row">
						    
						    <?php if( have_rows('graphics') ):?>
						    	<?php while ( have_rows('graphics') ) : the_row();?>	
								<div class="col col-12 col-md-4 text-center">
								<?php 
								$image = get_sub_field('single_img');
								if( !empty( $image ) ): ?>
								    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
								</div>
						    	<?php endwhile;?>
						    <?php endif;?>
						    
					    </div>
					    
				    </div>
				    
			    </div>
			</div>
		</div>	
		
		
		<div class="two-img-set">
			<div class="container">
			    <div class="row">
				    <?php 
					$image = get_field('left_image');
					if( !empty( $image ) ): ?>
	    			<div class="col col-12 col-md-5">
		    			<div class="image-wrap" style="background-image: url(<?php echo esc_url($image['url']); ?>)"></div>
					</div>
					<?php endif; ?>

				    <?php 
					$image = get_field('right_image');
					if( !empty( $image ) ): ?>
	    			<div class="col col-12 col-md-7">
		    			<div class="image-wrap" style="background-image: url(<?php echo esc_url($image['url']); ?>)"></div>
					</div>
					<?php endif; ?>
				    
			    </div>
			</div>
		</div>
		
		
		<div class="qas qas-2">
		    <div class="container">
		        <div class="row">	
			        		
			        <div class="col col-12">
				        <h2><?php the_field('q&as_2_heading');?></h2>
					</div>
			        		
					<div class="col-12 col-md-10 offset-md-2">
						
						<?php if( have_rows('q&as_2') ):?>
							<?php while ( have_rows('q&as_2') ) : the_row();?>	
														
							<?php if( have_rows('single_q&a') ):?>
								<?php while ( have_rows('single_q&a') ) : the_row();?>	
								
								<div class="single-qa">
									
									<h3><span><?php the_sub_field('question');?></span></h3>
									
									<p><?php the_sub_field('answer');?></p>
									
								</div>
							
								<?php endwhile;?>
							<?php endif;?>
						
							<?php endwhile;?>
						<?php endif;?>
						
					</div>
		
		        </div>
		    </div>
		</div>
		
		
		<div class="post-inline-cta">
			<div class="container">
			    <div class="row">
			        <div class="col-md-12">
		                <?php if($title = get_field('cta_heading')): ?>
		                    <h4><?php echo $title; ?></h4>
		                <?php endif; ?>
			        </div>
			        
			        <div class="col-md-12">
		                <a href="<?php the_field('cta_button_link'); ?>" class="btn"><?php the_field('cta_button_label'); ?></a>
			        </div>
			        
			    </div>
			</div>
		</div>
		
	
	</div>
	
</div> <!-- #main-content -->

<?php get_footer();?>