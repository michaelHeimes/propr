<?php get_header(); ?>

<?php 

    if( have_rows('modules')):

        while ( have_rows('modules') ) : the_row();

             get_template_part( 'template-parts/modules' );

        endwhile;

    endif; 
    
?>

<?php get_footer(); ?>