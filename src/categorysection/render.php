<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div  <?php echo get_block_wrapper_attributes(); ?>>
    <h2 class="categories-title">Categories</h2>
	<div class="categories-container big-dev">
        <?php
        wp_cache_delete('allcategory', 'categories');
        $categories =get_categories(
            array(
                'hide_empty' => false
            )
        ); 
         foreach ($categories as $category) {
            $category_link = get_category_link($category->term_id);
            if($category->name=='Mostpopular'){continue;}
            echo '<p class="categories-item"><a href="' . esc_url($category_link) . '">' . esc_html($category->name) . '</a></p>';
         }
        ?>
    </div>

   <div class="categories-container small-dev">
    <?php
        wp_cache_delete('allcategory', 'categories');
        $categories = get_categories(
            array(
                'hide_empty' => false
            )
        ); 
        foreach ($categories as $index => $category) {
            $category_link = get_category_link($category->term_id);
            $class = $index >= 6 ? 'hidden-category' : '';
            if($category->name=='Mostpopular'){continue;}
            echo '<p class="categories-item small-dev ' . $class . '"><a href="' . esc_url($category_link) . '">' . esc_html($category->name) . '</a></p>';
        }
        ?>
    </div>

    <p class='load-more' id="view-more-btn">view more</p>
</div>
<script>
    jQuery(document).ready(function ($) {
        $('#view-more-btn').on('click', function () {
            $('.hidden-category').slideDown(); // 动画显示隐藏的分类
            $(this).hide(); // 隐藏按钮
        });
    });
</script>