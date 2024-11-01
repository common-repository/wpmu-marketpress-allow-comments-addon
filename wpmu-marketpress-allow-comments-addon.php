<?php
/*
Plugin Name: WPMU MarketPress Allow Comments
Version: 0.3
Plugin URI: http://wordpress.org/extend/plugins/wpmu-marketpress-allow-comments-addon/
Description: A simple addon that will allow comments to be added to product listing.
Author: Alex (Shurf) Frenkel
Author URI: http://alex.frenkel-online.com/
*/

add_action('init', 'shurf_wpml_marketpress_init');

function shurf_wpml_marketpress_init() {
	add_post_type_support( 'product', 'comments' );
}

