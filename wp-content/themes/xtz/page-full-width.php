<?php
/*
Template Name: Full Width(No Sidebar)
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
    </main><!-- #main -->
        <?php
    
	$l = get_bloginfo("language");
	$lang = ($l == 'ru-RU')?"_rus":"";	
		
	if ( (function_exists( 'of_get_option' )) && (of_get_option('slidetitle5',true) !=1) ) {
	if ( of_get_option('slider_enabled'.$lang) != 0 )  
		{ ?>
	<div class="slider-wrapper theme-default"> 
    	<div class="ribbon"></div>    
    		<div id="slider" class="nivoSlider">
    			<?php
		  		$slider_flag = false;
		  		for ($i = 1; $i < 10; $i++) {
						$caption = ((of_get_option('slidetitle' . $i.$lang, true) == "") ? "" : "#caption_" . $i);
						if (of_get_option('slide' . $i.$lang, true) != "") {
							echo "<a href='" . esc_url(of_get_option('slideurl' . $i.$lang, true)) . "'><img src='" . of_get_option('slide' . $i.$lang, true) . "' title='" . $caption . "'></a>";
							$slider_flag = true;
						}
					}
				?>  
    		</div><!--#slider-->
    		<?php
				for ($i = 1; $i < 10; $i++) {
					$caption = ((of_get_option('slidetitle' . $i.$lang, true) == "") ? "" : "#caption_" . $i);
					if ($caption != "") {
						echo "<div id='caption_" . $i . "' class='nivo-html-caption'>"
						. "<div class='nivocapper'>";
						echo "<div class='slide-title'>" . of_get_option('slidetitle' . $i.$lang, true) . "</div>";
						echo "<div class='slide-description'>" . of_get_option('slidedesc' . $i.$lang, true) . "</div>";
						echo "<a href='" . esc_url(of_get_option('slideurl' . $i.$lang, true)) . "' class='btn btn-slide'>".of_get_option('more'.$lang, true)."</a>";
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
