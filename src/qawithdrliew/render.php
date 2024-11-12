<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div  <?php echo get_block_wrapper_attributes(); ?>>
    <div class="qa-container">
        <div class="qa-item left-item">
            <h2><?php echo $attributes["bannerTitle"] ?></h2>
            <h3><?php echo $attributes["smallTitle"] ?></h3>
            <p>
            <?php echo $attributes["paragraph"] ?>
            </p>
            <a target="_blank" class="ma">MORE ABOUT THIS PROCEDURE</a>
        </div>
        <div class="qa-item right-item">
            <div class="iframe-container ">
              <iframe class="responsive-iframe" src=<?php echo $attributes["video_url"] ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div>
        <a target="_blank"  href="https://www.youtube.com/@drjulianliew">
            <i class="fa fa-youtube-play" style="font-size:36px;color:red"></i>
        </a>
    </div>
</div>

