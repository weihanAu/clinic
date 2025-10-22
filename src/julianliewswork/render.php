<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div class="wp-block-hudsonblock-popularposts" <?php echo get_block_wrapper_attributes(); ?>>
	<div class="popularposts-container Julian-works-container">
        <h2 class="Julian-title">See Dr Julian Liew’s Work</h2>
        <?php   
        // Define arguments for the query
         $args = array(
            'category_name' => 'mostpopular', // Fetch posts from 'mostpopular' category
            'posts_per_page' => 4,           // Number of posts to display
         );
         // Create a new query
         $mostpopular_query = new WP_Query( $args );
        ?>
      
         <div class="post-carousel">
            <div class="slides">
                <?php if ( $mostpopular_query->have_posts() ) : ?>
                    <?php while ( $mostpopular_query->have_posts() ) : $mostpopular_query->the_post(); ?>
                        <div class="slide-item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>  
            </div>
        </div>
        <div class="post-operation">
            <h2>## WEEK POST-OPERATION</h2>
            <p class="details">AGE, PROCEDURE NAME, SOME EXPLANATION</p>
            <p class="disclaimer">
                DISCLAIMER: All before and after photographs are actual cases of Dr. Julian Liew, and are examples only.
                <br>
                All surgical results are subject to individual patient variability and do not constitute an implied or certainty for the result.
            </p>
        </div>
    </div>
</div>
