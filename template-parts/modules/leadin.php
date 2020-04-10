<?php 
    $right = get_sub_field('content_right');
    $left = get_sub_field('content_left'); 
?>
<div class="module-leadin <?php if( $need_top_padding = get_sub_field('need_top_padding') ):?>needs-top-padding<?php endif; ?>" <?php if( $color = get_sub_field('background_color') ): ?>style="background-color:<?php echo $color; ?>"<?php endif; ?>>
    <div class="container">
	    
	    <?php if($title = get_sub_field('title')):?>                            
        <div class="row">
            <div class="col-md-12">
                <div class="section-title <?php if( get_sub_field('hide_divider') ){ echo 'hide_divider'; } ?>" style="<?php 
                                                    if($left or $right){ 
                                                        }
                                                        else{
                                                            echo 'margin-bottom: 0px;'; 
                                                        } ?>
                                                        ">
                    <h2><?php echo $title; ?></h2>
                    
                    <?php if ($back_link = get_sub_field('back_link')): ?>
                        <div class="back-link">
                            <a href="<?php echo $back_link; ?>" class="back-link"><span>< <span>Back</span></span></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endif;?>
        
        
        <?php if($left or $right): ?>
            <div class="row <?php if( $color && is_hex_dark( $color ) ){ echo 'dark'; } ?>">
                <div class="col-md-12">
                    <div class="content <?php if( get_sub_field('bottom_border') ){ echo 'bottom_border'; } ?>">
                        <div class="row">
                            <?php if( $left && $right): ?>
                                <div class="col-md-5 col-sm-12">    
                                    <?php echo $left; ?>
                                </div>
                                <div class="col-md-6 col-sm-12">    
                                    <?php echo $right; ?>
                                </div>
                            <?php elseif( !$left && $right ): ?>
                                <div class="col-xl-10">    
                                    <?php echo $right; ?>
                                </div>
                            <?php endif; ?>
                            </div>
                            <div class="col-md-7 col-sm-12">
                                <?php // if( $right = get_sub_field('content_right') ): ?>
                                    <?php // echo $right; ?>
                                <?php // endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>