<?php get_header(); ?>

<div class="module-leadin" style="<?php if( $color = get_sub_field('background_color') ): ?>background-color:<?php echo $color; ?><?php endif; ?> margin-bottom: 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="section-title">
                    <?php $posts_page_title = get_the_title( get_option('page_for_posts', true) ); ?>
                    <h2><?php echo $posts_page_title; ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part( 'template-parts/content/recent' ); ?>

<section class="section-post-cards">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Stories</h2>
                </div>
            </div>
        </div>
        
        <?php 
		    $author = get_the_author();
		    $image = get_field('thumbnail');
		?>

 		<?php echo do_shortcode('[ajax_load_more container_type="div" post_type="post" posts_per_page="6" offset="1" scroll="false" transition_container_classes="card-deck row" button_label="Show More" button_loading_label="Loading Stories..."]');?>               

    </div>

</section>

<?php 

if( have_rows('modules', get_option('page_for_posts') )):

    while ( have_rows('modules', get_option('page_for_posts')) ) : the_row();

        get_template_part( 'template-parts/modules' );

    endwhile;

endif; ?>



<?php get_footer(); ?>