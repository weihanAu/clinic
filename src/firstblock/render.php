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
		<div> <?php echo $attributes['startingYear'] ?> </div>
     <?php echo esc_html( $display_date ); ?>
</p>
