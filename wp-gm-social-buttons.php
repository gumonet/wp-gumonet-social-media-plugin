<?php
/**
 * Plugin Name: Gumonet Social Buttons
 * Plugin URI: http://gumonet.com
 * Description: Insert a list of social buttons in your website
 * Version: 1.0.0
 * Author: Gumonet
 * Author URI:  http://gumonet.com/
 * License: GPL-3.0-or-later
 **/

/**
 * Autoload classes from the plugin.
 **/
require_once 'includes/required-classes.php';

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Access denied.' );
}
/**
 * Init the plugin
 **/
function wp_gm_social_buttons_init() {
	new WP_GM_SP();
}

add_action( 'init', 'wp_gm_social_buttons_init' );
