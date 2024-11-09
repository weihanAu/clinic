<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div <?php echo get_block_wrapper_attributes(); ?>>
    <div class="post-goback-container">
        <div class="post-goback-img-container post-goback-item">
            <img src=<?php echo $attributes['bannerImage'] ?> >
            <div class="back-button">
                <a href="/" class="back-link">
                    <span class="arrow">&#8592;</span> <!-- Unicode 左箭头 -->
                    <span class="text">Go Back</span>
                </a>
            </div>
        </div>
    </div>
</div>

