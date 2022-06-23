<?php

/** Taxonomies for CAR_PT */

function add_car_taxonomies() {
    // Add new "Countries" taxonomy to Cars
    register_taxonomy('country', 'cars', array(
      // Hierarchical taxonomy (like categories)
      'hierarchical' => true,
      // This array of options controls the labels displayed in the WordPress Admin UI
      'labels' => array(
        'name' => _x( 'Countries', 'taxonomy general name' ),
        'singular_name' => _x( 'Country', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Countries' ),
        'all_items' => __( 'All Countries' ),
        'parent_item' => __( 'Parent Country' ),
        'parent_item_colon' => __( 'Parent Country:' ),
        'edit_item' => __( 'Edit Country' ),
        'update_item' => __( 'Update Country' ),
        'add_new_item' => __( 'Add New Country' ),
        'new_item_name' => __( 'New Country' ),
        'menu_name' => __( 'Countries' ),
      ),
      // Control the slugs used for this taxonomy
      'rewrite' => array(
        'slug' => 'countries', 
        'with_front' => false, 
        'hierarchical' => true 
      ),
    ));
    // Add new "Models" taxonomy to Cars
    register_taxonomy('model', 'cars', array(
        // Hierarchical taxonomy (like categories)
        'hierarchical' => true,
        // This array of options controls the labels displayed in the WordPress Admin UI
        'labels' => array(
          'name' => _x( 'Models', 'taxonomy general name' ),
          'singular_name' => _x( 'Model', 'taxonomy singular name' ),
          'search_items' =>  __( 'Search Models' ),
          'all_items' => __( 'All Models' ),
          'parent_item' => __( 'Parent Model' ),
          'parent_item_colon' => __( 'Parent Model:' ),
          'edit_item' => __( 'Edit Model' ),
          'update_item' => __( 'Update Model' ),
          'add_new_item' => __( 'Add New Model' ),
          'new_item_name' => __( 'New Model' ),
          'menu_name' => __( 'Models' ),
        ),
        // Control the slugs used for this taxonomy
        'rewrite' => array(
          'slug' => 'models', 
          'with_front' => false, 
          'hierarchical' => true 
        ),
      ));
  }
  add_action( 'init', 'add_car_taxonomies', 0 );

 