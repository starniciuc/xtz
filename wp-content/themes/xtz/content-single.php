<?php
/**
 * @package Inkness
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class='banner'><?php if (has_post_thumbnail() ) : the_post_thumbnail(); endif; ?></div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center"><?php the_title(); ?></h1>

                <p><?php the_content(); ?></p>
             </div>
        </div>
    </div>
</div><!-- #post-## -->
