<?php get_header('404'); ?>
<div class="error404-message">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/error-message@2x.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="error-links">
                    <ul>
                        <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
                        <li><a href="<?php echo get_home_url(); ?>/work/">Work</a></li>
                        <li><a href="<?php echo get_home_url(); ?>/about/">About</a></li>
                        <li><a href="<?php echo get_home_url(); ?>/mattr/">Mattr</a></li>
                        <li><a href="<?php echo get_home_url(); ?>/contact/">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-5">
                <h2>Try one of </br>< these</h2>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>