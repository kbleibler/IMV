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


    function enqueue_custom_script() {
        // Enqueue script
        wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array(), null, true);
    }
    
    // Hook into the 'wp_enqueue_scripts' action
    add_action('wp_enqueue_scripts', 'enqueue_custom_script');
    

// function custom_theme_widgets_init() {
//     register_sidebar( array(
//         'name'          => __( 'footer_widget_menu', 'dein-theme' ),
//         'id'            => 'custom_widget_area',
//         'description'   => __( 'footer_widget_menu', 'dein-theme' ),
//         'before_widget' => '<div id="%1$s" class="widget %2$s">',
//         'after_widget'  => '</div>',
//         'before_title'  => '<h2 class="widget-title">',
//         'after_title'   => '</h2>',
//     ) );
// }

// // Aktion, um die Funktion beim Initialisieren des Themes aufzurufen
// add_action( 'widgets_init', 'custom_theme_widgets_init' );
?>
