<?php
function twentyten_setup() {


	// This theme allows users to set a custom background
	//add_custom_background();


	// Add a way for the custom header to be styled in the admin panel that controls
	// custom headers. See twentyten_admin_header_style(), below.
	//add_custom_image_header( '', 'twentyten_admin_header_style' );

	// ... and thus ends the changeable header business.

// Add menu features
register_nav_menus(array('primary'=>__('Primary Menu'),));

}

