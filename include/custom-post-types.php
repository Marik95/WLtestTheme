<?php

/*  add post type "CAR" */

add_action('init', 'cars_pt');
function cars_pt(){
  register_post_type('cars', array(
	'labels'             => array(
	  'name'               => 'Car', // Основное название типа записи
	  'singular_name'      => 'Car', // отдельное название записи типа Book
	  'add_new'            => 'Add new',
	  'add_new_item'       => 'Add new car',
	  'edit_item'          => 'Edit car data',
	  'new_item'           => 'New car',
	  'view_item'          => 'View car',
	  'search_items'       => 'Search cars',
	  'not_found'          => 'Cars not found',
	  'menu_name'          => 'Cars',
	  ),
	'public'             => true,
	'publicly_queryable' => true,
	'show_ui'            => true,
	'show_in_menu'       => true,
	'query_var'          => true,
	'rewrite'            => true,
	'capability_type'    => 'post',
	'has_archive'        => true,
	'hierarchical'       => false,
	'menu_position'      => 5,
	'menu_icon'      => 'dashicons-car',
	'taxonomies'     => array('models', 'countries'),
	'supports'           => array('title', 'thumbnail', 'page-attributes')
  ) );
}

