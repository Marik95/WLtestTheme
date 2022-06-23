<?php


function wl_test_theme_setup() {
	
	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'wl-test-theme' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);


	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'wl_test_theme_setup' );


function wl_test_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wl_test_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'wl_test_theme_content_width', 0 );