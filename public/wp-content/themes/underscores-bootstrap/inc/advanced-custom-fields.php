<?php
// Define path and URL to the ACF plugin.
define( 'MY_ACF_PATH', get_stylesheet_directory() . '/inc/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/inc/acf/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
// add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
// function my_acf_settings_show_admin( $show_admin ) {
//     return false;
// }

function my_acf_block_render_callback( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/block-templates/{$slug}.php") ) ) {
		include( get_theme_file_path("/block-templates/{$slug}.php") );
	}
}

add_action('acf/init', 'my_acf_init');
function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// acf_register_block(array(
		// 	'name'				=> 'person-block',
		// 	'title'				=> __('Person Block'),
		// 	'description'		=> __('A Person Biography Block'),
		// 	'render_callback'	=> 'my_acf_block_render_callback',
		// 	'category'			=> 'formatting',
		// 	'icon'				=> 'admin-users',
		// 	'keywords'			=> array( 'person', 'biography' ),
		// ));
	}
}

// Add options page 
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}
