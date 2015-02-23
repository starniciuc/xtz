
<article id="post-<?php the_ID(); ?>" <?php post_class("homa archive"); ?>>
    
        <div class="col-left">
                <div class="image-post-home">
			<?php 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        } ?>
		</div>
        </div>
        <div class="col-right">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php if (is_search()) : // Only display Excerpts for Search ?>
                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div><!-- .entry-summary -->
            <?php else : ?>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div><!-- .entry-content -->
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>" rel="bookmark">more</a>
        </div>
    <div class="clearfix"></div>
</article><!-- #post-## -->