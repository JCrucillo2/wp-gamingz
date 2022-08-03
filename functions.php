<?php
/**
 * 
 * plugin file area of the website
 * don't close the php tag. It gets closed somewhere.
 * 
 * @package gamingz
 * @since 1.0.0
 * 
 */

// STYLES & SCRIPTS
function gamingz_enqueue_styles() {
    // styles
    wp_enqueue_style('style', get_stylesheet_uri() );

    // scripts
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array ('jquery'), 1.1,true);
}

add_action('wp_enqueue_scripts', 'gamingz_enqueue_styles');