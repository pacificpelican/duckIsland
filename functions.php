
<?php

function theme_name_scripts_zero() {

$args = array(
	'width'         => 960,
	'height'        => 200,
	'default-image' => get_stylesheet_directory_uri() . '/images/PugetSoundClouds2015byDanMcKeown.jpg',
);
add_theme_support( 'custom-header', $args );




								}


add_action( 'after_setup_theme', 'theme_name_scripts_zero' );
?>
