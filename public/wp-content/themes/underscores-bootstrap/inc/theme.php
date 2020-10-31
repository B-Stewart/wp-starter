<?php 

// Set up colors
add_theme_support( 'editor-color-palette', array(
  array(
		'name'  => __( 'White', 'underscores-bootstrap' ),
		'slug'  => 'white',
		'color' => '#FFFFFF',
  ),
  array(
		'name'  => __( 'Light', 'underscores-bootstrap' ),
		'slug'  => 'light',
		'color'	=> '#f5f5f5',
	),
	array(
		'name'  => __( 'Netural', 'underscores-bootstrap' ),
		'slug'  => 'neutral',
		'color' => '#EAE6E1',
	),
	array(
		'name'  => __( 'Dark', 'underscores-bootstrap' ),
		'slug'  => 'dark',
		'color' => '#333333',
  ),
  array(
		'name'  => __( 'Black', 'underscores-bootstrap' ),
		'slug'  => 'black',
		'color' => '#000000',
  ),
  array(
		'name'  => __( 'Primary', 'underscores-bootstrap' ),
		'slug'  => 'primary',
		'color' => '#7B7013',
  ),
  // array(
	// 	'name'  => __( 'Secondary', 'underscores-bootstrap' ),
	// 	'slug'  => 'secondary',
	// 	'color' => '#333',
  // ),
) );

// Add wide and full width alignment options
add_theme_support( 'align-wide' );

// Add extra large image size
function add_extra_large_size() {
	add_image_size( 'extra_large', 2000, 9999 ); // 2000 pixels wide (and unlimited height)
}
add_action( 'after_setup_theme', 'add_extra_large_size' );

function custom_image_sizes( $sizes ) {
	return array_merge( $sizes, array(
		'extra_large' => __('Extra Large'),
		) );
	}
add_filter( 'image_size_names_choose', 'custom_image_sizes' );