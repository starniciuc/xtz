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
 
<?php
    $id_cat =  the_category_ID($echo=false);
        if($id_cat == 1 || $id_cat == 4 ):
            if ( have_posts() ) : 
            ?>

              <div id="primary-home" class="content-area">
                <main id="main" class="site-main" role="main">
                  
                         <?php if ((of_get_option('banner_oferte', true) != "") && (of_get_option('banner_oferte', true) != 1)) { 
                             $img = of_get_option('banner_oferte');
                             echo "<div class='banner'><img src='$img'></div>";
                            }
                            ?>
                    
                        <?php $ink_count = 0; ?>
                            <?php while ( have_posts() ) : the_post(); 
                                if($ink_count % 2 == 0){echo "<div class='white-left'>";} else {echo "<div class='red-right'>";}
                            ?>
                                 <div class="container">
                            <?php
                                 get_template_part( 'content', 'home' );
                            ?>
                                 </div>
                    <?php 
                    echo "</div>";
                    $ink_count++;
                    endwhile; 
                    ?>
              
            <?php else : ?>

                    <?php get_template_part( 'no-results', 'index' ); ?>

            <?php endif; ?>
                    
                  <?php if ((of_get_option('price', true) != "") && (of_get_option('price', true) != 1)) { 
                             $img = of_get_option('price');
                             echo "<div class='container'><div class='row'><div class='col-sm-12'>";
                             echo "<div class='price'><img src='$img'></div>";
                             echo "</div></div></div>";
                            }
                    ?>
                </main><!-- #main -->
            </div><!-- #primary -->
                    
<?php endif; ?>
            
<?php if($id_cat == 3):?>
            <div id="primary-home" class="content-area">
                <main id="main" class="site-main" role="main">
                    <div class="container">
                        <h1 class="text-center"><?php if ( is_category() ) : single_cat_title(); endif; ?></h1>
                        <?php while ( have_posts() ) : the_post(); 

                                     get_template_part( 'content', 'home' );

                                endwhile; 
                        ?>
                    </div>
                </main><!-- #main -->
            </div><!-- #primary --> 
<?php  endif; ?>
            
<?php //get_sidebar('footer'); ?>
<?php get_footer('fb'); ?>