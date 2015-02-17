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

	<footer id="colophon" class="site-footer row" role="contentinfo">
	<div class="container">
	<?php if ( of_get_option('credit1', true) == 0 ) { ?>
		<div class="site-info col-md-4">
			<?php do_action( 'inkness_credits' ); ?>
			<?php printf( __( 'Inkness Theme by %1$s.', 'inkness' ), '<a href="http://inkhive.com/product/inkness" rel="designer">InkHive</a>' ); ?>
		</div><!-- .site-info -->
	<?php } ?>	
		<div id="footertext" class="col-md-7">
        	<?php
			if ( (function_exists( 'of_get_option' ) && (of_get_option('footertext2', true) != 1) ) ) {
			 	echo of_get_option('footertext2', true); } ?>
                    
                    <div id="social-icons" class="col-md-5 col-xs-12">
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
                        <?php } ?>

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