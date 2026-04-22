<?php
/**
 * Plugin Name: WP FreshStart
 * Plugin URI:  https://github.com/your-repo/wp-freshstart
 * Description: Quickly clean up and configure a fresh WordPress installation — including Elementor setup tasks.
 * Version:     1.3.0
 * Author:      Ashen Fernando
 * Author URI:  https://yourwebsite.com
 * License:     GPL-2.0+
 * Text Domain: wp-freshstart
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'FIA_VERSION', '1.3.0' );
define( 'FIA_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'FIA_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

require_once FIA_PLUGIN_DIR . 'includes/class-fia-admin.php';
require_once FIA_PLUGIN_DIR . 'includes/class-fia-runner.php';

new FIA_Admin();
