<div class="quote">
	<div class="container">
		<div class="row">
			
			<div class="break col col-sm-12"></div>
			
			<div class="heading-wrap col col-sm-12 col-md-6 col-lg-4">
				<?php if($heading = get_sub_field('heading')):?>
				<h3><?php echo $heading;?></h3>
				<?php endif;?>
			</div>

			<div class="text-wrap col col-sm-12 col-md-6 col-lg-8">
				<div class="text"><img src="/wp-content/themes/propr/assets/img/quote-mark.svg"/><span><?php the_sub_field('text');?></span></div>
				<div class="author">– <?php the_sub_field('author');?></div>
			</div>
		
		</div>
	</div>
</div>