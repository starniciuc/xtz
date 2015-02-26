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
        
<?php get_footer(); ?>
