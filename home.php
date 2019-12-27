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
        <div class="card-deck row">
        <?php
                    $args = array(
                        'posts_per_page' => 6,
                        'offset' => 1
                    );
                    $query = new WP_query ( $args );
                    if ( $query->have_posts() ){
                        $i = 0;
                ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <?php if ($i != 3): ?>
                            <div class="col-md-6 col-sm-10">
                                <?php get_template_part( 'template-parts/content/post-card' ); ?>
                            </div>
                        <?php else: ?>
                            <div class="col-md-6 col-sm-10">
                                <?php get_template_part( 'partials/block/newsletter-signup-card' ); ?>
                            </div>
                        <?php endif; ?>
                    <?php $i++; ?>
                <?php endwhile; ?>
  
                <?php wp_reset_postdata(); ?>

                <?php } ?>
        </div>

    </div>

</section>

<?php 

if( have_rows('modules', get_option('page_for_posts') )):

    while ( have_rows('modules', get_option('page_for_posts')) ) : the_row();

        get_template_part( 'template-parts/modules' );

    endwhile;

endif; ?>



<?php get_footer(); ?>