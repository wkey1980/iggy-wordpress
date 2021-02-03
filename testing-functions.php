<?php
/**
 * 
 * 
 * 
 * @package iggy
 */
?>

<?php

if ( ! function_exists( 'iggy_setup' ) ) :
    function iggy_setup() {
        load_theme_textdomain( 'iggy', get_template_directory() . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
    }
endif;
add_action( 'after_setup_theme', 'iggy_setup' );























// =====================================
// WordPress Customizer Custom Options
// =====================================

// Theme Options Panel
function iggy_customize_register( $wp_customize ) {

    // Table of Contents


    // DEFAULT THEME OPTIONS
        // Site Identity 
        // Menus
        // Widgets
        // Homepage Settings
        // Additional CSS




        

    // 1) General
    // 2) Site Title, Tagline, Logo
    // 3) Header Section
    // 4) Blog Options
    // 5) Fonts
    // 6) Footer Section
    // 7) Colours
    // 8) Header and Site Identity
    // 9) WordPress Default
        // 9.1) Site Identity
        // 9.2) Homepage Settings
        // 9.3 Additional CSS





$wp_customize->add_panel( 'iggy_theme_options_panel',
    array(
        
    )
);





// 1) General
$wp_customize->add_panel( 'iggy_general_panel',
    array(
        'priority' => ,
        'title' => __( '', 'iggy' ),
        'description' => __( '', 'iggy' ),
    )
);
// END General


// 2) Site Title, Tagline, Logo
$wp_customize->add_panel( 'iggy_Site-Title_Tagline_Logo_panel',
    array(
        'priority' => ,
        'title' => __( '', 'iggy' ),
        'description' => __( '', 'iggy' ),
    )
);
// END Site Title, Tagline, Logo


// 3) Header Section
$wp_customize->add_panel( 'iggy_header_panel',
    array(
        'priority' => ,
        'title' => __( '', 'iggy' ),
        'description' => __( '', 'iggy' ),
    )
);
// END Header Section


// 4) Blog Section
$wp_customize->add_panel( 'iggy__panel',
    array(
        'priority' => ,
        'title' => __( '', 'iggy' ),
        'description' => __( '', 'iggy' ),
    )
);
// END Blog Section


// 5) Fonts
$wp_customize->add_panel( 'iggy__panel',
    array(
        'priority' => ,
        'title' => __( '', 'iggy' ),
        'description' => __( '', 'iggy' ),
    )
);
// END Fonts

// 6) Footer Section
$wp_customize->add_panel( 'iggy__panel',
    array(
        'priority' => ,
        'title' => __( '', 'iggy' ),
        'description' => __( '', 'iggy' ),
    )
);
// END Footer Section


// 7) Colours
$wp_customize->add_panel( 'iggy__panel',
    array(
        'priority' => ,
        'title' => __( '', 'iggy' ),
        'description' => __( '', 'iggy' ),
    )
);
// END Colours


// 8) Theme Info
$wp_customize->add_panel( 'iggy__panel',
    array(
        'priority' => ,
        'title' => __( '', 'iggy' ),
        'description' => __( '', 'iggy' ),
    )
);
// END Theme Info




    
        // General Panel
        $wp_customize->add_panel( 'iggy__panel',
            array(
                'priority' => ,
                'title' => __( '', 'iggy' ),
                'description' => __( '', 'iggy' ),
            )
        );
    

    
        // General Panel
        $wp_customize->add_panel( 'iggy_general_panel',
            array(
                'priority' => ,
                'title' => __( 'General', 'iggy' ),
                'description' => __( 'Choose Theme General Options', 'iggy' ),
            )
        );
    

// 3
// 4
// 5

    // 6) Footer Section - (customizer-footer.php)
        // Footer Panel
        $wp_customize->add_panel( 'iggy_colours_panel',
            array(
            'priority' => 900,
            'title' => __( 'Colours', 'iggy' ),
            'description' => __( 'Choose theme colours', 'iggy' ),
            )
        );
    // END Footer Section

    // 7) Colours - (customizer-colours.php)
        // Colours Panel
        $wp_customize->add_panel( 'iggy_colours_panel',
            array(
                'priority' => 901,
                'title' => __( 'Colours', 'iggy' ),
                'description' => __( 'Choose theme colours', 'iggy' ),
            )
        );
    // END Colours






































    // Add Panel - Theme Options
    $wp_customize->add_panel( 'iggy_theme_options',
        array(
            'priority' => 1,
            'title' => __( 'Theme Options', 'iggy' ),
            'description' => __( 'Theme Options Description', 'iggy' ),
        )
    );
    // END Panel - Theme Options
        // Add Section - Text Options
        $wp_customize->add_section( 'iggy_text_options',
            array(
                'title' => __( 'Text Options', 'iggy' ),
                'priority' => 1,
                'panel' => 'iggy_theme_options',
            )
        );

        // Add Settings for Copyright text
        $wp_customize->add_setting( 'iggy_copyright_text',
            array(
                'default'=> __( 'All rights reserved', 'iggy' ),
                'sanitize_callback' => 'sanitize_text_field',
                'transport' => 'refresh',
            )
        );

        // Add Control for Copyright text
        $wp_customize->add_control( 'iggy_copyright_text',
            array(
                'type'        => 'text',
                'priority'    => 10,
                'section'     => 'iggy_text_options',
                'label'       => 'Copyright text',
                'description' => 'Text put here will be outputted in the footer',
            )
        );



                // Add Section - Text Options 2
                $wp_customize->add_section( 'iggy_text_options_2',
                array(
                    'title' => __( 'Text Options 2', 'iggy' ),
                    'priority' => 2,
                    'panel' => 'iggy_theme_options',
                )
            );
    
            // Add Settings for Copyright text
            $wp_customize->add_setting( 'iggy_copyright_text_2',
                array(
                    'default'=> __( 'All rights reserved', 'iggy' ),
                    'sanitize_callback' => 'sanitize_text_field',
                    'transport' => 'refresh',
                )
            );
    
            // Add Control for Copyright text
            $wp_customize->add_control( 'iggy_copyright_text_2',
                array(
                    'type'        => 'text',
                    'priority'    => 10,
                    'section'     => 'iggy_text_options_2',
                    'label'       => 'Copyright text',
                    'description' => 'Text put here will be outputted in the footer',
                )
            );


                // Add Section - Text Options 3
                $wp_customize->add_section( 'iggy_text_options_3',
                array(
                    'title' => __( 'Text Options 3', 'iggy' ),
                    'priority' => 3,
                    'panel' => 'iggy_theme_options',
                )
            );
    
            // Add Settings for Copyright text
            $wp_customize->add_setting( 'iggy_copyright_text_3',
                array(
                    'default'=> __( 'All rights reserved', 'iggy' ),
                    'sanitize_callback' => 'sanitize_text_field',
                    'transport' => 'refresh',
                )
            );
    
            // Add Control for Copyright text
            $wp_customize->add_control( 'iggy_copyright_text_3',
                array(
                    'type'        => 'text',
                    'priority'    => 10,
                    'section'     => 'iggy_text_options_3',
                    'label'       => 'Copyright text',
                    'description' => 'Text put here will be outputted in the footer',
                )
            );


















$wp_customize->add_section( 'iggy_general',
    array(
        'title' => __( 'General Options', 'iggy' ),
        'priority' => 3,
        // 'panel' => 'iggy_theme_options',
    )
);



$wp_customize->add_setting( 'iggy_enable_schema',
    array(
        'sanitize_callback' => 'iggy_sanitize_checkbox',
    )
);
$wp_customize->add_control( 'iggy_enable_schema',
    array(
        'type' => 'checkbox',
        'label' => __( 'Enable Schema Markup', 'iggy' ),
        'section' => 'iggy_general',
        'priority' => 10,
    )
);




















    // Add Section - Theme Header
    $wp_customize->add_section( 'iggy_theme_header',
        array(
            'title' => __( 'Theme Header', 'iggy' ),
            'priority' => 2,
            'panel' => 'iggy_theme_options',
        )
    );
    // END Add Section - Theme Header


    // Add Section - Layout
    $wp_customize->add_section( 'iggy_theme_layout',
        array(
            'title' => __( 'Theme Layout', 'iggy' ),
            'priority' => 3,
            'panel' => 'iggy_theme_options',
        )
    );
    // END Add Section - Layout


    // Add Section - Typography
    $wp_customize->add_section( 'iggy_theme_typography',
        array(
            'title' => __( 'Typography Header', 'iggy' ),
            'priority' => 4,
            'panel' => 'iggy_theme_options',
        )
    );
    // END Add Section - Typography


    // Add Section - Colours
    $wp_customize->add_section( 'iggy_theme_colours',
        array(
            'title' => __( 'Theme Colours', 'iggy' ),
            'priority' => 5,
            'panel' => 'iggy_theme_options',
        )
    );
    // END Add Section - Colours


    //Add Section - Theme Footer
    $wp_customize->add_section( 'iggy_theme_footer',
        array(
            'title' => __( 'Footer Colours', 'iggy' ),
            'priority' => 6,
            'panel' => 'iggy_theme_options',
        )
    );
    // END Add Section - Theme Footer






















    // USE BELOW CODE AS DUMMY TEXT CODE TO BUILD THEME PANELS
    // Add Section - Text Options
    $wp_customize->add_section( 'iggy_text_options',
        array(
            'title' => __( 'Text Options', 'iggy' ),
            'priority' => 1,
            'panel' => 'iggy_theme_options',
        )
    );

    // Add Settings for Copyright text
    $wp_customize->add_setting( 'iggy_copyright_text',
        array(
            'default'=> __( 'All rights reserved', 'iggy' ),
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'refresh',
        )
    );

    // Add Control for Copyright text
    $wp_customize->add_control( 'iggy_copyright_text',
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'iggy_text_options',
            'label'       => 'Copyright text',
            'description' => 'Text put here will be outputted in the footer',
        )
    );

}
add_action( 'customize_register', 'iggy_customize_register' );
