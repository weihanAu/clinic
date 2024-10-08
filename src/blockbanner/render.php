<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<?php
error_log(print_r($attributes,true));
$current_year = date( "Y" );
if ( ! empty( $attributes['startingYear'] ) && ! empty( $attributes['showStartingYear'] ) ) {
    $display_date = $attributes['startingYear'] . '–' . $current_year;
} else {
    $display_date = $current_year;
}
?>
<p  <?php echo get_block_wrapper_attributes(); ?>>
	<section class="hero-section">
        <div class="procedure-hero">
            <div class="procedure-hero__image"><img decoding="async"
                src="https://theclinic.com.au/wp-content/uploads/2023/12/breast-reduction.png"
                alt="Image of a patient post operation."></div>
            <div class="procedure-hero__content">
            <div class="procedure-hero__content__container">
                <p class="procedure-hero__breadcrumbs"><a href="https://theclinic.com.au/breast/">Breast</a><img decoding="async"
                    class="procedure-hero__breadcrumbs__arrow"
                    src="https://theclinic.com.au/wp-content/themes/theclinictheme/assets/img/icons/arrow-right.svg"
                    alt="breadcrumb arrow"><a href="#">Breast Reduction Surgery</a></p>
                <h1 class="procedure-hero__headline">
                Breast Reduction Surgery </h1>
                <h2 class="procedure-hero__subheadline">
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
     <?php echo esc_html( $display_date ); ?>
</p>
