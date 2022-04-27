<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'WP_GM_SP' ) ) {
	/**
	 * Initial class
	 *
	 * @since 0.1.0
	 */
	class WP_GM_SP {

		public function __construct() {
			add_action( 'wp_enqueue_scripts', array( $this, 'load_assets' ) );
			//add_shortcode( 'jap_mvp_audio', array( $this, 'do_short_code' ) );
			add_action( 'wp_footer', array( $this, 'wp_gm_sp_insert_social_icons' ) );

		}

		/*public function do_short_code( $atts ) {
			$file_url             = $atts['track'];
			$array_file_url       = explode( '/', $file_url );
			$filename_without_ext = preg_replace( '/\\.[^.\\s]{3,4}$/', '', $array_file_url[ count( $array_file_url ) - 1 ] );
			return wpb_jap_mvp_view( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				WP_GM_SP_PATH . 'includes/views/view-wpb-jap-mvp-short-code.php',
				array(
					'filename' => $filename_without_ext,
					'url'      => $file_url,
				)
			); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}*/

		public function load_assets() {
			/*wp_enqueue_script(
				'wpb-jap-mvp-js',
				WP_GM_SP_URL . 'dist/bundle.js',
				null,
				WP_GM_SP_VERSION,
				true
			);*/
			wp_enqueue_style(
				WP_GM_SP_URL . 'style',
				WP_GM_SP_URL . 'dist/css/main.css',
				null,
				WP_GM_SP_VERSION
			);
		}

		public function wp_gm_sp_insert_social_icons() {
			echo wp_gm_sp_mvp_view( WP_GM_SP_PATH . 'includes/views/view-wp-gm-social-icons.php' );
		}
		/*public function insert_player_on_footer() {
			echo wpb_jap_mvp_view( WP_GM_SP_PATH . 'includes/views/view-wpb-jap-mvp-bar-player-view.php' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}*/

	}
}