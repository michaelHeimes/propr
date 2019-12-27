<?php

$module_id = uniqid();

        if( get_row_layout() == 'hero' ): 
        
            get_template_part( 'template-parts/modules/hero', 'none' );

        elseif( get_row_layout() == 'testimonials' ): 

            get_template_part( 'template-parts/modules/testimonials', 'none' );

        elseif( get_row_layout() == 'grid_work' ):

            get_template_part( 'template-parts/modules/grid', 'work' );

        elseif( get_row_layout() == 'grid_content' ): 

            get_template_part( 'template-parts/modules/grid', 'content' );

        elseif( get_row_layout() == 'content_block' ): 

            get_template_part( 'template-parts/modules/content', 'block' );

        elseif( get_row_layout() == 'grid_clients' ): 

            get_template_part( 'template-parts/modules/grid', 'clients' );

        elseif( get_row_layout() == 'lead_in' ):

            get_template_part( 'template-parts/modules/leadin', 'none' );

        elseif( get_row_layout() == 'one_column' ): 
        
            get_template_part( 'template-parts/modules/one-col', 'none' );

        elseif( get_row_layout() == 'two_column' ): 
            
            get_template_part( 'template-parts/modules/two-col', 'none' );

        elseif( get_row_layout() == 'grid_media' ):

            get_template_part( 'template-parts/modules/grid', 'media' );

        elseif( get_row_layout() == 'cta'): 

            get_template_part( 'template-parts/modules/cta', 'none' );

        elseif( get_row_layout() == 'list_link' && $_SERVER['REMOTE_ADDR'] == '204.29.196.55'  ):

            get_template_part( 'template-parts/modules/list-link', 'none' );
            
        elseif( get_row_layout() == 'section_cta'):

            get_template_part( 'template-parts/modules/section-cta', 'none' );
        
        elseif( get_row_layout() == 'contact_form'):
            
            get_template_part( 'template-parts/modules/form', 'contact' );
            
        elseif( get_row_layout() == 'logo_grid'):

            get_template_part( 'template-parts/modules/grid', 'logo' );
        
        elseif( get_row_layout() == 'post_main_image'): 
            
            get_template_part( 'template-parts/modules/post/image', 'main' );
        
        elseif( get_row_layout() == 'post_inline_cta'):

            get_template_part( 'template-parts/modules/post/cta', 'inline' );

        elseif( get_row_layout() == 'recent_post'):

            get_template_part( 'template-parts/modules/recent', 'post' );

        elseif( get_row_layout() == 'leadership'):

            get_template_part( 'template-parts/modules/leadership' );

        elseif( get_row_layout() == 'thankyou'):

            get_template_part( 'template-parts/modules/thank-you' );

        elseif( get_row_layout() == 'four_column'):

            get_template_part( 'template-parts/modules/four-column' );

        endif; 

?>