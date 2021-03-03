<?php
/**
 * 
 * 
 * 
 * @package iggy
 */
?>
<?php

function iggy_enqueue_scripts() {

    // Register Bootstrap Scripts
    wp_register_script( 'bootstrap-js', IGGY_THEME_URI . '/assets/library/src/bootstrap/js/bootstrap.bundle.js', array( 'jquery' ), false, true );


    // Register Theme Scripts
    wp_register_script( 'theme-js', IGGY_THEME_URI . '/assets/js/theme.js', array(), false, 'all' );  // * NEED TO ADD TIME STAMP


    // Enqueue Bootstrap Scripts
    wp_enqueue_script( 'bootstrap-js' );


    // Enqueue Theme Scripts
    wp_enqueue_script( 'theme-js' );
}
add_action( 'wp_enqueue_scripts', 'iggy_enqueue_scripts' );