<?php
/*
Plugin Name: Antenna Digital Admin Support
Description: Provides a form to send support details directly to Antenna Support
Plugin URI:  https://antennagroup.com/
Author:      Antenna | Digital
Version:     1.1
License:     GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.txt
*/

// exit if file is called directly
if( ! defined( 'ABSPATH' ) ) exit;


include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
$updater = new AD_Admin_Support_Updater( __FILE__ );
$updater->set_username( 'Dave-Haggblad' );
$updater->set_repository( 'ad-admin-support' );
$updater->initialize();

// if admin area
if ( is_admin() ) {
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-settings.php';
}
