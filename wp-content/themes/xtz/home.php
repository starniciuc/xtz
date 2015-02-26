<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Inkness
 */

get_header(); ?>

	<div id="primary-home" class="content-area">
		<main id="main" class="site-main" role="main">
                    
                    <h1 class="text-center">OFERTE SPECIALE</h1>
                    
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ $ink_count = 0; $ink_row_count=0 ?>
			<?php while ( have_posts() ) : the_post(); 
                         if ( in_category( '1' ) ) :
                                if ($ink_count == 0 ) {echo "<div class='row-".$ink_row_count."'>";}
                                if($ink_count % 2 == 0){echo "<div class='white-left'>";} else {echo "<div class='red-right'>";}
                                
			?>
                    
                            <div class="container">
				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'home' );
				?>
                            </div>
                    
			<?php 
                        echo "</div>";
				if ($ink_count == 2 )
					{
						echo "</div>";
						$ink_count++;
						$ink_row_count++;
					}
				else {	
					$ink_count++;
				}
			?>
                    <?php endif; 
				endwhile; 
			?>
                         
			<?php //inkness_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar('instagram'); ?>
        
        
<?php get_footer(); ?>