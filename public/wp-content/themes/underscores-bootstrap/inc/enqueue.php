<?php
/**
 * Enqueue scripts and styles.
 */
function underscores_bootstrap_static() {
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );
	$css_bundle = '/dist/entry.css';
	$css_version = $theme_version . '.' . filemtime( get_template_directory() . $css_bundle );
	$js_bundle = '/dist/entry.js';
	$js_version = $theme_version . '.' . filemtime( get_template_directory() . $js_bundle );
		
	wp_enqueue_style( 'theme-styles', get_template_directory_uri() . $css_bundle, array(), $css_version );
	// wp_enqueue_style( 'animate', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css", array(), '3.7.2' );


	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), '1.14.7', true);
	wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('popper'), '4.5.2', true);

	// wp_enqueue_script( 'ionicons-nomodule', 'https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js', array(), '5.1.2', true);
	wp_enqueue_script( 'polyfill', 'https://polyfill.io/v3/polyfill.min.js?features=es2015', array(), '3.0.0', true);

	wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . $js_bundle, array('jquery', 'popper', 'bootstrap', 'polyfill'), $js_version, true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'underscores_bootstrap_static' );