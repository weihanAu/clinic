<?php

// Set up pagination variables
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// Query for the first 5 posts with pagination
$args = array(
    'posts_per_page' => 3,
    'post_status'    => 'publish',
    'paged'          => $paged, // Add pagination
);
$query = new WP_Query($args);
?>

<div <?php echo get_block_wrapper_attributes(); ?>>
        <?php if ($query->have_posts()) : ?>
            <ul class="blog-posts-container">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                    <li class="blog-posts-item">
                        <div class="blog-posts-thumbnail blog-posts-sub"><?php the_post_thumbnail(); ?></div>
                        <div class="blog-posts-sub">
                            <div class="blog-posts-date"><span><?php echo get_the_date(); ?></span></div> 
                            <h2 class="blog-posts-headline"><?php the_title(); ?></h2>
                            <p class="blog-posts-category"><?php echo get_the_category()[0]->name ?></p>
                            <div class="blog-posts-excerpt"><?php the_excerpt(); ?></div>
                            <div class="r-more">Read More</div>
                        </div>
                    </li>
                </a>
                <?php endwhile; ?>
            </ul>

            <div class="pagination">
                <?php
                // Display pagination
                echo paginate_links(array(
                    'total'   => $query->max_num_pages,
                    'current' => $paged,
                    'prev_text' => __(''),
                    'next_text' => __(''),
                    'format' => '?paged=%#%', // Ensure the URL structure is correct
                ));
                ?>
            </div>
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>

        <?php wp_reset_postdata(); // Reset the post data ?>
</div>

<script>
jQuery(document).ready(function($) {
    $('.pagination').on('click', 'a', function(e) {
        e.preventDefault(); // Prevent default anchor click behavior
        var link = $(this).attr('href'); // Get the link's href

        // Load the new page via AJAX
        $.get(link, function(data) {
            // Find the new posts container and pagination in the loaded data
            var newContent = $(data).find('.blog-posts-container').html();
            var newPagination = $(data).find('.pagination').html();

            // Replace content and pagination
            $('.blog-posts-container').html(newContent); // Replace content
            $('.pagination').html(newPagination); // Update pagination
            window.history.pushState(null, '', link); // Update the URL without refreshing
        });
    });
});

</script>

