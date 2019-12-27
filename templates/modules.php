<?php

/* Template Name: Modules */

get_header();

if( have_rows('modules') ):

    while ( have_rows('modules') ) : the_row();

        get_template_part( 'template-parts/modules' );

    endwhile;

endif;

get_footer(); ?>
