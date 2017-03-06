<?php
/**
 * CSS related hooks.
 *
 * This file contains hook functions which are related to CSS.
 *
 * @package Clean_Corporate
 */

if ( ! function_exists( 'clean_corporate_trigger_custom_css_action' ) ) :

	/**
	 * Do action theme custom CSS.
	 *
	 * @since 1.0.0
	 */
	function clean_corporate_trigger_custom_css_action() {

		/**
		 * Hook - clean_corporate_action_theme_custom_css.
		 *
		 * @hooked clean_corporate_add_option_custom_css - 99
		 */
		do_action( 'clean_corporate_action_theme_custom_css' );

	}

endif;

add_action( 'wp_head', 'clean_corporate_trigger_custom_css_action', 99 );

if ( ! function_exists( 'clean_corporate_add_option_custom_css' ) ) :

	/**
	 * Add custom CSS.
	 *
	 * @since 1.0.0
	 */
	function clean_corporate_add_option_custom_css() {

		$custom_css = clean_corporate_get_option( 'custom_css' );
		$output = '';
		if ( ! empty( $custom_css ) ) {
			$output = "\n" . '<style type="text/css">' . "\n";
			$output .= wp_strip_all_tags( $custom_css );
			$output .= "\n" . '</style>' . "\n" ;
		}
		echo $output;

	}

endif;

add_action( 'clean_corporate_action_theme_custom_css', 'clean_corporate_add_option_custom_css', 99 );
