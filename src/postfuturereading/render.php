<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div class="reading-section" <?php echo get_block_wrapper_attributes(); ?>>
    <h2 class="reading-title"><?php echo $attributes["title"]; ?></h2>
    <ul class="reading-list">
        <li class="reading-item"><a href="<?php echo $attributes["post1"]["link"]; ?>"><?php echo $attributes["post1"]['title']['rendered']; ?></a></li>
        <li class="reading-item"><a href="<?php echo $attributes["post2"]["link"]; ?>"><?php echo $attributes["post2"]['title']['rendered']; ?></a></li>
        <li class="reading-item"><a href="<?php echo $attributes["post3"]["link"]; ?>"><?php echo $attributes["post3"]['title']['rendered']; ?></a></li>
    </ul>
</div>