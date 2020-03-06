<div class="post-inline-cta">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
                <?php if($title = get_sub_field('title')): ?>
                    <h4><?php echo $title; ?></h4>
                <?php endif; ?>
	        </div>
	        
	        <div class="col-md-12">
                <a href="<?php the_sub_field('button_link'); ?>" class="btn"><?php the_sub_field('button_label'); ?></a>
	        </div>
	        
	    </div>
	</div>
</div>