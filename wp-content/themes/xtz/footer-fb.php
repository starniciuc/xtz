<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Inkness
 */
?>
	</div>
	</div><!-- #content -->
        
        <div class="container">
            <div class='row'>
                <div class='col-sm-9'>
                    <div class="fb-comments" data-href="https://www.facebook.com/xtremetrainingzone" data-width="100%" data-numposts="10" data-colorscheme="light"></div>
                </div>
                <div class='col-sm-3'>
                    <div class="fb-like-box" data-href="https://www.facebook.com/xtremetrainingzone" data-width="100%" data-height="400" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
                </div>
            </div>
        </div>
        
        <?php get_sidebar("testimoniale"); ?>
        
	<footer id="colophon" class="site-footer row" role="contentinfo">
        <div class="container-fluid">
            <div class="row">
                <div class="social-block">
                    <div class="container">
                   

                        <div class="col-md-12 text-center social-icon">
                            <?php if (of_get_option('facebook', true) != "") { ?>
                                <a target="_blank" href="<?php echo esc_url(of_get_option('facebook', true)); ?>" title="Facebook" ><i class="social-icon fa fa-facebook-square"></i></a>
                            <?php } ?>
                            <?php if (of_get_option('twitter', true) != "") { ?>
                                <a target="_blank" href="<?php echo esc_url("http://twitter.com/" . of_get_option('twitter', true)); ?>" title="Twitter" ><i class="social-icon fa fa-twitter-square"></i></a>
                            <?php } ?>
                            <?php if (of_get_option('google', true) != "") { ?>
                                <a target="_blank" href="<?php echo esc_url(of_get_option('google', true)); ?>" title="Google Plus" ><i class="social-icon fa fa-google-plus-square"></i></a>
                            <?php } ?>
                            <?php if (of_get_option('feedburner', true) != "") { ?>
                                <a target="_blank" href="<?php echo esc_url(of_get_option('feedburner', true)); ?>" title="RSS Feeds" ><i class="social-icon fa fa-rss-square"></i></a>
                            <?php } ?>
                            <?php if (of_get_option('pinterest', true) != "") { ?>
                                <a target="_blank" href="<?php echo esc_url(of_get_option('pinterest', true)); ?>" title="Pinterest" ><i class="social-icon fa fa-pinterest-square"></i></a>
                            <?php } ?>
                            <?php if (of_get_option('instagram', true) != "") { ?>
                                <a target="_blank" href="<?php echo esc_url(of_get_option('instagram', true)); ?>" title="Instagram" ><i class="social-icon fa fa-instagram"></i></a>
                            <?php } ?>
                            <?php if (of_get_option('linkedin', true) != "") { ?>
                                <a target="_blank" href="<?php echo esc_url(of_get_option('linkedin', true)); ?>" title="LinkedIn" ><i class="social-icon fa fa-linkedin-square"></i></a>
                            <?php } ?>
                            <?php if (of_get_option('youtube', true) != "") { ?>
                                <a target="_blank" href="<?php echo esc_url(of_get_option('youtube', true)); ?>" title="YouTube" ><i class="social-icon fa fa-youtube-square"></i></a>
                            <?php } ?>
                            <?php if (of_get_option('flickr', true) != "") { ?>
                                <a target="_blank" href="<?php echo esc_url(of_get_option('flickr', true)); ?>" title="Flickr" ><i class="social-icon fa fa-flickr"></i></a>
                            <?php } 
                        ?>
                </div>
                </div>
            </div>
        </div>
	<div class="container">
            <div class="row">
                <div class="col-md-12 footer-menu text-center">
                    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                </div>
            </div>
            <div class="col-md-12">
                <div class="footer-about text-center">
                    <p><?php  if ( (function_exists( 'of_get_option' ) && (of_get_option('footertext2', true) != 1) ) ) { echo "© 2015 ".of_get_option('footertext2', true); } ?></p>
                    <p class="company">Site creat de <a href="#">SAGA</a></p>
                </div>
            </div>
        </div>
	</div>   
	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php		
	if ( (function_exists( 'of_get_option' ) && (of_get_option('footercode1', true) != 1) ) ) {
			 	echo of_get_option('footercode1', true); } ?>
<?php wp_footer(); ?>
</body>
</html>