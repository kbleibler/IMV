<?php
    function dein_theme_register_menus() {
        register_nav_menus(
            array(
                'main_menu' => __( 'Hauptmenü', 'dein-theme' ),
                'footer_menu_1' => __( 'Footer Menü 1', 'dein-theme' ),
                )
        );
    }
    add_action( 'after_setup_theme', 'dein_theme_register_menus' );
    

    function enqueue_jquery() {
        wp_enqueue_script('jquery');
    }
    
    add_action('wp_enqueue_scripts', 'enqueue_jquery');

    function enqueue_custom_script() {
        // Enqueue script
        wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array(), null, true);
    }
    
    // Hook into the 'wp_enqueue_scripts' action
    add_action('wp_enqueue_scripts', 'enqueue_custom_script');
    
?>
