<?php
 
function unsl_transparencia_setup() {
    
    add_theme_support( 'title-tag' );
    
   
    register_nav_menus( array(
        'primary' => __( 'Menú Principal', 'unsl-transparencia' ),
    ) );
}
add_action( 'after_setup_theme', 'unsl_transparencia_setup' );

function unsl_transparencia_scripts() {

    wp_enqueue_script( 'tailwindcss', 'https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4', array(), null, false );
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'unsl_transparencia_scripts' );
?>