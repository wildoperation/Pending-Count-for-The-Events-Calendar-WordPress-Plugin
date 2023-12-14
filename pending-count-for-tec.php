<?php
/**
 * Plugin Name:     Pending Count for The Events Calendar
 * Plugin URI:      https://github.com/wildoperation/Pending-Count-for-The-Events-Calendar-WordPress-Plugin
 * Description:     Adds a pending event count to the admin menu of The Events Calendar.
 * Version:         1.0.0
 * Author:          Wild Operation
 * Author URI:      https://wildoperation.com
 * License:         GPL-2.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:     pending-count-for-tec
 *
 * @package WordPress
 * @subpackage Pending Count for The Events Calendar
 * @since 1.0.0
 * @version 1.0.0
 */

/* Abort! */
if ( ! defined( 'WPINC' ) ) {
	die;
}

require plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

new \WOPECTEC\Vendor\WOWPRB\WPPluginReviewBug( __FILE__ );

add_action(
	'plugins_loaded',
	function () {
		new WOPECTEC\Admin();
	}
);
