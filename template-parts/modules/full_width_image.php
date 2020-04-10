<div class="module-full_width_image <?php if ($custom_class = get_sub_field('custom_class')){ echo $custom_class; }; ?>">
	<?php 
	$image = get_sub_field('image');
	if( !empty( $image ) ): ?>
	    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	<?php endif; ?>	
</div>