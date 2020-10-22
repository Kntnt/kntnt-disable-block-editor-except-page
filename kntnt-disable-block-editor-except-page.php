<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Disable Block Editor Except Page
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Disables the block editor "Gutenberg" for all post types except pages.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

defined( 'ABSPATH' ) || die;

add_filter( 'use_block_editor_for_post_type', function( $use_block_editor, $post_type ) {
  return 'page' == $post_type ? true : false;
}, 5, 2 );
