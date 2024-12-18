<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div  <?php echo get_block_wrapper_attributes(); ?>>
	<section class="hero-section">
        <div class="procedure-hero">
            <div class="procedure-hero__image"><img decoding="async"
                src=<?php echo $attributes['bannerImage'] ?>
                alt="Image of a patient post operation."></div>
            <div class="procedure-hero__content">
            <div class="procedure-hero__content__container">
                <!-- <p class="procedure-hero__breadcrumbs"><a href="https://theclinic.com.au/breast/">Breast</a><img decoding="async"
                    class="procedure-hero__breadcrumbs__arrow"
                    src="https://theclinic.com.au/wp-content/themes/theclinictheme/assets/img/icons/arrow-right.svg"
                    alt="breadcrumb arrow"><a href="#"><?php echo $attributes['bannerTitle']  ?></a></p> -->
                <h1 class="procedure-hero__headline" style="text-align: start;margin-left:0" id="baner-text-content">
                    <?php echo  $attributes['bannerTitle']  ?> </h1>
                <h2 class="procedure-hero__subheadline">
                    <?php echo  $attributes['bannerText']  ?> </h1>
                </h2>
                <a class="cta" href="/get-to-know-us/#contact">
                Book a consultation </a>
            </div>
            <img decoding="async" class="procedure-hero__content__swirl"
                src="https://theclinic.com.au/wp-content/themes/theclinictheme/assets/img/decoration/hero-swirl.svg"
                alt="hero swirl device">
            </div>
        </div>
    </section>
</div>
<script>
    const adjustFontSize = () => {
    const container = document.querySelector('.wp-block-hudsonblock-blogbanners .procedure-hero__content__container');
    const content = document.getElementById('baner-text-content');

    let fontSize = 70; // 初始字体大小
    content.style.fontSize = fontSize + 'px';
        console.log(container)
    // 动态调整字体，直到文本完全适配容器
    while ((content.scrollWidth > container.clientWidth || content.scrollHeight > container.clientHeight) && fontSize > 10) {
      fontSize -= 1;
      content.style.fontSize = fontSize + 'px';
    }
  };

  // 初始化字体大小调整
  adjustFontSize();

  // 可选：实时监听用户输入
  window.addEventListener('resize', adjustFontSize);
</script>