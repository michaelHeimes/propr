<?php 

/* Template Name: Modules */

get_header(); ?>

<div class="module-leadin" <?php if( $color = get_sub_field('background_color') ): ?>style="background-color:<?php echo $color; ?>"<?php endif; ?>>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="section-title">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section-recent-post">
    <div class="container">
        <div class="row">
            <div class="offset-sm-1 col-12 col-sm-10 col-md-10 col-lg-3">
                <h3>Most Recent</h3>
            </div>
        </div>
        <div class="row justify-content-sm-center">
            <div class="col-md-10 col-sm-10 col-lg-7">
                <?php
                    $args = array(
                        'posts_per_page' => 1
                    );
                    $query = new WP_query ( $args );
                    if ( $query->have_posts() ){
                ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="read-more">Read On</a>
                <?php endwhile; ?>
  
                <?php wp_reset_postdata(); ?>

                <?php } ?>
            </div>
        </div>
    </div>
</section>

<section class="section-post-cards">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="section-title">
                    <h2>Stories</h2>
                </div>
            </div>
        </div>
        <div class="card-deck row justify-content-center">
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