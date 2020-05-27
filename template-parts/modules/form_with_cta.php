<div class="module-section-form-w-cta mode-<?php the_sub_field('mode'); ?>" style="background-color: <?php the_sub_field('background_color');?>">
	<style>
		.module-section-form-w-cta .gform_button.button {
			background-color: <?php the_sub_field('button_background_color');?>;
			color: <?php the_sub_field('button_text_color');?>;
		}
	</style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
				
					<div class="left col-sm-12 col-md-4 col-lg-3">
						<?php if($heading = get_sub_field('heading')):?>
						<h2><?php echo $heading;?></h2>
						<?php endif;?>

						<?php if($text = get_sub_field('text')):?>
						<p><?php echo $text;?></p>
						<?php endif;?>
						
					</div>

					<div class="right col-sm-12 col-md-8 col-lg-9">
						<?php echo do_shortcode(get_sub_field('form_shortcode')); ?>
					</div>
				
                </div>
            </div>
        </div>
    </div>
</div>