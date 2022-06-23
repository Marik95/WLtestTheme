<?php

function wl_test_theme_scripts() {
	wp_enqueue_style( 'wl-test-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'wl-test-theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'wl-test-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wl_test_theme_scripts' );