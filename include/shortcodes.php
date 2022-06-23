<?php

function cars_shortcode(){
    $args = array(
        'posts_per_page' => 10,
        'post_type' => 'cars',
        'post_status' => 'publish',
        'orderby' => 'date'
    );

    $query = new WP_Query( $args );
    if ( $query->have_posts() ) {
        
        while ( $query->have_posts() ) { 
            $query->the_post();
            $post_id = get_the_ID();
            $title = get_the_title();
            $link = get_permalink();
            $content = $content . '<p> <a href="'.$link.'" target="_blank"> '.$title.' </a> </p>';
        }
        return $content;
    }
}

add_shortcode('cars', 'cars_shortcode');