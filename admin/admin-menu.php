<?php
// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// add top-level administrative menu
function myplugin_add_toplevel_menu() {

	/*
		add_menu_page(
			string   $page_title,
			string   $menu_title,
			string   $capability,
			string   $menu_slug,
			callable $function = '',
			string   $icon_url = '',
			int      $position = null
		)
	*/

	add_menu_page(
		'Antenna Digital Support',
		'Antenna Support',
		'manage_options',
		'ad-admin-support',
		'myplugin_display_settings_page',
		'dashicons-sos',
		3
	);

}
add_action( 'admin_menu', 'myplugin_add_toplevel_menu' );
