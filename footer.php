        </div> <?php //Close content div ?>

		<?php if(get_field('hide_subfooter') != 'true'):?>
        <div class="subfooter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="subfooter-wrapper">
                            <h3>Let’s Keep in Touch</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Begin Mailchimp Signup Form -->
                                        <style type="text/css">
                                            #mc_embed_signup{ clear:left; width:100%;}
                                            /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                                            We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                                        </style>
                                        <div id="mc_embed_signup">
                                            <form action="https://proprdesign.us7.list-manage.com/subscribe/post?u=71b8bf8054cea50d9ad4c2821&amp;id=348822a5dc" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                                <div id="mc_embed_signup_scroll">
                                                <label for="mce-EMAIL">We’ll shoot you an occasional email with news, case studies, and opinion pieces.</label>
                                                <div><input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="your email" required>
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_71b8bf8054cea50d9ad4c2821_348822a5dc" tabindex="-1" value=""></div>
                                                <input type="submit" value="JOIN" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">
                                                </div>
                                                </div>
                                            </form>
                                        </div>
                                        <script type="text/javascript" src="https://widget.clutch.co/static/js/widget.js"></script> <div class="clutch-widget" data-url="https://widget.clutch.co" data-widget-type="2" data-height="50" data-darkbg="1" data-clutchcompany-id="740397"></div>

                                        <!--End mc_embed_signup-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif;?>
        
        
        <footer>
            <div class="footer">
                <div class="footer-bar">
                        <div class="footer-copyright">
                            &copy;<?php $year = date("Y"); echo $year?> Propr Design
                        </div>
                        <?php
                            /* Main Menu */
                            $args = array(
                                'theme_location' => 'secondary-navigation',
                                'menu_id' => 'footer_menu',
                                'menu_class' => 'nav footer-nav',
                                'container' => 'ul',
                                'container_class' => false
                            );
                            // wp_nav_menu( $args );
                        ?>
                        <div class="footer-cta">
                            <a href="<?php echo get_site_url(); ?>/contact" class="btn">Contact Propr</a>
                        </div>
                </div>
            </div>
            <?php wp_footer(); ?>
        </footer>

    </body>
</html>
