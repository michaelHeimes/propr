<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <?php 

            if( have_rows('modules')):

                while ( have_rows('modules') ) : the_row();

                    get_template_part( 'template-parts/modules' );

                endwhile;

            endif; 
            
        ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>