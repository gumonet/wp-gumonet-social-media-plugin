<?php
/**
 * Plugin Name: Gumonet Social Icons
 * Plugin URI: http://gumonet.com
 * Description: Insert a list of social icons in your website
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
function start_jay_audio_player_mvp() {
	new WPB_JAP_MVP();
}

add_action( 'init', 'start_jay_audio_player_mvp' );
