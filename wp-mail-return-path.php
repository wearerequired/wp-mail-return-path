<?php
/**
 * Plugin Name: WP Mail Return Path
 * Description: Set sender/return path for mail if not set.
 * Version:     1.1.0
 * Author:      required
 * Author URI:  https://required.com
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package Required\WPMailReturnPath
 */

namespace Required\WPMailReturnPath;

// phpcs:disable WordPress.NamingConventions.ValidVariableName.UsedPropertyNotSnakeCase

/**
 * Sets sender/return path for mail if not set.
 *
 * Prevents filling it with a server name which isn't authorized.
 *
 * @param \PHPMailer $phpmailer The PHPMailer instance (passed by reference).
 */
function set_sender( $phpmailer ) {
	$environment_type = wp_get_environment_type();
	if ( 'local' === $environment_type || 'development' === $environment_type ) {
		return;
	}

	if ( '' === $phpmailer->Sender ) {
		$phpmailer->Sender = $phpmailer->From;
	}
};
add_action( 'phpmailer_init', __NAMESPACE__ . '\set_sender' );
