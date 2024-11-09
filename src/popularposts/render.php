<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div  <?php echo get_block_wrapper_attributes(); ?>>
	<div class="popularposts-container">
        <h2 class="popularposts-title">most popular posts</h2>
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
                                <div class="headline"><?php the_title(); ?></div>
                                <div class="abstract"><?php the_excerpt(); ?></div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>  
            </div>
        <!-- <button class="prev"><</button>
        <button class="next">></button> -->
        </div>
    </div>
</div>
