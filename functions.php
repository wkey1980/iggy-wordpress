<?php
/**
 * 
 * Theme Functions
 * 
 * @package iggy
 */
?>

<?php

define( 'IGGY_THEME_DIR', get_template_directory() );
define( 'IGGY_THEME_URI', get_template_directory_uri() );

if ( ! function_exists( 'iggy_setup' ) ) ;
    function iggy_setup(); {
        load_theme_textdomain( 'iggy', IGGY_THEME_DIR . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support(
            'post-formats',
            array(
                'link',
                'aside',
                'gallery',
                'image',
                'quote',
                'status',
                'video',
                'audio',
                'chat',
            )
        );
        add_theme_support( 'post-thumbnails' );
        add_image_size( 'iguana-standard', 400, 400, true ); // width, height crop


        // Register menu - menus.php

        add_theme_support(
            'html5',
            array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
                'navigation-widgets',
            )
        );
        $header_width = 2000;
        $header_height = 450;
        add_theme_support(
            'custom-header',
            apply_filters( 'iguana_custom_header_args',
            array(
                'default-color' => 'ffffff', // Customize > Colors > Header Text Color
                'default-image' => '',
                'width' => $header_width,
                'height' => $header_height,
                'flex-height' => false,
                'flex-width' => false,
                )
            )
        );
        add_theme_support(
            'custom-background',
            apply_filters(
                'iguana_custom_background_args',
                array(
                    'default-color'=> 'ffffff', // Customize > Colors > Background Color
                    'default-image'=> '',
                )
            )
        );
        $logo_width = 300;
        $logo_height = 100;
        add_theme_support(
            'custom-logo',
            array(
                'width' => $logo_width,
                'height' => $logo_height,
                'flex-width' => true,
                'flex-height' => true,
                'header-text' => array( 'title-tag', 'site-description' ),
            )
        );
        add_theme_support( 'customize-selective-refresh-widgets' );


    }
endif;
add_action( 'after_setup_theme', 'iggy_setup' );




// Register Google Fonts
require IGGY_THEME_DIR . './inc/google-fonts.php';


// Enqueue Styles
require IGGY_THEME_DIR . './inc/enqueue-styles.php';


// Enqueue Scripts
require IGGY_THEME_DIR . './inc/enqueue-scripts.php';


// Register Menus
require IGGY_THEME_DIR . './inc/menus.php';


// Register Widgets areas
require iguana_theme_dir . '/inc/widgets/widgets.php';