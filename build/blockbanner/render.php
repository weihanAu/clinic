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
                <h1 class="procedure-hero__headline" style="text-align: start;margin-left:0">
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
