<?php
/** Template name: Car template 
 *  Template post type: cars
*/

get_header();
$fuels = array('fuel1'=>'Fuel 1', 'fuel2'=>'Fuel 2', 'fuel3'=>'Fuel 3', 'fuel4'=>'Fuel 4');
 $selected_fuel = esc_attr( get_post_meta( get_the_ID(), 'car_fuel', true ) );
 global $post;
$country = wp_get_post_terms( $post->ID, 'country');
$model = wp_get_post_terms( $post->ID, 'model');
?>
<div class="single_car_page">
    <style>
        .car_color{
            background: <?php echo esc_attr( get_post_meta( get_the_ID(), 'car_color', true ) ); ?>;
            display: inline-block;
            width: 40px;
            height: 20px;
        }
    </style>
    <h1><?php the_title(); ?></h1>
    <p> <span><?php echo $model[0]->name; ?>, </span> <span> <?php echo $country[0]->name; ?></span> </p>
    <div class="features">
        <p class="car_field">
            <label>Color: <span class="car_color"></span> </label>
        </p>
        <p class="car_field">
            <label>Fuel: <?php echo $fuels[$selected_fuel]; ?></label>
        </p>
        <p class="car_field">
            <label>Price: <?php echo esc_attr( get_post_meta( get_the_ID(), 'car_price', true ) ); ?></label>        
        </p>
        <p class="car_field">
            <label>Power: <?php echo esc_attr( get_post_meta( get_the_ID(), 'car_power', true ) ); ?></label>
        </p>
    </div>
    <?php the_post_thumbnail(); ?>
    
</div>

<?php
get_footer();