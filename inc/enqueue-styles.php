<?php
/**
 * 
 * 
 * 
 * @package iggy
 */
?>

<?php

function iggy_enqueue_styles() {

    // Register Bootstrap Styles
    wp_register_style( 'bootstrap-style', IGGY_THEME_URI . '/assets/library/src/bootstrap/css/bootstrap.css', array(), false, 'all' );


    // Register Theme Styles
    wp_register_style( 'theme-style', IGGY_THEME_URI . '/assets/css/theme.css', array(), false, 'all' ); // * NEED TO ADD TIME STAMP


    // Enqueue Bootstrap Styles
    wp_enqueue_style( 'bootstrap-style' );


    // Enqueue Theme Styles
    wp_enqueue_style( 'theme-style' );

}
add_action( 'wp_enqueue_scripts', 'iggy_enqueue_styles' );