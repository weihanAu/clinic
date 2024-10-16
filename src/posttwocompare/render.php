<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div  <?php echo get_block_wrapper_attributes(); ?>>
    <div class="post-image-compare">
        <div>
            <img src=<?php echo $attributes["bannerImage"] ?> alt="Before">
        </div>

        <div class="blurred" id="after-image">
            <img class="blurred" src=<?php echo $attributes["bannerImage2"] ?> alt="After">
            <div class="after-image-text">Click to reveal</div>
        </div>
      
    </div>
</div>
<script>
    document.getElementById('after-image').addEventListener('click', function() {
    const img = this.querySelector('img');
    img.classList.toggle('blurred');
    const text = this.querySelector('.after-image-text');
    text.classList.toggle('disable');
});
</script>
