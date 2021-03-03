<?php
/**
 * 
 * 
 * 
 * @package iggy
 */
?>

<?php

// Widgets

// ! Look into the method of a foreach loop to generate more than one widget.

function iggy_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Widget One', 'iggy' ),
            'id'            => 'widget-1',
            'description'   => esc_html__( 'Add widgets here to appear in your footer' ),
            'before_widget' => '<section id="%1%s" class="%2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__( 'Widget Two', 'iggy' ),
            'id'            => 'widget-2',
            'description'   => esc_html__( 'Add widgets here to appear in your footer' ),
            'before_widget' => '<section id="%1%s" class="%2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__( 'Widget three', 'iggy' ),
            'id'            => 'widget-3',
            'description'   => esc_html__( 'Add widgets here to appear in your footer' ),
            'before_widget' => '<section id="%1%s" class="%2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'iggy_widgets_init' );