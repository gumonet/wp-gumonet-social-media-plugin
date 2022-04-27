<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Plugin Slug.
 *
 * @since 0.1.0
 * @var   string   The Plugin slug name.
 */
define( 'WP_GM_SP_PLUGIN_SLUG', 'wpb-grtpc' );

/**
 * Plugin path.
 *
 * @since 0.1.0
 * @var   string   The WP Bullet Lazy Load path.
 */
define( 'WP_GM_SP_PATH', plugin_dir_path( __DIR__ ) );

/**
 * Plugin version.
 *
 * @since 0.1.0
 * @var   string   The Plugin version.
 */
define( 'WP_GM_SP_VERSION', '0.1.0' );

/**
 * Plugin URL.
 *
 * @since 0.1.0
 * @var   string   The Plugin URL.
 */
define(
	'WP_GM_SP_URL',
	plugin_dir_url( __DIR__ )
);
