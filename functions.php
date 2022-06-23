<?php


/**
 * Main theme settings
 */
require get_template_directory() . '/include/theme-settings.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/include/wp-enqueue-scripts-styles.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/include/customizer.php';

/**
 * Custom post types.
 */
require get_template_directory() . '/include/custom-post-types.php';

/**
 * Custom taxonomies.
 */
require get_template_directory() . '/include/custom-taxonomies.php';

/**
 * Custom metaboxes.
 */
require get_template_directory() . '/include/custom-meta-boxes.php';


/**
 * Shortcodes
 */
require get_template_directory() . '/include/shortcodes.php';
