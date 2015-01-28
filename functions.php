
<?php

function theme_name_scripts_zero() {

$args = array(
	'width'         => 1248,
	'height'        => 250,
	'default-image' => get_stylesheet_directory_uri() . '/images/PugetSoundShipJanuary2015byDanMcKeown.jpg',
);
add_theme_support( 'custom-header', $args );




								}


add_action( 'after_setup_theme', 'theme_name_scripts_zero' );
?>
