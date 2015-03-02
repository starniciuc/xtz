<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Inkness
 */

get_header(); ?>
    <main id="main" class="site-main" role="main">
        
                    <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'content', 'single' ); ?>
                    <?php endwhile; // end of the loop. ?>
               
    </main><!-- #main -->
    <?php
        
	if ( (function_exists( 'of_get_option' )) && (of_get_option('slidetitle5',true) !=1) ) {
	if ( of_get_option('slider_enabled') != 0 )  
		{ ?>
	<div class="slider-wrapper theme-default"> 
    	<div class="ribbon"></div>    
    		<div id="slider" class="nivoSlider">
    			<?php
		  		$slider_flag = false;
		  		for ($i=1;$i<6;$i++) {
		  			$caption = ((of_get_option('slidetitle'.$i, true)=="")?"":"#caption_".$i);
					if ( of_get_option('slide'.$i, true) != "" ) {
						echo "<div class='slide'><a href='".of_get_option('slideurl'.$i, true)."'><img src='".of_get_option('slide'.$i, true)."' title='".$caption."'></a></div>"; 
						$slider_flag = true;
					}
				}
				?>  
    		</div><!--#slider-->
    		<?php for ($i=1;$i<6;$i++) {
    				$caption = ((of_get_option('slidetitle'.$i, true)=="")?"":"#caption_".$i);
    				if ($caption != "")
    				{
	    				 echo "<div id='caption_" . $i . "' class='nivo-html-caption'>"
                                        . "<div class='nivocapper'>";
                                echo "<div class='slide-title'>" . of_get_option('slidetitle' . $i, true) . "</div>";
                                echo "<div class='slide-description'>" . of_get_option('slidedesc' . $i, true) . "</div>";
                                echo "<a href='" . esc_url(of_get_option('slideurl' . $i, true)) . "' class='btn btn-slide'>Citește mai mult</a>";
                                echo "</div></div>";
    				}
    			}	
    	    
			?>
    </div>	
	<?php 
			}
		}
		?>
<?php get_footer('fb'); ?>
