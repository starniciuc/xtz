<?php
/**
 * Template Name: Price
 *
 */

get_header(); ?>

    <main id="main" class="site-main" role="main">
        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <?php while ( have_posts() ) : the_post(); ?>

                            <?php get_template_part( 'content', 'page' ); ?>

                    <?php endwhile; // end of the loop. ?>
                </div>
            </div>
        </div><!-- #primary -->
         <?php if ((of_get_option('price', true) != "") && (of_get_option('price', true) != 1)) { 
                             $img = of_get_option('price');
                             echo "<div class='container'><div class='row'><div class='col-sm-12'>";
                             echo "<div class='price'><img src='$img'></div>";
                             echo "</div></div></div>";
                            }
                    ?>
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
	    				echo "<div id='caption_".$i."' class='nivo-html-caption'>";
	    				echo "<a href='".of_get_option('slideurl'.$i, true)."'><div class='slide-title'>".of_get_option('slidetitle'.$i, true)."</div></a>";
	    				echo "<div class='slide-description'>".of_get_option('slidedesc'.$i, true)."</div>";
	    				echo "</div>";
    				}
    			}	
    	    
			?>
    </div>	
	<?php 
			}
		}
		?>
<?php get_footer("fb"); ?>
