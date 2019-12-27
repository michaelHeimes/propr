<div class="module-testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <?php if( $title = get_sub_field('title') ): ?>
                    <div class="section-title">
                        <h2><?php echo $title ?></h2>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <?php if( $description = get_sub_field('subtitle') ): ?>
                    <div class="section-description"><?php echo $description ?></div>
                <?php endif; ?>
            </div>
        </div>
        
            <?php foreach( get_sub_field('testimonials') as $testimonial ): ?>
                <div class="row">
                    <div class="col-12 grid-item">
                        <div class="row">
                            <div class="col-md-9 col-xl-6 order-12 order-xl-1 center-vertical testimonial-quote">
                                <?php if ($testimonial['quote']): ?>
                                    <p class="quote"><?php echo $testimonial['quote'] ?></p>
                                    <p class="quote-author"><?php echo $testimonial['author'] ?> | <?php echo $testimonial['client'] ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-9 col-xl-6 order-1 order-xl-12 testimonial-image">
                                <?php if($page_link = $testimonial['link']): ?>
                                    <a href="<?php echo $page_link; ?>">
                                <?php endif; ?>
                                <?php if($testimonial_img = $testimonial['image']): ?>
                                    <img class="img-fluid" src="<?php echo $testimonial_img['url'] ?>" alt="<?php echo $testimonial_img['alt'] ?>" />
                                <?php endif; ?>
                                <?php if($page_link = $testimonial['link']): ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
    </div>
</div>  