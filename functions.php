<?php
// The TwentyTen theme offers the ability to upload a banner and change the background colour.
// To remove these options, let's do the following:

function blm_theme_setup() {

	remove_custom_background();
	remove_custom_image_header();
}

add_action( 'after_setup_theme', 'blm_theme_setup', 11);
?>
