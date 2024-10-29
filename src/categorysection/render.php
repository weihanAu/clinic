<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div  <?php echo get_block_wrapper_attributes(); ?>>
    <h2 class="categories-title">categories</h2>
	<div class="categories-container">
        <?php
        $categories =get_categories(); 
         foreach ($categories as $category) {
            $category_link = get_category_link($category->term_id);
            echo '<p class="categories-item"><a href="' . esc_url($category_link) . '">' . esc_html($category->name) . '</a></p>';
         }
        ?>
    </div>
</div>
