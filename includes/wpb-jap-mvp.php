<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'WPB_JAP_MVP' ) ) {
	/**
	 * Initial class
	 *
	 * @since 0.1.0
	 */
	class WPB_JAP_MVP {

		public function __construct() {
			add_action( 'wp_enqueue_scripts', array( $this, 'load_assets' ) );
			add_shortcode( 'jap_mvp_audio', array( $this, 'do_short_code' ) );
			add_action( 'wp_footer', array( $this, 'insert_player_on_footer' ) );

		}

		public function do_short_code( $atts ) {
			$file_url             = $atts['track'];
			$array_file_url       = explode( '/', $file_url );
			$filename_without_ext = preg_replace( '/\\.[^.\\s]{3,4}$/', '', $array_file_url[ count( $array_file_url ) - 1 ] );
			return wpb_jap_mvp_view( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				WPB_JAP_MVP_PATH . 'includes/views/view-wpb-jap-mvp-short-code.php',
				array(
					'filename' => $filename_without_ext,
					'url'      => $file_url,
				)
			); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}

		public function load_assets() {
			wp_enqueue_script(
				'wpb-jap-mvp-js',
				WPB_JAP_MVP_URL . 'dist/bundle.js',
				null,
				WPB_JAP_MVP_VERSION,
				true
			);
			wp_enqueue_style(
				'wpb-jap-mvp-css',
				WPB_JAP_MVP_URL . 'dist/css/main.css',
				null,
				WPB_JAP_MVP_VERSION
			);
		}

		public function insert_player_on_footer() {
			echo wpb_jap_mvp_view( WPB_JAP_MVP_PATH . 'includes/views/view-wpb-jap-mvp-bar-player-view.php' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}

	}
}