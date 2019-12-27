<?php 
    $args = array(
        'posts_per_page' => 1
    );
    $query = new WP_query ( $args ); 
?>

<?php if ( $query->have_posts() ){ 
    while ( $query->have_posts() ) : $query->the_post(); ?>
        <section class="section-recent-post blog-listing">
            <div class="recent-post-content">
                <div class="recent-post-title">
                    <h3>Most Recent</h3>
                </div>
                <h2><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="read-more">Read On ></a>
            </div>
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="recent-post-image slanted-img">
                    <?php the_post_thumbnail('recent-thumb'); ?>
                </div>
            <?php endif; ?>
        </section>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php } ?>