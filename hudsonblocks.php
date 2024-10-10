<?php
/**
 * Plugin Name:       Hudsonblocks
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.6
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       hudsonblocks
 *
 * @package Hudsonblocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function hudsonblocks_hudsonblocks_block_init() {
	register_block_type( __DIR__ . '/build/blockbanner' );
	register_block_type( __DIR__ . '/build/secondblock' );
	register_block_type( __DIR__ . '/build/categorysection' );
	register_block_type( __DIR__ . '/build/popularposts' );
	register_block_type( __DIR__ . '/build/blog_posts' );
}
add_action( 'init', 'hudsonblocks_hudsonblocks_block_init' );

function enqueue_slick_carousel() {
    wp_enqueue_style( 'slick-carousel-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
    wp_enqueue_script( 'slick-carousel-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_slick_carousel' );
