<?php
// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// display the plugin settings page
function myplugin_display_settings_page() {
	// check if user is allowed access
	if ( ! current_user_can( 'manage_options' ) ) return;
	?>

  <iframe src="https://www.antennagroup.com/support-form" width="850" height="500" style="height: 90vh; width: 100%;"></iframe>

	<?php

}
