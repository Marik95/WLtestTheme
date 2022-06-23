<?php 
 $fuels = array('fuel1'=>'Fuel 1', 'fuel2'=>'Fuel 2', 'fuel3'=>'Fuel 3', 'fuel4'=>'Fuel 4');
 $selected_fuel = esc_attr( get_post_meta( get_the_ID(), 'car_fuel', true ) );
?>
<div class="car_box">
    </style>
    <p class="meta-options car_field">
        <label for="car_color">Choose color</label>
        <input id="car_color" type="color" name="car_color" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'car_color', true ) ); ?>">
    </p>
    <p class="meta-options car_field">
        <label for="car_color">Fuel</label>
        <select id="car_fuel" name="car_fuel">
            <?php foreach($fuels as $key_fuel => $val_fuel) { ?>
                <option value="<?php echo $key_fuel ?>" <?php if($key_fuel===$selected_fuel) echo 'selected' ?>><?php echo $val_fuel ?></option>
            <?php } ?>
        </select>
    </p>
    <p class="meta-options car_field">
        <label for="car_price">Price</label>
        <input id="car_price" type="number" name="car_price" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'car_price', true ) ); ?>">
    </p>
    <p class="meta-options car_field">
        <label for="car_power">Power</label>
        <input id="car_power" type="number" name="car_power" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'car_power', true ) ); ?>">
    </p>
</div>