<?php


/** Metaboxes for post type CARS */
function register_cars_meta_boxes() {
    add_meta_box( 'features', __( 'Features', 'features' ), 'features_display_callback', 'cars' );
}
add_action( 'add_meta_boxes', 'register_cars_meta_boxes' );


/** Cars metaboxes display callback*/

function features_display_callback( $post ) {
    include ('custom-fields/car-features.php');;
}


/** save Cars metaboxes */
function save_cars_meta_boxes_data( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }

    $fields = [
        'car_color',
        'car_fuel',
        'car_power',
        'car_price',
    ];
    foreach($fields as $field){
        if ( ! isset( $_POST[$field] ) ) {
            return;
        }

        // Check the user's permissions.
        if ( isset( $_POST['post_type'] ) && 'cars' == $_POST['post_type'] ) {

            if ( ! current_user_can( 'edit_page', $post_id ) ) {
                return;
            }

        }
        else {

            if ( ! current_user_can( 'edit_post', $post_id ) ) {
                return;
            }
        }

        if ( ! isset( $_POST[$field] ) ) {
            return;
        }

        if ( array_key_exists( $field, $_POST ) ) {
            // Sanitize user input.
            $my_data = sanitize_text_field( $_POST[$field] );

            // Update the meta field in the database.
            update_post_meta( $post_id, $field, $my_data );
            }
    }
    
}

add_action( 'save_post', 'save_cars_meta_boxes_data' );