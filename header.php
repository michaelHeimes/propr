<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KF5XVHJ');</script>
    <!-- End Google Tag Manager -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title(' - ',TRUE,'right'); bloginfo('name'); ?></title>

	<?php if( $icon = get_field('favicon', 'option') ): ?>
	<link rel="shortcut icon" type="image/png" href="<?php echo $icon; ?>"/>
	<?php endif; ?>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head();

	if( $GLOBALS['theme_invert_page'] ){
		add_filter('body_class', 'add_dark_class');
	} ?>

<meta name="msvalidate.01" content="A8339A906B6B04581C7EA8D99290387E" />
<meta name="google-site-verification" content="sBqD07GSR5K9duj_cr_NPvRHRLSwHfKNk19dd56wUSA" />

</head>
<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KF5XVHJ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    		<?php if(get_field('hide_top_alert_bar') != 'true'):?>
		    	<?php if( get_field('enable_top_bar_alert', 'option') == 'true'):?>
		    	
			    	<div id="top-bar-alert">
				    	
				    	<div class="container text-center">
			    	
					    	<?php if($alert_message = get_field('top_bar_message', 'option')):?>
						    	
						    	<span><?php echo $alert_message;?></span>
						    	
					    	<?php endif;?>
					    	
							<?php 
							$link = get_field('top_bar_link', 'option');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
							    <span><a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></span>
							<?php endif; ?>
			    	
							<button type="button"><span></span><span></span></button>
			    	
				    	</div>
				    	
			    	</div>
		    	
				<?php endif;?>
			<?php endif;?>

    <header class="<?php if( get_field('invert_navigation_colors') ){ echo 'inverse'; } ?><?php if( get_field('pink_navigation') ){ echo 'alternative'; } ?> site-header">
	    	
	    
            <nav class="navbar" role="navigation">
	            	            
                <div class="navbar-header">
	                
					<a class="navbar-brand" href="<?php echo get_home_url(); ?>">propr</a>	 
					
					<div class="cta-toggle-wrap">  
						
						<a class="header-cta" href="<?php echo get_home_url(); ?>/contact">Start A Project</a>
             
	                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
	                    
	                        <span id="t-1"></span>
	                        <span id="t-2"></span>
	                        <span id="m-1"></span>
	                        <span id="b-1"></span>
	                        
	                    </button>
                    
					</div>
                    
                </div>

                <div class="fade-nav navbar-collapse collapse" id="navbar-collapse">
	                
	                <div class="container">
	                
<!--
                    <div class="container">
                        <span class="close-handle" data-toggle="collapse" data-target="#navbar-collapse"></span>
                    </div>
-->
	                    <?php
	                        /* Main Menu */
	                        $args = array(
	                            'theme_location' => 'primary-navigation',
	                            'menu_id' => 'header_menu',
	                            'menu_class' => 'nav navbar-nav position-center',
	                            'container' => 'ul',
	                            'container_class' => false
	                        );
	                        wp_nav_menu( $args );
	                    ?>
	                    
	                    
		    
						<div class="row">
	                    
	                    <?php
	                        /* Main Sub Menu */
	                        $args = array(
	                            'theme_location' => 'sub-primary-navigation',
	                            'menu_id' => 'header_sub_menu',
	                            'menu_class' => 'suv-nav navbar-nav col-sm-12 col-md-6',
	                            'container' => 'ul',
	                            'container_class' => false
	                        );
	                        wp_nav_menu( $args );
	                    ?>	                    
	
							<div class="menu-address-wrap col-sm-12 col-md-6">
								
								<a href="<?php the_field('address_map_link','option');?>" target="_blank">
									<p><?php the_field('address','option');?></p>
								</a>
							
							</div>
							
							<div class="menu-tagline-wrap col-sm-12">
								<p class="nav-tagline"><?php the_field('navigation_menu_tagline','option');?></p>
							</div>
	
	        			</div>
	        			
	                </div>

                </div>
            </nav>
    </header>

    <div id="content" class="<?php if( get_field('remove_top_padding') ){ echo 'no-top-padding'; } ?>">
