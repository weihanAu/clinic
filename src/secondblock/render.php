<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>

<?php
	$posts_per_page = isset($attributes['postsPerPage']) ? $attributes['postsPerPage'] : 3;
    $current_page = isset($attributes['currentPage']) ? $attributes['currentPage'] : 1;
    $category = isset($attributes['category']) ? $attributes['category'] : 0;

    $args = array(
        'posts_per_page' => $posts_per_page,
        'paged' => $current_page,
        'cat' => $category,
    );

    $query = new WP_Query($args);
		 // Start output buffer to capture HTML
    ob_start();
    
    // Generate JSX output
    ?>
		<h1 <?php echo get_block_wrapper_attributes(); ?>>
			<div class="post-previews">
					<?php if ($query->have_posts()) : ?>
							<?php while ($query->have_posts()) : $query->the_post(); ?>
									<div class="post-preview">
											<h2><?php echo get_the_title(); ?></h2>
											<p><?php echo get_the_excerpt(); ?></p>
									</div>
							<?php endwhile; ?>
							<div class="pagination">
									<?php
									$total_pages = $query->max_num_pages;
									for ($i = 1; $i <= $total_pages; $i++) {
											$is_current_page = ($i == $current_page);
											?>
											<a 
													href="#"
													data-page="<?php echo esc_attr($i); ?>"
													class={<?php echo $is_current_page ? '"current-page"' : '""'; ?>>
													<?php echo $i; ?>
											</a>
									<?php } ?>
							</div>
					<?php else : ?>
							<p>No posts found.</p>
					<?php endif; ?>
			</div>
		</h1>
<?php
    wp_reset_postdata();
    $output = ob_get_clean();
?>


<?php echo $output?>
