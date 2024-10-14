<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div  <?php echo get_block_wrapper_attributes(); ?>>
    <div class="post-goback-container">
        <div class="post-goback-img-container post-goback-item">
            <img decoding="async" class="post-goback-img"
            src=<?php echo $attributes['bannerImage'] ?>
            alt="">
        </div>
        <div class="post-goback-item post-goback-category">
            <h2 class="categories-title">-categories-</h2>
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
</div>
