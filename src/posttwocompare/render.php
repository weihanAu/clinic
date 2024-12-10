<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div  <?php echo get_block_wrapper_attributes(); ?>>
    <div class="post-image-compare">
        <div class="compare-img-container">
            <img src=<?php echo $attributes["bannerImage"] ?> alt="Before">
            <div class="post-text"><?php echo $attributes["before"] ?></div>
        </div>

        <div class="blurred compare-img-container after-image" id="after-image">
            <img class="blurred" src=<?php echo $attributes["bannerImage2"] ?> alt="After">
            <div class="after-image-text">Click to reveal</div>
            <div class="post-text"><?php echo $attributes["after"] ?></div>
        </div>
      
    </div>
</div>

<script>
// 获取多个元素需要使用 getElementsByClassName，修正为:
document.querySelectorAll('.after-image').forEach((element) => {
  if (!element.classList.contains('event-bound')) {
    element.addEventListener('click', function () {
      const img = this.querySelector('img');
      if (img) {
        img.classList.toggle('blurred');
      }

      const text = this.querySelector('.after-image-text');
      if (text) {
        text.classList.toggle('disable');
      }
    });

    // 给元素加一个标记，防止重复绑定
    element.classList.add('event-bound');
  }
});

</script>
