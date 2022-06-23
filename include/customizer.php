<?php


function test_theme_new_customizer_settings($wp_customize) {
	// add a setting for the site logo
	$wp_customize->add_setting('phone');
	// Add a control to upload the logo
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'phone',
	array(
	'label' => 'Enter your phone',
	'section' => 'title_tagline',
	'settings' => 'phone',
	'type' => 'text',
	) ) );
	}
	add_action('customize_register', 'test_theme_new_customizer_settings');