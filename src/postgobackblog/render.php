<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div <?php echo get_block_wrapper_attributes(); ?>>
    <div class="post-goback-container">
        <a href="/">
            <div class="post-goback-img-container post-goback-item">
                <!-- <img src=<?php echo $attributes['bannerImage'] ?> > -->
                <div class="back-button">
                    <a class="back-link" href="/get-to-know-us/blog/">
                        <span class="arrow"></span> <!-- Unicode 左箭头 -->
                        <span class="text">Go Back</span>
                    </a>
                </div>
            </div>
        </a>
    </div>
</div>

