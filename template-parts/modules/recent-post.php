<section class="section-recent-post">
    <div class="recent-post-content">
        <div class="recent-post-title">
            <h3>Recently on Propr Mattr</h3>
        </div>
        <?php
            $args = array(
                'posts_per_page' => 1
            );
            $query = new WP_query ( $args );
            if ( $query->have_posts() ){
        ?>
        <?php 
            while ( $query->have_posts() ) : $query->the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="read-more">Read On ></a>
    </div>
    <div class="recent-post-image slanted-img">
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('recent-thumb');
        } ?>
    </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php } ?>
</section>