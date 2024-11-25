<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div  <?php echo get_block_wrapper_attributes(); ?>>
   <div class="post-quote-container">
        <div class="post-quote-symbole"></div>
        <p class="post-quote-text">
           <?php echo $attributes['paragraph'] ?>
        </p>
   </div>
</div>

