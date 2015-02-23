<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Inkness
 */
?>
	<div id="footer-sidebar" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
		<div class="footer-column col-md-4"> <?php
			dynamic_sidebar( 'sidebar-2'); 
		?> </div> <?php	
		}
			
		if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
		<div class=""> <?php
			dynamic_sidebar( 'sidebar-3'); 
		?> </div> <?php	
		}

		if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
		<div class="footer-column col-md-4"> <?php
			dynamic_sidebar( 'sidebar-4'); 
		?> </div> <?php	
		}
		?>	 	
	</div><!-- #secondary -->
