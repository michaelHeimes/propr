<?php get_header(); ?>

<section class="section-page-title">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?></h2>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/content/recent' ); ?>

<section class="section-post-cards">
    <div class="container">
        <div class="row">
            <div class="col-10"><h2 class="section-title">Stories</h2></div>
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
                        <div class="col-md-6">
                            <?php get_template_part( 'template-parts/content/post-card' ); ?>
                        </div>
                        <?php else: ?>
                        <div class="col-md-6">
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