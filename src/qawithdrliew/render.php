<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div  <?php echo get_block_wrapper_attributes(); ?>>
    <div class="qa-container">
        <div class="qa-item left-item">
            <h2><?php echo $attributes["bannerTitle"] ?></h2>
            <h3><?php echo $attributes["smallTitle"] ?></h3>
            <p>
            <?php echo $attributes["paragraph"] ?>
            </p>
            <a>MORE ABOUT THIS PROCEDURE</a>
        </div>
        <div class="qa-item right-item">
            <div class="iframe-container ">
              <iframe class="responsive-iframe" src=<?php echo $attributes["video_url"] ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            </div>
    </div>
</div>

